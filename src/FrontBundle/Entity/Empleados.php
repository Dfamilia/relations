<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleados
 *
 * @ORM\Table(name="empleados")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\EmpleadosRepository")
 */
class Empleados
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
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=200)
     */
    private $apellido;

    /**
     * @ORM\ManyToOne(targetEntity="Departamentos")
     */
    private $departamento;

    /**
     * @ORM\ManyToOne(targetEntity="Posiciones")
     */
    private $posicion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleados
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Empleados
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }


    /**
     * Set posicion
     *
     * @param \FrontBundle\Entity\Posiciones $posicion
     *
     * @return Empleados
     */
    public function setPosicion(\FrontBundle\Entity\Posiciones $posicion = null)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return \FrontBundle\Entity\Posiciones
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set departamento
     *
     * @param \FrontBundle\Entity\Departamentos $departamento
     *
     * @return Empleados
     */
    public function setDepartamento(\FrontBundle\Entity\Departamentos $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \FrontBundle\Entity\Departamentos
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
