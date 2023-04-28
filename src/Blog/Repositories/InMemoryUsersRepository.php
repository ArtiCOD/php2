<?php

namespace Geekbrains\Blog\Repositories;

use Geekbrains\Blog\Exceptions\UserNotFoundException;
use Geekbrains\Blog\User;

class InMemoryUsersRepository
{

    private array $users = [];


    public function save(User $user): void
    {
        $this->users[] = $user;
    }
        public function get(int $id): User
    {
        foreach ($this->users as $user) {
            if ($user->id() === $id) {
                return $user;
            }
        }
        throw new UserNotFoundException("User not found: $id");
    }

}