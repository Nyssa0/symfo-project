<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    public function __construct(EntityManagerInterface $manager){
        $this->manager = $manager;

    }

    #[Route('/admin/post'), ]

    public function index(): Response
    {
        $posts = $this->manager->getRepository(Post::class)->findBy([], ['Date'=>'DESC']);

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    #[Route('/admin/post/newPost')]

    public function newPost(Request $request): Response{

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->manager->persist($post);
            $this->manager->flush();
            return $this->redirectToRoute('app_post_index');
        }


        return $this->render('post/form.html.twig', [
            'form' => $form->createView(),
            'formTitle' => "New article",
            'formButton' => "Add",

        ]);
    }

    #[Route('/admin/post/editPost/{id}')]

    public function editPost(Request $request, Post $post): Response{

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->manager->flush();
            return $this->redirectToRoute('app_post_index');
        }


        return $this->render('post/form.html.twig', [
            'form' => $form->createView(),
            'formTitle' => "Edit article",
            'formButton' => "Edit",

        ]);
    }

    #[Route('/admin/post/deletePost/{id}')]

    public function deletePost(Request $request, Post $post): Response{

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        $this->manager->remove($post);
        $this->manager->flush();
        return $this->redirectToRoute('app_post_index');

    }

    #[Route('/post/showPost/{id}', name: 'app_post_showPost')]

    public function showPost(Post $post): Response{
        return $this->render('app/post.html.twig', [
            'post' => $post,
        ]);
    }

}
