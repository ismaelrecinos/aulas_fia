<?php

namespace AulasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PerfilDetalle
 *
 * @ORM\Table(name="tbl_perfil_detalle")
 * @ORM\Entity(repositoryClass="AulasBundle\Repository\PerfilDetalleRepository")
 */
class PerfilDetalle
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
     * @ORM\ManyToOne(targetEntity="Perfil", inversedBy="listaPerfilesDetalle")
     * @ORM\JoinColumn(name="IdPerfil", referencedColumnName="id")
     */
    private $idPerfil;

    /**
     * @ORM\ManyToOne(targetEntity="Menus", inversedBy="listaMenusPerfDet")
     * @ORM\JoinColumn(name="IdMenu", referencedColumnName="id")
     */
    private $idMenu;

    /**
     * @ORM\ManyToOne(targetEntity="MenuSub", inversedBy="listaMenusSubPerfDet")
     * @ORM\JoinColumn(name="IdSubMenu", referencedColumnName="id")
     */
    private $idSubMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario", type="string", length=100, nullable=true)
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaAlta", type="datetime", nullable=true)
     */
    private $fechaAlta;


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
     * Set idPerfil
     *
     * @param integer $idPerfil
     *
     * @return PerfilDetalle
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;

        return $this;
    }

    /**
     * Get idPerfil
     *
     * @return int
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set idMenu
     *
     * @param integer $idMenu
     *
     * @return PerfilDetalle
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
     * Set idSubMenu
     *
     * @param integer $idSubMenu
     *
     * @return PerfilDetalle
     */
    public function setIdSubMenu($idSubMenu)
    {
        $this->idSubMenu = $idSubMenu;

        return $this;
    }

    /**
     * Get idSubMenu
     *
     * @return int
     */
    public function getIdSubMenu()
    {
        return $this->idSubMenu;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return PerfilDetalle
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return PerfilDetalle
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
}
