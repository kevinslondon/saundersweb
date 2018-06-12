<?php
/**
 *
 * @author Kevin Saunders
 * Date: 02/12/2015
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="site_media")
 */
class Image
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $mediaid;


    /**
     * @ORM\Column(type="string", name="mediaName")
     */
    protected $mediaName;

    /**
     * @ORM\Column(type="string", name="mediaHref")
     */
    protected $mediaHref;

    /**
     * @ORM\Column(type="string", name="mediaMicroThumb")
     */
    protected $mediaMicroThumb;

    /**
     * @ORM\Column(type="string", name="mediaThumb")
     */
    protected $mediaThumb;

    /**
     * @ORM\Column(type="string", name="mediaWeb")
     */
    protected $mediaWeb;

    /**
     * @ORM\Column(type="string", name="mediaAlt")
     */
    protected $mediaAlt;

    /**
     * @return mixed
     */
    public function getMediaid()
    {
        return $this->mediaid;
    }

    /**
     * @param mixed $mediaid
     */
    public function setMediaid($mediaid)
    {
        $this->mediaid = $mediaid;
    }



    /**
     * @return mixed
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * @param mixed $mediaName
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
    }

    /**
     * @return mixed
     */
    public function getMediaHref()
    {
        return $this->mediaHref;
    }

    /**
     * @param mixed $mediaHref
     */
    public function setMediaHref($mediaHref)
    {
        $this->mediaHref = $mediaHref;
    }

    /**
     * @return mixed
     */
    public function getMediaMicroThumb()
    {
        return $this->mediaMicroThumb;
    }

    /**
     * @param mixed $mediaMicroThumb
     */
    public function setMediaMicroThumb($mediaMicroThumb)
    {
        $this->mediaMicroThumb = $mediaMicroThumb;
    }

    /**
     * @return mixed
     */
    public function getMediaThumb()
    {
        return $this->mediaThumb;
    }

    /**
     * @param mixed $mediaThumb
     */
    public function setMediaThumb($mediaThumb)
    {
        $this->mediaThumb = $mediaThumb;
    }

    /**
     * @return mixed
     */
    public function getMediaWeb()
    {
        return $this->mediaWeb;
    }

    /**
     * @param mixed $mediaWeb
     */
    public function setMediaWeb($mediaWeb)
    {
        $this->mediaWeb = $mediaWeb;
    }

    /**
     * @return mixed
     */
    public function getMediaAlt()
    {
        return $this->mediaAlt;
    }

    /**
     * @param mixed $mediaAlt
     */
    public function setMediaAlt($mediaAlt)
    {
        $this->mediaAlt = $mediaAlt;
    }


}