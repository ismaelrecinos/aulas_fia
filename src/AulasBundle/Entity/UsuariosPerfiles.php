<?php

namespace AulasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UsuariosPerfiles
 *
 * @ORM\Table(name="tbl_usuarios_perfiles")
 * @ORM\Entity(repositoryClass="AulasBundle\Repository\UsuariosPerfilesRepository")
 */
class UsuariosPerfiles
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
     * @ORM\ManyToOne(targetEntity="Usuarios", inversedBy="listaUsuariosPerfiles")
     * @ORM\JoinColumn(name="IdUsuario", referencedColumnName="id")
     */
    private $idUsuario;

    /**
     * @ORM\ManyToOne(targetEntity="Perfil", inversedBy="listaPerfilesUsuarios")
     * @ORM\JoinColumn(name="IdPerfil", referencedColumnName="id")
     */
    private $idPerfil;


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
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return UsuariosPerfiles
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idPerfil
     *
     * @param integer $idPerfil
     *
     * @return UsuariosPerfiles
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
}
