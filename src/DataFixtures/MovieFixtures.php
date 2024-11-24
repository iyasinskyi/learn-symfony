<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Great Movie');
        $movie->setDescription('Description of The Great Movie');
        $movie->setReleaseYear(2008);
        $movie->setImagePath('https://miro.medium.com/v2/resize:fit:472/1*aKDkLgLzzyZXAeDG9oTCKA.png');

        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Endgame');
        $movie2->setDescription('Description of Avengers');
        $movie2->setReleaseYear(2018);
        $movie2->setImagePath('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQqse_XSnkijWzY_FQrPgTiclx516ebb8npng8GBgTGiUBtJdth');
        $manager->persist($movie2);

        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->flush();


    }
}
