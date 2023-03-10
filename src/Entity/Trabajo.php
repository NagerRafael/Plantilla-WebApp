<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabajo
 *
 * @ORM\Table(name="trabajo")
 * @ORM\Entity
 */
class Trabajo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_trabajo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trabajo_id_trabajo_seq", allocationSize=1, initialValue=1)
     */
    private $idTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_trabajo", type="string", length=50, nullable=false)
     */
    private $nombreTrabajo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_trabajo", type="string", length=1, nullable=true)
     */
    private $estadoTrabajo;


}
