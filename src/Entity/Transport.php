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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(?string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(?string $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }
    public function getName() {
        return $this->getMark() .' '. $this->getModel() .' '. $this->getCapacity();
    }

    public function __toString() {
        return $this->getName();
    }


}
