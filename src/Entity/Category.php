<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Habit>
     */
    #[ORM\OneToMany(targetEntity: Habit::class, mappedBy: 'category')]
    private Collection $habit;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, OwnHabit>
     */
    #[ORM\OneToMany(targetEntity: OwnHabit::class, mappedBy: 'category')]
    private Collection $ownHabit;

    public function __construct()
    {
        $this->habit = new ArrayCollection();
        $this->ownHabit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Habit>
     */
    public function getHabit(): Collection
    {
        return $this->habit;
    }

    public function addHabit(Habit $habit): static
    {
        if (!$this->habit->contains($habit)) {
            $this->habit->add($habit);
            $habit->setCategory($this);
        }

        return $this;
    }

    public function removeHabit(Habit $habit): static
    {
        if ($this->habit->removeElement($habit)) {
            // set the owning side to null (unless already changed)
            if ($habit->getCategory() === $this) {
                $habit->setCategory(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, OwnHabit>
     */
    public function getOwnHabit(): Collection
    {
        return $this->ownHabit;
    }

    public function addOwnHabit(OwnHabit $ownHabit): static
    {
        if (!$this->ownHabit->contains($ownHabit)) {
            $this->ownHabit->add($ownHabit);
            $ownHabit->setCategory($this);
        }

        return $this;
    }

    public function removeOwnHabit(OwnHabit $ownHabit): static
    {
        if ($this->ownHabit->removeElement($ownHabit)) {
            // set the owning side to null (unless already changed)
            if ($ownHabit->getCategory() === $this) {
                $ownHabit->setCategory(null);
            }
        }

        return $this;
    }
}
