<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observation
 *
 * @ORM\Table(name="observation", uniqueConstraints={@ORM\UniqueConstraint(name="fk_vehicle_idx", columns={"vehicle_fk"})})
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentary(): ?string
    {
        return $this->commentary;
    }

    public function setCommentary(?string $commentary): self
    {
        $this->commentary = $commentary;

        return $this;
    }

    public function getVehicleFk(): ?Vehicle
    {
        return $this->vehicleFk;
    }

    public function setVehicleFk(?Vehicle $vehicleFk): self
    {
        $this->vehicleFk = $vehicleFk;

        return $this;
    }
    public function __toString() {
        return $this->getCommentary();
    }

}
