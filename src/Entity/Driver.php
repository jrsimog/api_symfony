<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driver
 *
 * @ORM\Table(name="driver", uniqueConstraints={@ORM\UniqueConstraint(name="fk_user_idx", columns={"user_fk"})})
 * @ORM\Entity
 */
class Driver
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_fk", referencedColumnName="id")
     * })
     */
    private $userFk;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserFk(): ?User
    {
        return $this->userFk;
    }

    public function setUserFk(?User $userFk): self
    {
        $this->userFk = $userFk;

        return $this;
    }


}
