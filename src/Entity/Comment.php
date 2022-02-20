<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Content;

    #[ORM\Column(type: 'datetime')]
    private $PostedAt;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: 'comments')]
    private $Post;

    public function __construct(){
        $this->setPostedAt(new \DateTime());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getPostedAt(): ?\DateTimeInterface
    {
        return $this->PostedAt;
    }

    public function setPostedAt(\DateTimeInterface $PostedAt): self
    {
        $this->PostedAt = $PostedAt;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->Post;
    }

    public function setPost(?Post $Post): self
    {
        $this->Post = $Post;
        return $this;
    }
}
