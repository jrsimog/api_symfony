<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicle
 *
 * @ORM\Table(name="vehicle", uniqueConstraints={@ORM\UniqueConstraint(name="fk_origin_idx", columns={"origin_fk"}), @ORM\UniqueConstraint(name="fk_branch_office_idx", columns={"branch_office_fk"}), @ORM\UniqueConstraint(name="fk_state_idx", columns={"state_fk"}), @ORM\UniqueConstraint(name="fk_automotive_idx", columns={"automotive_fk"}), @ORM\UniqueConstraint(name="fk_priority_idx", columns={"priority_fk"}), @ORM\UniqueConstraint(name="vehicle_type_fk_idx", columns={"vehicle_type_fk"})})
 * @ORM\Entity
 */
class Vehicle
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
     * @ORM\Column(name="id_chassis", type="string", length=100, nullable=true)
     */
    private $idChassis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mark", type="string", length=55, nullable=true)
     */
    private $mark;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=45, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_date", type="string", length=45, nullable=true)
     */
    private $requestDate;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_fk", referencedColumnName="id")
     * })
     */
    private $stateFk;

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
     * @var \BranchOffice
     *
     * @ORM\ManyToOne(targetEntity="BranchOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="branch_office_fk", referencedColumnName="id")
     * })
     */
    private $branchOfficeFk;

    /**
     * @var \Origin
     *
     * @ORM\ManyToOne(targetEntity="Origin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origin_fk", referencedColumnName="id")
     * })
     */
    private $originFk;

    /**
     * @var \Priority
     *
     * @ORM\ManyToOne(targetEntity="Priority")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="priority_fk", referencedColumnName="id")
     * })
     */
    private $priorityFk;

    /**
     * @var \VehicleType
     *
     * @ORM\ManyToOne(targetEntity="VehicleType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vehicle_type_fk", referencedColumnName="id")
     * })
     */
    private $vehicleTypeFk;


}
