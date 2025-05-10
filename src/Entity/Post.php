<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    private ?User $User = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $DateCreate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $DateDelete = null;

    #[ORM\Column]
    private ?bool $IsDeleted = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): static
    {
        $this->User = $User;

        return $this;
    }

    public function getDateCreate(): ?\DateTime
    {
        return $this->DateCreate;
    }

    public function setDateCreate(\DateTime $DateCreate): static
    {
        $this->DateCreate = $DateCreate;

        return $this;
    }

    public function getDateDelete(): ?\DateTime
    {
        return $this->DateDelete;
    }

    public function setDateDelete(?\DateTime $DateDelete): static
    {
        $this->DateDelete = $DateDelete;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->IsDeleted;
    }

    public function setIsDeleted(bool $IsDeleted): static
    {
        $this->IsDeleted = $IsDeleted;

        return $this;
    }
}
