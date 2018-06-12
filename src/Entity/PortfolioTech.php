<?php
/**
 * @author Kevin Saunders
 * Date: 12/06/2018
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="site_technologies")
 */
class PortfolioTech
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $pid;

    /**
     * @ORM\Column(type="string", name="techsection")
     */
    protected $techsection;

    /**
     * @ORM\Column(type="string", name="techkey")
     */
    protected $techkey;

    /**
     * @ORM\Column(type="string", name="technology")
     */
    protected $technology;

    /**
     * @ORM\Column(type="string", name="notes")
     */
    protected $notes;

    /**
     * @ORM\Column(type="string", name="techcontent")
     */
    protected $techcontent;

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**


    /**
     * @return mixed
     */
    public function getTechsection()
    {
        return $this->techsection;
    }

    /**
     * @param mixed $techsection
     */
    public function setTechsection($techsection)
    {
        $this->techsection = $techsection;
    }

    /**
     * @return mixed
     */
    public function getTechkey()
    {
        return $this->techkey;
    }

    /**
     * @param mixed $techkey
     */
    public function setTechkey($techkey)
    {
        $this->techkey = $techkey;
    }

    /**
     * @return mixed
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * @param mixed $technology
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getTechcontent()
    {
        return $this->techcontent;
    }

    /**
     * @param mixed $techcontent
     */
    public function setTechcontent($techcontent)
    {
        $this->techcontent = $techcontent;
    }



}