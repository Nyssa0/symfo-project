<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i=1; $i<=20; $i++){
            $post = new Post();
            $post->setName('Title '.$i);
            $post->setIntro('Intro '.$i);
            $post->setArticle('Article '.$i);
            $manager->persist($post);

            $author = new Author();
            $author->setAuthorName('Author '.$i);
            $manager->persist($author);

            $category = new Category();
            $category->setCategoryName('Category '.$i);
            $manager->persist($category);

            $comment = new Comment();
            $comment->setContent('Comment '.$i);
            $manager->persist($comment);

        }
        $manager->flush();
    }
}
