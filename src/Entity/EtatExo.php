<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtatExoRepository")
 */
class EtatExo
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
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Exercice", mappedBy="etatExo")
     */
    private $exercice;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="etatExo")
     */
    private $eleve;

    public function __construct()
    {
        $this->exercice = new ArrayCollection();
        $this->eleve = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * @return Collection|Exercice[]
     */
    public function getExercice(): Collection
    {
        return $this->exercice;
    }

    public function addExercice(Exercice $exercice): self
    {
        if (!$this->exercice->contains($exercice)) {
            $this->exercice[] = $exercice;
            $exercice->setEtatExo($this);
        }

        return $this;
    }

    public function removeExercice(Exercice $exercice): self
    {
        if ($this->exercice->contains($exercice)) {
            $this->exercice->removeElement($exercice);
            // set the owning side to null (unless already changed)
            if ($exercice->getEtatExo() === $this) {
                $exercice->setEtatExo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getEleve(): Collection
    {
        return $this->eleve;
    }

    public function addEleve(User $eleve): self
    {
        if (!$this->eleve->contains($eleve)) {
            $this->eleve[] = $eleve;
            $eleve->setEtatExo($this);
        }

        return $this;
    }

    public function removeEleve(User $eleve): self
    {
        if ($this->eleve->contains($eleve)) {
            $this->eleve->removeElement($eleve);
            // set the owning side to null (unless already changed)
            if ($eleve->getEtatExo() === $this) {
                $eleve->setEtatExo(null);
            }
        }

        return $this;
    }
}
