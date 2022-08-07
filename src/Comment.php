<?php

namespace Dima\Localhost;

use Dima\Localhost\{Article, User};

class Comment
{
    private int $id;
    private int $userId;
    private int $idArticle;
    private string $commentText;

    public function __construct(int $id, User $user, Article $article, string $commentText)
    {
        $this->id = $id;
        $this->userId = $user->getId();
        $this->idArticle = $article->getId();
        $this->commentText = $commentText;
    }

    public function __toString(): string
    {
        return $this->getCommentText();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdArticle(): int
    {
        return $this->idArticle;
    }

    /**
     * @param int $idArticle
     */
    public function setIdArticle(int $idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    /**
     * @return string
     */
    public function getCommentText(): string
    {
        return $this->commentText;
    }

    /**
     * @param string $commentText
     */
    public function setCommentText(string $commentText): void
    {
        $this->commentText = $commentText;
    }


}