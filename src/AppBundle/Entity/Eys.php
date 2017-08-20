<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

/**
 * Eys
 *
 * @ORM\Table(name="eys")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EysRepository")
 */
class Eys
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
     * @ORM\Column(name="detalle", type="string", length=100)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="eos", type="string", length=3)
     */
    private $eos;

    /**
     * @var int
     *
     * @ORM\Column(name="valor", type="integer")
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="ot", type="string", length=10)
     */
    private $ot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


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
     * Set detalle
     *
     * @param string $detalle
     *
     * @return Eys
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set eos
     *
     * @param string $eos
     *
     * @return Eys
     */
    public function setEos($eos)
    {
        $this->eos = $eos;

        return $this;
    }

    /**
     * Get eos
     *
     * @return string
     */
    public function getEos()
    {
        return $this->eos;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     *
     * @return Eys
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return int
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set ot
     *
     * @param string $ot
     *
     * @return Eys
     */
    public function setOt($ot)
    {
        $this->ot = $ot;

        return $this;
    }

    /**
     * Get ot
     *
     * @return string
     */
    public function getOt()
    {
        return $this->ot;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Eys
     */
    public function setFecha()
    {
        $this->fecha = new \DateTime('2017-07-23 00:00:00');

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

