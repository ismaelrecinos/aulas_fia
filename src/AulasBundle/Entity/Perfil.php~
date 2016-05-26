<?php

namespace AulasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Perfil
 *
 * @ORM\Table(name="tbl_perfil")
 * @ORM\Entity(repositoryClass="AulasBundle\Repository\PerfilRepository")
 */
class Perfil
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
     * @ORM\OneToMany(targetEntity="UsuariosPerfiles", mappedBy="IdPerfil")
     */
    protected $listaPerfilesUsuarios;

    /**
     * @ORM\OneToMany(targetEntity="PerfilDetalle", mappedBy="IdPerfil")
     */
    protected $listaPerfilesDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="NombrePerfil", type="string", length=50)
     */
    private $nombrePerfil;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaAlta", type="datetime", nullable=true)
     */
    private $fechaAlta;


    public function __construct(){
        $this->listaPerfilesUsuarios = new ArrayCollection();
        $this->listaPerfilesDetalle = new ArrayCollection();
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
     * Set nombrePerfil
     *
     * @param string $nombrePerfil
     *
     * @return Perfil
     */
    public function setNombrePerfil($nombrePerfil)
    {
        $this->nombrePerfil = $nombrePerfil;

        return $this;
    }

    /**
     * Get nombrePerfil
     *
     * @return string
     */
    public function getNombrePerfil()
    {
        return $this->nombrePerfil;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Perfil
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Perfil
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
     * Add listaPerfilesUsuario
     *
     * @param \AulasBundle\Entity\UsuariosPerfiles $listaPerfilesUsuario
     *
     * @return Perfil
     */
    public function addListaPerfilesUsuario(\AulasBundle\Entity\UsuariosPerfiles $listaPerfilesUsuario)
    {
        $this->listaPerfilesUsuarios[] = $listaPerfilesUsuario;

        return $this;
    }

    /**
     * Remove listaPerfilesUsuario
     *
     * @param \AulasBundle\Entity\UsuariosPerfiles $listaPerfilesUsuario
     */
    public function removeListaPerfilesUsuario(\AulasBundle\Entity\UsuariosPerfiles $listaPerfilesUsuario)
    {
        $this->listaPerfilesUsuarios->removeElement($listaPerfilesUsuario);
    }

    /**
     * Get listaPerfilesUsuarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListaPerfilesUsuarios()
    {
        return $this->listaPerfilesUsuarios;
    }

    /**
     * Add listaPerfilesDetalle
     *
     * @param \AulasBundle\Entity\PerfilDetalle $listaPerfilesDetalle
     *
     * @return Perfil
     */
    public function addListaPerfilesDetalle(\AulasBundle\Entity\PerfilDetalle $listaPerfilesDetalle)
    {
        $this->listaPerfilesDetalle[] = $listaPerfilesDetalle;

        return $this;
    }

    /**
     * Remove listaPerfilesDetalle
     *
     * @param \AulasBundle\Entity\PerfilDetalle $listaPerfilesDetalle
     */
    public function removeListaPerfilesDetalle(\AulasBundle\Entity\PerfilDetalle $listaPerfilesDetalle)
    {
        $this->listaPerfilesDetalle->removeElement($listaPerfilesDetalle);
    }

    /**
     * Get listaPerfilesDetalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListaPerfilesDetalle()
    {
        return $this->listaPerfilesDetalle;
    }
}
