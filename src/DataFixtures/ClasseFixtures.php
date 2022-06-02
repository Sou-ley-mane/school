<?php

namespace App\DataFixtures;

use App\Entity\Classe;
use App\Entity\Responsable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClasseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $rp=new Responsable();
        $rp->setNomComplet("Nder");
        $rp->setLogin("nder@gmail.com");
        $rp->setPassword("Diallo");
        $manager->persist($rp);
        for ($i=1; $i <4; $i++) { 
            $classe=new Classe();
            $classe->setLibelle("Classe".$i);
            $classe->setNiveau("Licence".$i);
            $classe->setFiliere("Mathematique");
            $classe->setResponsable($rp);    
            $manager->persist($classe);
            $manager->flush();
           
        }
       
    }
}
