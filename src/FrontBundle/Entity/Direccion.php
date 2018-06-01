<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="direccion")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\DireccionRepository")
 */
class Direccion
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
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion2", type="string", length=255)
     */
    private $direccion2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=10)
     */
    private $zipcode;


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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set direccion2
     *
     * @param string $direccion2
     *
     * @return direccion
     */
    public function setDireccion2($direccion2)
    {
        $this->direccion2 = $direccion2;

        return $this;
    }

    /**
     * Get direccion2
     *
     * @return string
     */
    public function getDireccion2()
    {
        return $this->direccion2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return direccion
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return direccion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return direccion
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
}

