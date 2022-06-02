<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeRepository::class)]
class Demande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $dataDemande;

    #[ORM\Column(type: 'string', length: 100)]
    private $motif;

    #[ORM\ManyToOne(targetEntity: Etudiant::class, inversedBy: 'demandes')]
    #[ORM\JoinColumn(nullable: false)]
    private $etudiant;

    #[ORM\ManyToOne(targetEntity: Responsable::class, inversedBy: 'demandes')]
    #[ORM\JoinColumn(nullable: false)]
    private $responsable;

    #[ORM\ManyToOne(targetEntity: Etudiant::class, inversedBy: 'demandes')]
    #[ORM\JoinColumn(nullable: false)]
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataDemande(): ?\DateTimeInterface
    {
        return $this->dataDemande;
    }

    public function setDataDemande(\DateTimeInterface $dataDemande): self
    {
        $this->dataDemande = $dataDemande;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getEtudiant(): ?Etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    public function getResponsable(): ?Responsable
    {
        return $this->responsable;
    }

    public function setResponsable(?Responsable $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

 

    
}
