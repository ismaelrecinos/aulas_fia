<?php

namespace AulasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuarios
 *
 * @ORM\Table(name="tbl_usuarios")
 * @ORM\Entity(repositoryClass="AulasBundle\Repository\UsuariosRepository")
 */
class Usuarios
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
     * @ORM\OneToMany(targetEntity="UsuariosPerfiles", mappedBy="idUsuario")
     */ 
    protected $listaUsuariosPerfiles;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario", type="string", length=25)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreUsuario", type="string", length=100)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="PassWord", type="string", length=25)
     */
    private $passWord;

    /**
     * @var int
     *
     * @ORM\Column(name="Vigencia", type="integer", nullable=true)
     */
    private $vigencia;

    /**
     * @var int
     *
     * @ORM\Column(name="Estatus", type="integer")
     */
    private $estatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaAlta", type="datetime", nullable=true)
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaEstatus", type="datetime", nullable=true)
     */
    private $fechaEstatus;

    public function __construct()
    {
        $this->listaUsuariosPerfiles = new ArrayCollection();
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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     *
     * @return Usuarios
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set passWord
     *
     * @param string $passWord
     *
     * @return Usuarios
     */
    public function setPassWord($passWord)
    {
        $this->passWord = $passWord;

        return $this;
    }

    /**
     * Get passWord
     *
     * @return string
     */
    public function getPassWord()
    {
        return $this->passWord;
    }

    /**
     * Set vigencia
     *
     * @param integer $vigencia
     *
     * @return Usuarios
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;

        return $this;
    }

    /**
     * Get vigencia
     *
     * @return int
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set estatus
     *
     * @param integer $estatus
     *
     * @return Usuarios
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return int
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Usuarios
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
     * Set fechaEstatus
     *
     * @param \DateTime $fechaEstatus
     *
     * @return Usuarios
     */
    public function setFechaEstatus($fechaEstatus)
    {
        $this->fechaEstatus = $fechaEstatus;

        return $this;
    }

    /**
     * Get fechaEstatus
     *
     * @return \DateTime
     */
    public function getFechaEstatus()
    {
        return $this->fechaEstatus;
    }

    /**
     * Add listaUsuariosPerfile
     *
     * @param \AulasBundle\Entity\UsuariosPerfiles $listaUsuariosPerfile
     *
     * @return Usuarios
     */
    public function addListaUsuariosPerfile(\AulasBundle\Entity\UsuariosPerfiles $listaUsuariosPerfile)
    {
        $this->listaUsuariosPerfiles[] = $listaUsuariosPerfile;

        return $this;
    }

    /**
     * Remove listaUsuariosPerfile
     *
     * @param \AulasBundle\Entity\UsuariosPerfiles $listaUsuariosPerfile
     */
    public function removeListaUsuariosPerfile(\AulasBundle\Entity\UsuariosPerfiles $listaUsuariosPerfile)
    {
        $this->listaUsuariosPerfiles->removeElement($listaUsuariosPerfile);
    }

    /**
     * Get listaUsuariosPerfiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListaUsuariosPerfiles()
    {
        return $this->listaUsuariosPerfiles;
    }
}
