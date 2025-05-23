<?php

namespace App\Entity;

use App\Repository\HabitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabitRepository::class)]
class Habit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\ManyToOne(inversedBy: 'habit')]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?User $user = null;

    // /**
    //  * @var Collection<int, Tracking>
    //  */
    // #[ORM\OneToMany(targetEntity: Tracking::class, mappedBy: 'habit', orphanRemoval: true)]
    // private Collection $tracking;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'habit')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\OneToMany(mappedBy: 'habit', targetEntity: SelectedHabits::class)]
    private Collection $selectedHabits;
    

    public function __construct()
    {
        $this->tracking = new ArrayCollection();
        $this->selectedHabits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getUser(): ?User
    // {
    //     return $this->user;
    // }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Tracking>
     */
    public function getTracking(): Collection
    {
        return $this->tracking;
    }

    // public function addTracking(Tracking $tracking): static
    // {
    //     if (!$this->tracking->contains($tracking)) {
    //         $this->tracking->add($tracking);
    //         $tracking->setHabit($this);
    //     }

    //     return $this;
    // }

    // public function removeTracking(Tracking $tracking): static
    // {
    //     if ($this->tracking->removeElement($tracking)) {
    //         // set the owning side to null (unless already changed)
    //         if ($tracking->getHabit() === $this) {
    //             $tracking->setHabit(null);
    //         }
    //     }

    //     return $this;
    // }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }


    /**
 * @return Collection<int, SelectedHabits>
 */
    public function getSelectedHabits(): Collection
    {
        return $this->selectedHabits;
    }

    public function addSelectedHabit(SelectedHabits $selectedHabit): static
    {
        if (!$this->selectedHabits->contains($selectedHabit)) {
            $this->selectedHabits[] = $selectedHabit;
            $selectedHabit->setHabit($this);
        }

        return $this;
    }

    public function removeSelectedHabit(SelectedHabits $selectedHabit): static
    {
        if ($this->selectedHabits->removeElement($selectedHabit)) {
            // set the owning side to null (unless already changed)
            // if ($selectedHabit->getHabit() === $this) {
            //     $selectedHabit->setHabit(null);
            // }
        }

        return $this;
    }

}
