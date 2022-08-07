<?php

namespace Dima\Localhost;

use Dima\Localhost\User;

class Article
{
    private int $id;
    private int $userId;
    private string $header;
    private string $text;

    public function __construct(int $id, User $user, string $header, string $text)
    {
        $this->id = $id;
        $this->userId = $user->getId();
        $this->header = $header;
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->getHeader() . PHP_EOL . $this->getText();
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
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }


}