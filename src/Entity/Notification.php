<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", uniqueConstraints={@ORM\UniqueConstraint(name="fk_branch_office_idx", columns={"branch_office_fk"})})
 * @ORM\Entity
 */
class Notification
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
     * @var int|null
     *
     * @ORM\Column(name="output", type="integer", nullable=true)
     */
    private $output;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reception", type="integer", nullable=true)
     */
    private $reception;

    /**
     * @var \BranchOffice
     *
     * @ORM\ManyToOne(targetEntity="BranchOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="branch_office_fk", referencedColumnName="id")
     * })
     */
    private $branchOfficeFk;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOutput(): ?int
    {
        return $this->output;
    }

    public function setOutput(?int $output): self
    {
        $this->output = $output;

        return $this;
    }

    public function getReception(): ?int
    {
        return $this->reception;
    }

    public function setReception(?int $reception): self
    {
        $this->reception = $reception;

        return $this;
    }

    public function getBranchOfficeFk(): ?BranchOffice
    {
        return $this->branchOfficeFk;
    }

    public function setBranchOfficeFk(?BranchOffice $branchOfficeFk): self
    {
        $this->branchOfficeFk = $branchOfficeFk;

        return $this;
    }
    public function getName() {
        $who = $this->getBranchOfficeFk();
        return $who->getName();
    }
    public function __toString() {
        return $this->getName();
    }


}
