<?php

namespace App\Entity;

use App\Entity\Client;
use App\Entity\OrderDetails;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\OrderRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $creation_date;

    #[ORM\Column(type: 'datetime')]
    private $send_date;

    #[ORM\Column(type: 'string', length: 255)]
    private $statut;

    #[ORM\Column(type: 'integer')]
    private $total_price;

    #[ORM\OneToMany(mappedBy: 'id_Order', targetEntity: OrderDetails::class,cascade:['remove'])]
    private $OrderDetails;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'Orders')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_client;

    public function __construct()
    {
        $this->OrderDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getSendDate(): ?\DateTimeInterface
    {
        return $this->send_date;
    }

    public function setSendDate(\DateTimeInterface $send_date): self
    {
        $this->send_date = $send_date;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getTotalPrice(): ?int
    {
        return $this->total_price;
    }

    public function setTotalPrice(int $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * @return Collection<int, OrderDetails>
     */
    public function getOrderDetails(): Collection
    {
        return $this->OrderDetails;
    }

    public function addOrderDetail(OrderDetails $OrderDetail): self
    {
        if (!$this->OrderDetails->contains($OrderDetail)) {
            $this->OrderDetails[] = $OrderDetail;
            $OrderDetail->setIdOrder($this);
        }

        return $this;
    }

    public function removeOrderDetail(OrderDetails $OrderDetail): self
    {
        if ($this->OrderDetails->removeElement($OrderDetail)) {
            // set the owning side to null (unless already changed)
            if ($OrderDetail->getIdOrder() === $this) {
                $OrderDetail->setIdOrder(null);
            }
        }

        return $this;
    }

    public function getIdClient(): ?Client
    {
        return $this->id_client;
    }

    public function setIdClient(?Client $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }
    public function __toString(){
        return $this->id;
    }
}
