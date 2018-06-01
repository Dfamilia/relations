<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamentos
 *
 * @ORM\Table(name="departamentos")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\DepartamentosRepository")
 */
class Departamentos
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
     * @ORM\Column(name="descriccion", type="string", length=255)
     */
    private $descriccion;


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
     * Set descriccion
     *
     * @param string $descriccion
     *
     * @return Departamentos
     */
    public function setDescriccion($descriccion)
    {
        $this->descriccion = $descriccion;

        return $this;
    }

    /**
     * Get descriccion
     *
     * @return string
     */
    public function getDescriccion()
    {
        return $this->descriccion;
    }
}

