<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cascaras
 *
 * @ORM\Table(name="cascaras")
 * @ORM\Entity
 */
class Cascaras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="preg", type="string", length=100, nullable=false)
     */
    private $preg;

    /**
     * @var string
     *
     * @ORM\Column(name="resp1", type="string", length=100, nullable=false)
     */
    private $resp1;

    /**
     * @var string
     *
     * @ORM\Column(name="resp2", type="string", length=100, nullable=false)
     */
    private $resp2;

    /**
     * @var string
     *
     * @ORM\Column(name="resp3", type="string", length=100, nullable=false)
     */
    private $resp3;

    /**
     * @var string
     *
     * @ORM\Column(name="resp4", type="string", length=100, nullable=false)
     */
    private $resp4;


}

