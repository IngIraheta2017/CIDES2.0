<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RolRepository")
 */
class Rol
{     /**
     * One Rol has Many Asignaciones.
     * @ORM\OneToMany(targetEntity="Asignacion", mappedBy="fkRol")
     */
    private $asignacion;
    // ...

    public function __construct() {
        $this->asignacion = new ArrayCollection();
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreR", type="string", length=255)
     */
    private $nombreR;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionR", type="string", length=255)
     */
    private $descripcionR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreR
     *
     * @param string $nombreR
     * @return Rol
     */
    public function setNombreR($nombreR)
    {
        $this->nombreR = $nombreR;

        return $this;
    }

    /**
     * Get nombreR
     *
     * @return string
     */
    public function getNombreR()
    {
        return $this->nombreR;
    }

    /**
     * Set descripcionR
     *
     * @param string $descripcionR
     * @return Rol
     */
    public function setDescripcionR($descripcionR)
    {
        $this->descripcionR = $descripcionR;

        return $this;
    }

    /**
     * Get descripcionR
     *
     * @return string
     */
    public function getDescripcionR()
    {
        return $this->descripcionR;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Rol
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }
}
