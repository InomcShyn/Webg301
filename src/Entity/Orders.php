<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateOrders;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantily;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOrders(): ?\DateTimeInterface
    {
        return $this->DateOrders;
    }

    public function setDateOrders(\DateTimeInterface $DateOrders): self
    {
        $this->DateOrders = $DateOrders;

        return $this;
    }

    public function getQuantily(): ?int
    {
        return $this->quantily;
    }

    public function setQuantily(int $quantily): self
    {
        $this->quantily = $quantily;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->Total;
    }

    public function setTotal(string $Total): self
    {
        $this->Total = $Total;

        return $this;
    }
}
