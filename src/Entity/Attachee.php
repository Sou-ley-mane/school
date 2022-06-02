<?php

namespace App\Entity;

use App\Repository\AttacheeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttacheeRepository::class)]
class Attachee extends User
{
   
   

   
}
