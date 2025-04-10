<?php

namespace App\Entity;

use App\Repository\SelectedHabitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SelectedHabitsRepository::class)]
class SelectedHabits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(length: 255)]
    // private ?string $name = null;

    #[ORM\OneToOne(inversedBy: 'selectedHabit', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true)]
    private ?Habit $habit = null;
    
    #[ORM\ManyToOne(targetEntity: OwnHabit::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?OwnHabit $ownHabit = null;

    #[ORM\ManyToOne(inversedBy: 'selectedHabit')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    /**
     * @var Collection<int, Tracking>
     */
    #[ORM\OneToMany(targetEntity: Tracking::class, mappedBy: 'selectedHabits')]
    private Collection $tracking;

    public function __construct()
    {
        $this->tracking = new ArrayCollection();
    }

    // /**
    //  * @var Collection<int, User>
    //  */
    // #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'selectedHabit')]
    // private Collection $user;

    // public function __construct()
    // {
    //     $this->user = new ArrayCollection();
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getName(): ?string
    // {
    //     return $this->name;
    // }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getHabit(): ?Habit
    {
        return $this->habit;
    }

    public function setHabit(Habit $habit): static
    {
        $this->habit = $habit;

        return $this;
    }

    public function getOwnHabit(): ?OwnHabit
    {
        return $this->ownHabit;
    }

    public function setOwnHabit(?OwnHabit $ownHabit): self
    {
        $this->ownHabit = $ownHabit;
        return $this;
    }

    
    /**
     * @return Collection<int, User>
     */
    // public function getUser(): Collection
    // {
    //     return $this->user;
    // }

    // public function addUser(User $user): static
    // {
    //     if (!$this->user->contains($user)) {
    //         $this->user->add($user);
    //         $user->setSelectedHabit($this);
    //     }

    //     return $this;
    // }

    // public function removeUser(User $user): static
    // {
    //     if ($this->user->removeElement($user)) {
    //         // set the owning side to null (unless already changed)
    //         if ($user->getSelectedHabit() === $this) {
    //             $user->setSelectedHabit(null);
    //         }
    //     }

    //     return $this;
    // }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Tracking>
     */
    public function getTracking(): Collection
    {
        return $this->tracking;
    }

    public function addTracking(Tracking $tracking): static
    {
        if (!$this->tracking->contains($tracking)) {
            $this->tracking->add($tracking);
            $tracking->setSelectedHabits($this);
        }

        return $this;
    }

    public function removeTracking(Tracking $tracking): static
    {
        if ($this->tracking->removeElement($tracking)) {
            // set the owning side to null (unless already changed)
            if ($tracking->getSelectedHabits() === $this) {
                $tracking->setSelectedHabits(null);
            }
        }

        return $this;
    }
}
