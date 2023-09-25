<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Video;
use App\Service\Gift;
use App\Service\Test;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AppController extends AbstractController
{
    public function __construct($logger)
    {

    }

    #[Route('/home/{name}', name: 'home')]
//    #[ParamConverter('user', class: User::class )]
    public function index(
//     User $user,
    $name,
     EntityManagerInterface $entityManager,
     Gift $gift,
     Test $test,
     Request $request,
    SessionInterface $session): Response
    {
//        dd($user);
//        $users = $entityManager->getRepository(User::class)->fin;
//        $entityManager->getRepository(User::class)->createQueryBuilder()
//        dump($users);
//        $res = $this->forward(AppController::class. '::index2', ['name' => '444']);
//        dd($res);
//
//        return $this->file($this->getParameter('download_directory'). '/test.pdf');
//        return $this->redirect($this->generateUrl('home2', ['name' => 321], UrlGeneratorInterface::ABSOLUTE_URL));
//        throw $this->createNotFoundException('Not found');
//        dd($request->cookies->get('PHPSESSID'));
//        dd($session->get('name'));
//        $session->set('name', 'ben');
//        dd($request->cookies->get('PHPSESSID'));
//        dd( $gift->tEST6());
//        dd($test->GETaNOTHER());
//        $query = $entityManager->createQuery('SELECT u, fings as followings_count, fers as followers_count FROM App\Entity\User u JOIN u.followings fings JOIN u.followers fers where u.id = :id ');
//        dd($query->setParameter('id', 1)->getResult());
        dd($entityManager->getRepository(User::class)->get(1));

//        $ids = $query->getResult(); // array of CmsUser ids
//        $users = $entityManager->getRepository(User::class)->findAll();
//        $user1 = $entityManager->getRepository(User::class)->find(1);
//        dd($user1->getFollowers()->count(), $user1->getFollowing()->count());
//        $user2 = $entityManager->getRepository(User::class)->find(2);
//        $user3 = $entityManager->getRepository(User::class)->find(3);
//        $user4 = $entityManager->getRepository(User::class)->find(4);
//        $user5 = $entityManager->getRepository(User::class)->find(5);
//
//        $user1->addFollower($user2);
//        $user1->addFollower($user3);
//
//        $user1->addFollowing($user5);
////
//        $entityManager->flush();
//        $user->setName($name);
//        foreach (range(1, 5) as $i) {
//            $video = new Video();
//            $video->setTitle("new video $i");
//            $user->addVideo($video);
////            $entityManager->persist($video);
//          }
//
//        $entityManager->persist($user);
//        $entityManager->flush();

        dd($entityManager->getRepository(User::class)->findAll());

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'name' => $name,
            'users' => [$user],
        ]);
    }

    #[Route('/home2/{name?}', name: 'home2', requirements:['name'=> '\d+'])]
    public function index2($name): Response
    {
        return new Response("Require param $name with regex number");
    }

    #[Route(
        path:'/home3/{locale}/{year}/{slug}/{category}',
        name: 'home3',
        requirements:[
            'locale' => 'en|fr',
            'category' => 'computer|laptop',
            'year' => '\d+'
        ],
        defaults: ['category' => 'computer'],

    )]
    public function index3($locale, $year, $slug, $category): Response
    {
        return new Response("advanced route require param $locale, $year, $slug, $category with regex number");
    }

    #[Route(
        path: ['home4/en/about-us', 'home4/nl/over-ons'],
        name: 'about_us'

    )]
    public function __myFunction() {
        return new Response("Translated route");

    }

//    public function __myFunction()
//    {
//
//    }



}
