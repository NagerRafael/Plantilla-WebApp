<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura", indexes={@ORM\Index(name="IDX_F9EBA009FCF8192D", columns={"id_usuario"}), @ORM\Index(name="IDX_F9EBA009B197184E", columns={"id_ticket"})})
 * @ORM\Entity
 */
class Factura
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_factura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="factura_id_factura_seq", allocationSize=1, initialValue=1)
     */
    private $idFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_factura", type="string", length=500, nullable=true)
     */
    private $descripcionFactura;

    /**
     * @var float
     *
     * @ORM\Column(name="total_factura", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_factura", type="string", length=1, nullable=true)
     */
    private $estadoFactura;

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
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ticket", referencedColumnName="id_ticket")
     * })
     */
    private $idTicket;


}
