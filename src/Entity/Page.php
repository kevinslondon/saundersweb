<?php
namespace App\Entity;

/**
 *
 * @author Kevin Saunders
 * Date: 30/11/2015
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="site_pages")
 */
class Page
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $pageid;

    /**
     * @ORM\Column(type="string", name="shortTitle")
     */
    protected $shortTitle;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $url;

    /**
     * @ORM\Column(type="string",name="pageTitle")
     */
    protected $pageTitle;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @return mixed
     */
    public function getPageid()
    {
        return $this->pageid;
    }

    /**
     * @param mixed $pageid
     */
    public function setPageid($pageid)
    {
        $this->pageid = $pageid;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }



    /**
     * @return mixed
     */
    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    /**
     * @param mixed $shortTitle
     */
    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;
    }

    /**
     * @return mixed
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * @param mixed $pageTitle
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}