<?php

namespace App\DataFixtures;

use App\Entity\Films;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $film = new Films();
            $film->setName('Sonic 2 le film');
            $film->setPicture('https://fr.web.img5.acsta.net/pictures/22/03/14/15/39/4137538.jpg');
            $film->setSortie(new \DateTime());
            $film->setDuree('2h 02min');
            $film->setRealisateur('De Patrick Casey');
            $film->setActeurs(" Jim Carrey, James Marsden, Idris Elba");
            $film->setSynopsis('Bien installé dans la petite ville de Green Hills, Sonic veut maintenant prouver qu’il a l’étoffe d un véritable héros. Un défi de taille se présente à lui quand le Dr Robotnik refait son apparition. Accompagné de son nouveau complice Knuckles, ils sont en quête d’une émeraude dont le pouvoir permettrait de détruire l’humanité toute entière. Pour s’assurer que l’émeraude ne tombe entre de mauvaises mains, Sonic fait équipe avec Tails. Commence alors un voyage à travers le monde, plein de péripéties.');

            $manager->persist($film);
        }

        $manager->flush();
    }
}
