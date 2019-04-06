<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Origin
 *
 * @ORM\Table(name="origin", indexes={@ORM\Index(name="fk_branch_office_idx", columns={"branch_office_fk"}), @ORM\Index(name="fk_importer_idx", columns={"importer_fk"})})
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


}
