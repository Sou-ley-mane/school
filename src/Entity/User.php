<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
// l'heritage
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name:"role",type:"string")]
#[ORM\DiscriminatorMap(["rp"=>"Responsable", "ac"=>"Attachee","etudiant"=>"Etudiant"])]
abstract class User extends Personne
{
    

    #[ORM\Column(type: 'string', length: 25)]
    protected $login;

    #[ORM\Column(type: 'string', length: 25)]
    protected $password;

    

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

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
}
