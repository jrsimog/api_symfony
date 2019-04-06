<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observation
 *
 * @ORM\Table(name="observation", indexes={@ORM\Index(name="fk_vehicle_idx", columns={"vehicle_fk"})})
 * @ORM\Entity
 */
class Observation
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
     * @ORM\Column(name="commentary", type="string", length=100, nullable=true)
     */
    private $commentary;

    /**
     * @var \Vehicle
     *
     * @ORM\ManyToOne(targetEntity="Vehicle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vehicle_fk", referencedColumnName="id")
     * })
     */
    private $vehicleFk;


}
