<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permiso")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PermisoRepository")
 */
class Permiso
{   /**
     * Many Permisos have One MenuItem.
     * @ORM\ManyToOne(targetEntity="MenuItem")
     * @ORM\JoinColumn(name="menuItem_id", referencedColumnName="id")
     */
     private $menuItem;
     /**
          * Many Permisos have One ROL.
          * @ORM\ManyToOne(targetEntity="Rol")
          * @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
          */
          private $rol;  
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
