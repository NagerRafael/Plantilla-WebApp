<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="IDX_97A0ADA3FCF8192D", columns={"id_usuario"}), @ORM\Index(name="IDX_97A0ADA3234B117A", columns={"id_trabajo"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ticket_id_ticket_seq", allocationSize=1, initialValue=1)
     */
    private $idTicket;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_ticket", type="string", length=500, nullable=true)
     */
    private $descripcionTicket;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ticket", type="date", nullable=false)
     */
    private $fechaTicket;

    /**
     * @var int
     *
     * @ORM\Column(name="horas_ticket", type="integer", nullable=false)
     */
    private $horasTicket;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_ticket", type="string", length=1, nullable=true)
     */
    private $estadoTicket;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    /**
     * @var \Trabajo
     *
     * @ORM\ManyToOne(targetEntity="Trabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trabajo", referencedColumnName="id_trabajo")
     * })
     */
    private $idTrabajo;


}
