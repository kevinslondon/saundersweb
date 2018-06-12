<?php
/**
 *
 * @author Kevin Saunders
 * Date: 30/11/2015
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{



    /**
     * @Route("/page/{url}", name="pages")
     * @param $url
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pageAction($url)
    {
        $pages = $this->getDoctrine()
            ->getRepository('App:Page')
            ->findBy(['url'=>'/'.$url.'/']);


        return $this->render('page.html.twig', compact('url','pages'));
    }
}