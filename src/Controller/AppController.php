<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/')]
    public function index(EntityManagerInterface $manager): Response
    {
        $posts = $manager->getRepository(Post::class)->findBy([], ['Date'=>'DESC']);

        return $this->render('app/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
