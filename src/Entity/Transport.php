<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport
 *
 * @ORM\Table(name="transport")
 * @ORM\Entity
 */
class Transport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mark", type="string", length=55, nullable=true)
     */
    private $mark;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=55, nullable=true)
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="capacity", type="string", length=55, nullable=true)
     */
    private $capacity;


}
