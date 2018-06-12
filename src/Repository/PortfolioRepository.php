<?php
/**
 *
 * @author Kevin Saunders
 * Date: 22/12/2015
 */

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class PortfolioRepository extends EntityRepository
{

    public  function getPortfolioHomeList()
    {
        $portfolio_result = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('p')
            ->from('App:Portfolio','p')
            ->leftJoin('p.image', 'i')
            ->setMaxResults(10)
            ->orderBy('p.pageDate', 'DESC')
            ->getQuery()
            ->getResult()
        ;

        return $portfolio_result;

        $portfolio_ids = array_map(function($p)  {return $p->getPageid(); }, $portfolio_result);
        //print_r($portfolio_ids);

        $images = $this->getEntityManager()
            ->createQuery('SELECT i FROM AppBundle:Image i WHERE i.mediaid IN (:image_ids)')
            ->setParameter('image_ids', $portfolio_ids)
            ->getResult();

        $image_map = [];
        foreach($images as $i){
            $image_map[$i->getMediaid()] = $i;
        }

        foreach($portfolio_result as &$portfolio){
            if(isset($image_map[$portfolio->getImageid()])){
                $portfolio->setImage($image_map[$portfolio->getImageid()]);
            }
        }

        return $portfolio_result;
    }
}