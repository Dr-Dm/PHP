<?php

namespace Dima\Localhost;

class User
{
    private int $id;
    private string $name;
    private string $secondName;

    public function __construct(int $id, string $name, string $secondName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->secondName = $secondName;
    }

    public function __toString(): string
    {
        return $this->getName() . ' ' . $this->getSecondName();
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSecondName(): string
    {
        return $this->secondName;
    }

    /**
     * @param string $secondName
     */
    public function setSecondName(string $secondName): void
    {
        $this->secondName = $secondName;
    }


}