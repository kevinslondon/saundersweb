<?php
/**
 *
 * @author Kevin Saunders
 * Date: 02/12/2015
 */

namespace App\Controller;

use App\Entity\Repository\PortfolioRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{



    /**
     * @Route("/portfolio/{language}", name="portfolio", defaults={"language" = "php"})
     * @param $url
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($language)
    {
        $portfolio_items = $this->getRep()
            ->getPortfolioHomeList();

        return $this->render('portfolio.html.twig', compact('language', 'portfolio_items'));
    }

    /**
     * @return PortfolioRepository
     */
    private function getRep()
    {
        return $this->getDoctrine()
            ->getManager()
            ->getRepository('App:Portfolio');
    }
}