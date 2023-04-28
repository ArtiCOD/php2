<?php
namespace Geekbrains\Blog;

use Geekbrains\Person\Name;

class User
{
    private int $id;
    private string $userName;
    private string $login;

    public function __construct(int $id, string $userName, string $login)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->login = $login;

    }

    public function __toString()
    {
        return "Юзер $this->id по имение $this->userName и логином $this->login." . PHP_EOL;

    }

    public function id(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
       return $this->userName;
    }

    public function setUsername(Name $userName): void
    {
        $this->userName = $userName;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

}