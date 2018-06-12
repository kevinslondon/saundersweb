<?php
/**
 *
 * @author Kevin Saunders
 * Date: 02/12/2015
 */

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="site_portfolio")
 * @ORM\Entity(repositoryClass="App\Repository\PortfolioRepository")
 */
class Portfolio
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $pageid;

    /**
     * @ORM\Column(type="integer", name="imageid")
     */
    protected $imageid;

    /**
     * @ORM\OneToOne(targetEntity="Image",fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="imageid", referencedColumnName="mediaid")
     * @var Image
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="PortfolioTech",fetch="EAGER")
     * @ORM\JoinTable(name="site_techlist",
     *     joinColumns={@ORM\JoinColumn(name="pageid",referencedColumnName="pageid")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="techid",referencedColumnName="pid")} )
     * @var ArrayCollection
     */
    private $tech;

    /**
     * @ORM\Column(type="string", name="shortTitle")
     */
    protected $shortTitle;

    /**
     * @ORM\Column(type="date", name="pageDate")
     */
    protected $pageDate;

    /**
     * @ORM\Column(type="string", name="url")
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

    public function __construct()
    {
        $this->tech = new ArrayCollection();
    }

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
    public function getImageid()
    {
        return $this->imageid;
    }

    /**
     * @param mixed $imageid
     */
    public function setImageid($imageid)
    {
        $this->imageid = $imageid;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPageDate()
    {
        return $this->pageDate;
    }

    /**
     * @param mixed $pageDate
     */
    public function setPageDate($pageDate)
    {
        $this->pageDate = $pageDate;
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

    /**
     * @return ArrayCollection
     */
    public function getTech()
    {
        return $this->tech;
    }

    /**
     * @param ArrayCollection $tech
     */
    public function setTech($tech)
    {
        $this->tech = $tech;
    }





}