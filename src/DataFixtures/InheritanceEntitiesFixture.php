<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Pdf;
use App\Entity\User;
use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

;

class InheritanceEntitiesFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i <=5; $i++) {
            $author = new Author();
            $author->setName("name $i");

            $pdf = new Pdf();
            $pdf->setFilename('file name pdf '.$i);
            $pdf->setOrientation('orientation pdf '.$i);
            $author->addFile($pdf);

            $video = new Video();
            $video->setFilename('file name video '.$i);
            $video->setFormat('video format '.$i);
            $video->setDuration(random_int(1, 100) + $i);
            $video->setTitle("video title $i");
            $author->addFile($video);
            $manager->persist($author);
        }

        $manager->flush();
    }


}
