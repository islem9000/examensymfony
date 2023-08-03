<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    // ...

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Publication", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $publication;

    // ...

    public function getPublication(): ?Publication
    {
        return $this->publication;
    }

    public function setPublication(?Publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }
}
