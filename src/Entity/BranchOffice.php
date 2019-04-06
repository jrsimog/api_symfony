<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BranchOffice
 *
 * @ORM\Table(name="branch_office", indexes={@ORM\Index(name="fk_automotive_idx", columns={"automotive_fk"}), @ORM\Index(name="fk_city_idx", columns={"city_fk"})})
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


}
