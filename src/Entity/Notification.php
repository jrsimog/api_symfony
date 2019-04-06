<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="fk_branch_office_idx", columns={"branch_office_fk"})})
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


}
