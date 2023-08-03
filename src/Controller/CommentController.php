<?php
namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/create-comment", name="create_comment")
     */
    public function createComment(EntityManagerInterface $entityManager): Response
    {
        $publication = new Publication(); // Remplacez cela par votre logique pour obtenir la publication
        // ...

        $comment = new Comment();
        $comment->setPublication($publication);
        // ...

        $entityManager->persist($comment);
        $entityManager->flush();

        return new Response('Comment created.');
    }
}
