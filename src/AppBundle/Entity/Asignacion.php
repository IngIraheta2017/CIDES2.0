<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsignacionRepository")
 */
class Asignacion
  {   /**
     * Many Asignaciones have One Rol.
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="asignacion")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $fkusuario;
    /**
     * Many Asignaciones have One Rol.
     * @ORM\ManyToOne(targetEntity="Rol", inversedBy="asignacion")
     * @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     */
    private $fkrol;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
