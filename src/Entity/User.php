<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: "users")]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]

    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column]
    private bool $isVerified = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastname = null;

    // /**
    //  * @var Collection<int, Habit>
    //  */
    // #[ORM\OneToMany(targetEntity: Habit::class, mappedBy: 'user')]
    // private Collection $habit;

    /**
     * @var Collection<int, OwnHabit>
     */
    #[ORM\OneToMany(targetEntity: OwnHabit::class, mappedBy: 'user')]
    private Collection $ownHabit;

    /**
     * @var Collection<int, SelectedHabits>
     */
    #[ORM\OneToMany(targetEntity: SelectedHabits::class, mappedBy: 'user')]
    private Collection $selectedHabit;

    /**
     * @var Collection<int, Tracking>
     */
    #[ORM\OneToMany(targetEntity: Tracking::class, mappedBy: 'user')]
    private Collection $trackings;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $joinDate = null;

    #[ORM\Column(length: 255)]
    private ?string $gender = null;

    /**
     * @var Collection<int, Post>
     */
    #[ORM\OneToMany(targetEntity: Post::class, mappedBy: 'User')]
    private Collection $posts;

    /**
     * @var Collection<int, Achievement>
     */
    #[ORM\OneToMany(targetEntity: Achievement::class, mappedBy: 'user')]
    private Collection $achievements;

    #[ORM\Column(name: "current_streak", type: "integer", nullable: true)]
    private ?int $currentStreak = null;

    // #[ORM\ManyToOne(inversedBy: 'user')]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?SelectedHabits $selectedHabit = null;

    public function __construct()
    {
        $this->habit = new ArrayCollection();
        $this->ownHabit = new ArrayCollection();
        $this->selectedHabit = new ArrayCollection();
        $this->trackings = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->achievements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    /**
     * @see UserInterface
     */
    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    // /**
    //  * @return Collection<int, Habit>
    //  */
    // public function getHabit(): Collection
    // {
    //     return $this->habit;
    // }

    // public function addHabit(Habit $habit): static
    // {
    //     if (!$this->habit->contains($habit)) {
    //         $this->habit->add($habit);
    //         $habit->setUser($this);
    //     }

    //     return $this;
    // }

    // public function removeHabit(Habit $habit): static
    // {
    //     if ($this->habit->removeElement($habit)) {
    //         // set the owning side to null (unless already changed)
    //         if ($habit->getUser() === $this) {
    //             $habit->setUser(null);
    //         }
    //     }

    //     return $this;
    // }

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
            $ownHabit->setUser($this);
        }

        return $this;
    }

    public function removeOwnHabit(OwnHabit $ownHabit): static
    {
        if ($this->ownHabit->removeElement($ownHabit)) {
            // set the owning side to null (unless already changed)
            if ($ownHabit->getUser() === $this) {
                $ownHabit->setUser(null);
            }
        }

        return $this;
    }

    // public function getSelectedHabit(): ?SelectedHabits
    // {
    //     return $this->selectedHabit;
    // }

    // public function setSelectedHabit(?SelectedHabits $selectedHabit): static
    // {
    //     $this->selectedHabit = $selectedHabit;

    //     return $this;
    // }

    /**
     * @return Collection<int, SelectedHabits>
     */
    public function getSelectedHabit(): Collection
    {
        return $this->selectedHabit;
    }

    public function addSelectedHabit(SelectedHabits $selectedHabit): static
    {
        if (!$this->selectedHabit->contains($selectedHabit)) {
            $this->selectedHabit->add($selectedHabit);
            $selectedHabit->setUser($this);
        }

        return $this;
    }

    public function removeSelectedHabit(SelectedHabits $selectedHabit): static
    {
        if ($this->selectedHabit->removeElement($selectedHabit)) {
            // set the owning side to null (unless already changed)
            if ($selectedHabit->getUser() === $this) {
                $selectedHabit->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tracking>
     */
    public function getTrackings(): Collection
    {
        return $this->trackings;
    }

    public function addTracking(Tracking $tracking): static
    {
        if (!$this->trackings->contains($tracking)) {
            $this->trackings->add($tracking);
            $tracking->setUser($this);
        }

        return $this;
    }

    public function removeTracking(Tracking $tracking): static
    {
        if ($this->trackings->removeElement($tracking)) {
            // set the owning side to null (unless already changed)
            if ($tracking->getUser() === $this) {
                $tracking->setUser(null);
            }
        }

        return $this;
    }

    public function getJoinDate(): ?\DateTimeInterface
    {
        return $this->joinDate;
    }

    public function setJoinDate(\DateTimeInterface $joinDate): static
    {
        $this->joinDate = $joinDate;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): static
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
            $post->setUser($this);
        }

        return $this;
    }

    public function removePost(Post $post): static
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getUser() === $this) {
                $post->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Achievement>
     */
    public function getAchievements(): Collection
    {
        return $this->achievements;
    }

    public function addAchievement(Achievement $achievement): static
    {
        if (!$this->achievements->contains($achievement)) {
            $this->achievements->add($achievement);
            $achievement->setUser($this);
        }

        return $this;
    }

    public function removeAchievement(Achievement $achievement): static
    {
        if ($this->achievements->removeElement($achievement)) {
            // set the owning side to null (unless already changed)
            if ($achievement->getUser() === $this) {
                $achievement->setUser(null);
            }
        }

        return $this;
    }

    public function getCurrentStreak(): ?int
    {
        return $this->currentStreak;
    }

    public function setCurrentStreak(?int $currentStreak): static
    {
        $this->currentStreak = $currentStreak;

        return $this;
    }
    }
