<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=32, nullable=true )
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=36, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\OneToMany(targetEntity=Bien::class, mappedBy="proprietaire")
     */
    private $biens;


    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->proprietaire = new ArrayCollection();
        $this->biens = new ArrayCollection();
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codepostal;
    }

    public function setCodePostal(int $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return Collection|Bien[]
     */
    public function getBiens(): Collection
    {
        return $this->biens;
    }

    public function addBien(Bien $bien): self
    {
        if (!$this->biens->contains($bien)) {
            $this->biens[] = $bien;
            $bien->setProprietaire($this);
        }

        return $this;
    }

    public function removeBien(Bien $bien): self
    {
        if ($this->biens->contains($bien)) {
            $this->biens->removeElement($bien);
            // set the owning side to null (unless already changed)
            if ($bien->getProprietaire() === $this) {
                $bien->setProprietaire(null);
            }
        }

        return $this;
    }

   

   

    
}