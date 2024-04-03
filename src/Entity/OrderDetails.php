<?php

namespace App\Entity;

use App\Entity\Product;
use App\Entity\Order;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\OrderDetailsRepository;

#[ORM\Entity(repositoryClass: OrderDetailsRepository::class)]
class OrderDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $product_quantity;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'OrderDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_product;

    #[ORM\ManyToOne(targetEntity: Order::class, inversedBy: 'OrderDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_Order;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductQuantity(): ?int
    {
        return $this->product_quantity;
    }

    public function setProductQuantity(int $product_quantity): self
    {
        $this->product_quantity = $product_quantity;

        return $this;
    }

    public function getIdProduct(): ?Product
    {
        return $this->id_product;
    }

    public function setIdProduct(?Product $id_product): self
    {
        $this->id_product = $id_product;

        return $this;
    }

    public function getIdOrder(): ?Order
    {
        return $this->id_Order;
    }

    public function setIdOrder(?Order $id_Order): self
    {
        $this->id_Order = $id_Order;

        return $this;
    }
    public function __toString(){
        return $this->id;
    }
}
