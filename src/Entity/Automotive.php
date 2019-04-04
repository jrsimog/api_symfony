<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Automotive
 *
 * @ORM\Table(name="automotive")
 * @ORM\Entity
 */
class Automotive
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rut", type="string", length=11, nullable=true)
     */
    private $rut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;


}
