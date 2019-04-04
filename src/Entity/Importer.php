<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Importer
 *
 * @ORM\Table(name="importer")
 * @ORM\Entity
 */
class Importer
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


}
