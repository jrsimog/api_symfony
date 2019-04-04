<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BranchOffice
 *
 * @ORM\Table(name="branch_office", uniqueConstraints={@ORM\UniqueConstraint(name="fk_city_idx", columns={"city_fk"}), @ORM\UniqueConstraint(name="fk_automotive_idx", columns={"automotive_fk"})})
 * @ORM\Entity
 */
class BranchOffice
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
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var \Automotive
     *
     * @ORM\ManyToOne(targetEntity="Automotive")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="automotive_fk", referencedColumnName="id")
     * })
     */
    private $automotiveFk;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_fk", referencedColumnName="id")
     * })
     */
    private $cityFk;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAutomotiveFk(): ?Automotive
    {
        return $this->automotiveFk;
    }

    public function setAutomotiveFk(?Automotive $automotiveFk): self
    {
        $this->automotiveFk = $automotiveFk;

        return $this;
    }

    public function getCityFk(): ?City
    {
        return $this->cityFk;
    }

    public function setCityFk(?City $cityFk): self
    {
        $this->cityFk = $cityFk;

        return $this;
    }


}
