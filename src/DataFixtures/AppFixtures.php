<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 1; $i <= 5 ; $i++) {
            $user = new User();
            $user->setName('natalia ' .$i);
            $manager->persist($user);

            for ($j = 1; $j <= 3; $j++) {
                $video = new Video();
                $video->setTitle("title $j");
                $manager->persist($video);
                $user->addVideo($video);
            }
        }

        $manager->flush();
    }
}
