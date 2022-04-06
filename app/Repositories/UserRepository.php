<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $entity;

    public function __construct(User $user)
    {
        $this->entity = $user;
    }

    public function getUsers()
    {
        return $this->entity->get();
    }

    public function getUserById($id)
    {

        return $this->entity->findOrFail($id);
    }

    public function getUserByEmail(string $email)
    {

        return $this->entity->where('email', $email)->firstOrFail();
    }

    public function createNewUser(array $data)
    {
        return $this->entity->create($data);
    }

    public function updateUserById($id, array $data)
    {
        $user = $this->entity->findOrFail($id);

        return $user->update($data);
    }

    public function deleteUserById($id)
    {
        $user = $this->entity->findOrFail($id);

        return $user->delete();
    }
}
