<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuItemRepository")
 */
class MenuItem
{
    /**
     * One Menu has Many SubMenus .
     * @ORM\OneToMany(targetEntity="MenuItem", mappedBy="parent")
     */
    private $menu;

    /**
     * Many SubMenus have One Menu.
     * @ORM\ManyToOne(targetEntity="MenuItem", inversedBy="menu")
     * @ORM\JoinColumn(name="subMenu_id", referencedColumnName="id")
     */
    private $subMenu;
    // ..
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
     * @ORM\Column(name="nombreMI", type="string", length=255)
     */
    private $nombreMI;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionMI", type="string", length=255)
     */
    private $descripcionMI;

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
     * Set nombreMI
     *
     * @param string $nombreMI
     * @return MenuItem
     */
    public function setNombreMI($nombreMI)
    {
        $this->nombreMI = $nombreMI;

        return $this;
    }

    /**
     * Get nombreMI
     *
     * @return string
     */
    public function getNombreMI()
    {
        return $this->nombreMI;
    }

    /**
     * Set descripcionMI
     *
     * @param string $descripcionMI
     * @return MenuItem
     */
    public function setDescripcionMI($descripcionMI)
    {
        $this->descripcionMI = $descripcionMI;

        return $this;
    }

    /**
     * Get descripcionMI
     *
     * @return string
     */
    public function getDescripcionMI()
    {
        return $this->descripcionMI;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return MenuItem
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
