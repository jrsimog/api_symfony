<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="fk_profile_idx", columns={"profile_fk"}), @ORM\UniqueConstraint(name="fk_city_idx", columns={"city_fk"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="email", type="string", length=55, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=55, nullable=true)
     */
    private $phone;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_fk", referencedColumnName="id")
     * })
     */
    private $cityFk;

    /**
     * @var \Profile
     *
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_fk", referencedColumnName="id")
     * })
     */
    private $profileFk;

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

    public function getRut(): ?string
    {
        return $this->rut;
    }

    public function setRut(?string $rut): self
    {
        $this->rut = $rut;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

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

    public function getProfileFk(): ?Profile
    {
        return $this->profileFk;
    }

    public function setProfileFk(?Profile $profileFk): self
    {
        $this->profileFk = $profileFk;

        return $this;
    }


}
