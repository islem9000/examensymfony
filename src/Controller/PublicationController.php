<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationController extends AbstractController
{
    /**
     * @Route("/create-publication-with-comment", name="create_publication_with_comment")
     */
    public function createPublicationWithComment(EntityManagerInterface $entityManager): Response
    {
        $publication = new Publication();
        $entityManager->persist($publication);

        $comment = new Comment();
        $comment->setPublication($publication);

        $entityManager->persist($comment);
        $entityManager->flush();

        // ...

        return new Response('Publication created with a comment.');
    }
}
