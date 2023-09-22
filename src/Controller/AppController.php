<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/home/{name}', name: 'home')]
    public function index($name, EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();
//        $users = new User();
//        $users->setName($name);
//        $entityManager->persist($users);
//        $entityManager->flush();
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'name' => $name,
            'users' => $users,
        ]);
    }

//    #[Route('/home2/{name}', name: 'home2')]
//    public function index2($name): Response
//    {
//        return $this->redirectToRoute('home', compact('name'));
//    }
}
