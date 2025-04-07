<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
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

    /**
     * @var Collection<int, Habit>
     */
    #[ORM\OneToMany(targetEntity: Habit::class, mappedBy: 'user')]
    private Collection $habit;

    /**
     * @var Collection<int, OwnHabit>
     */
    #[ORM\OneToMany(targetEntity: OwnHabit::class, mappedBy: 'user')]
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
            $habit->setUser($this);
        }

        return $this;
    }

    public function removeHabit(Habit $habit): static
    {
        if ($this->habit->removeElement($habit)) {
            // set the owning side to null (unless already changed)
            if ($habit->getUser() === $this) {
                $habit->setUser(null);
            }
        }

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
}
