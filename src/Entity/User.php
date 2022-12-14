<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="l'email ou le nom d'utilisateur que vous avez entré est deja utilisé"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 3,
     *      minMessage = "Your Password name must be at least {{ limit }} characters long",
     *      allowEmptyString = false
     * )
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Votre mot de passe doit etre le meme que celui de la confirmation")
     */
    public $confirm_password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isProf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIsProf(): ?bool
    {
        return $this->isProf;
    }

    public function setIsProf(bool $isProf): self
    {
        $this->isProf = $isProf;

        return $this;
    }
     /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Exercice", mappedBy="auteur", orphanRemoval=true)
     */
    private $exercices;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cours", mappedBy="auteur", orphanRemoval=true)
     */
    private $cours;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EtatExo", inversedBy="eleve")
     */
    private $etatExo;

    public function __construct()
    {
        $this->exercices = new ArrayCollection();
        $this->cours = new ArrayCollection();
    }

    public function eraseCredentials(){}

    public function getSalt(){}

    public function getRoles() {
        return ['ROLE_USER'];
    }

    /**
     * @return Collection|Exercice[]
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }

    public function addExercice(Exercice $exercice): self
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices[] = $exercice;
            $exercice->setAuteur($this);
        }

        return $this;
    }

    public function removeExercice(Exercice $exercice): self
    {
        if ($this->exercices->contains($exercice)) {
            $this->exercices->removeElement($exercice);
            // set the owning side to null (unless already changed)
            if ($exercice->getAuteur() === $this) {
                $exercice->setAuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Cours[]
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours[] = $cour;
            $cour->setAuteur($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->contains($cour)) {
            $this->cours->removeElement($cour);
            // set the owning side to null (unless already changed)
            if ($cour->getAuteur() === $this) {
                $cour->setAuteur(null);
            }
        }

        return $this;
    }

    public function getEtatExo(): ?EtatExo
    {
        return $this->etatExo;
    }

    public function setEtatExo(?EtatExo $etatExo): self
    {
        $this->etatExo = $etatExo;

        return $this;
    }
}