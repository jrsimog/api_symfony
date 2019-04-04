<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Origin
 *
 * @ORM\Table(name="origin", uniqueConstraints={@ORM\UniqueConstraint(name="fk_branch_office_idx", columns={"branch_office_fk"}), @ORM\UniqueConstraint(name="fk_importer_idx", columns={"importer_fk"})})
 * @ORM\Entity
 */
class Origin
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
     * @var \BranchOffice
     *
     * @ORM\ManyToOne(targetEntity="BranchOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="branch_office_fk", referencedColumnName="id")
     * })
     */
    private $branchOfficeFk;

    /**
     * @var \Importer
     *
     * @ORM\ManyToOne(targetEntity="Importer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="importer_fk", referencedColumnName="id")
     * })
     */
    private $importerFk;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImporterFk(): ?Importer
    {
        return $this->importerFk;
    }

    public function setImporterFk(?Importer $importerFk): self
    {
        $this->importerFk = $importerFk;

        return $this;
    }
    public function getOrgin() {
        $importer = $this->getImporterFk();
        $branchOffice_ = $this->getBranchOfficeFk();
        return $this->getImporterFk() !== null ? $importer->getName() : $branchOffice_->getName();
    }
    
    public function __toString() {
        return $this->getOrgin();
    }


}
