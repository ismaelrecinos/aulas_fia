<?php

namespace AulasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MenuSub
 *
 * @ORM\Table(name="tbl_menu_sub")
 * @ORM\Entity(repositoryClass="AulasBundle\Repository\MenuSubRepository")
 */
class MenuSub
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
     * @ORM\ManyToOne(targetEntity="Menus", inversedBy="listaSubMenu")
     * @ORM\JoinColumn(name="IdMenu", referencedColumnName="id")
     */
    private $idMenu;

    /**
     * @ORM\OneToMany(targetEntity="PerfilDetalle", mappedBy="idSubMenu")
     */
    protected $listaMenusSubPerfDet;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreSubMenu", type="string", length=200)
     */
    private $nombreSubMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=200)
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
        $this->listaMenusSubPerfDet = new ArrayCollection();
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
     * Set idMenu
     *
     * @param integer $idMenu
     *
     * @return MenuSub
     */
    public function setIdMenu($idMenu)
    {
        $this->idMenu = $idMenu;

        return $this;
    }

    /**
     * Get idMenu
     *
     * @return int
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * Set nombreSubMenu
     *
     * @param string $nombreSubMenu
     *
     * @return MenuSub
     */
    public function setNombreSubMenu($nombreSubMenu)
    {
        $this->nombreSubMenu = $nombreSubMenu;

        return $this;
    }

    /**
     * Get nombreSubMenu
     *
     * @return string
     */
    public function getNombreSubMenu()
    {
        return $this->nombreSubMenu;
    }

    /**
     * Set uRL
     *
     * @param string $uRL
     *
     * @return MenuSub
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
     * @return MenuSub
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
     * Add listaMenusSubPerfDet
     *
     * @param \AulasBundle\Entity\PerfilDetalle $listaMenusSubPerfDet
     *
     * @return MenuSub
     */
    public function addListaMenusSubPerfDet(\AulasBundle\Entity\PerfilDetalle $listaMenusSubPerfDet)
    {
        $this->listaMenusSubPerfDet[] = $listaMenusSubPerfDet;

        return $this;
    }

    /**
     * Remove listaMenusSubPerfDet
     *
     * @param \AulasBundle\Entity\PerfilDetalle $listaMenusSubPerfDet
     */
    public function removeListaMenusSubPerfDet(\AulasBundle\Entity\PerfilDetalle $listaMenusSubPerfDet)
    {
        $this->listaMenusSubPerfDet->removeElement($listaMenusSubPerfDet);
    }

    /**
     * Get listaMenusSubPerfDet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListaMenusSubPerfDet()
    {
        return $this->listaMenusSubPerfDet;
    }
}
