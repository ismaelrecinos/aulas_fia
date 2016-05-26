<?php

namespace AulasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Menus
 *
 * @ORM\Table(name="tbl_menus")
 * @ORM\Entity(repositoryClass="AulasBundle\Repository\MenusRepository")
 */
class Menus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\OneToMany(targetEntity="MenuSub", mappedBy="idMenu")
     */ 
    protected $listaSubMenu;

    /**
     * @ORM\OneToMany(targetEntity="PerfilDetalle", mappedBy="idMenu")
     */
    protected $listaMenusPerfDet;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreMenu", type="string", length=100)
     */
    private $nombreMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=500)
     */
    private $uRL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaAlta", type="datetime", nullable=true)
     */
    private $fechaAlta;


    public function __construct()
    {
        $this->listaSubMenu = new ArrayCollection();
        $this->listaMenusPerfDet = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreMenu
     *
     * @param string $nombreMenu
     *
     * @return Menus
     */
    public function setNombreMenu($nombreMenu)
    {
        $this->nombreMenu = $nombreMenu;

        return $this;
    }

    /**
     * Get nombreMenu
     *
     * @return string
     */
    public function getNombreMenu()
    {
        return $this->nombreMenu;
    }

    /**
     * Set uRL
     *
     * @param string $uRL
     *
     * @return Menus
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Get uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Menus
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Add listaSubMenu
     *
     * @param \AulasBundle\Entity\tbl_menu_sub $listaSubMenu
     *
     * @return Menus
     */
    public function addListaSubMenu(\AulasBundle\Entity\tbl_menu_sub $listaSubMenu)
    {
        $this->listaSubMenu[] = $listaSubMenu;

        return $this;
    }

    /**
     * Remove listaSubMenu
     *
     * @param \AulasBundle\Entity\tbl_menu_sub $listaSubMenu
     */
    public function removeListaSubMenu(\AulasBundle\Entity\tbl_menu_sub $listaSubMenu)
    {
        $this->listaSubMenu->removeElement($listaSubMenu);
    }

    /**
     * Get listaSubMenu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListaSubMenu()
    {
        return $this->listaSubMenu;
    }

    /**
     * Add listaMenusPerfDet
     *
     * @param \AulasBundle\Entity\PerfilDetalle $listaMenusPerfDet
     *
     * @return Menus
     */
    public function addListaMenusPerfDet(\AulasBundle\Entity\PerfilDetalle $listaMenusPerfDet)
    {
        $this->listaMenusPerfDet[] = $listaMenusPerfDet;

        return $this;
    }

    /**
     * Remove listaMenusPerfDet
     *
     * @param \AulasBundle\Entity\PerfilDetalle $listaMenusPerfDet
     */
    public function removeListaMenusPerfDet(\AulasBundle\Entity\PerfilDetalle $listaMenusPerfDet)
    {
        $this->listaMenusPerfDet->removeElement($listaMenusPerfDet);
    }

    /**
     * Get listaMenusPerfDet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListaMenusPerfDet()
    {
        return $this->listaMenusPerfDet;
    }
}
