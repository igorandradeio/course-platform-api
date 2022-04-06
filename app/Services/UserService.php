<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUsers()
    {
        return $this->userRepository->getUsers();
    }

    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }

    public function getUserByEmail(string $email)
    {
        return $this->userRepository->getUserByEmail($email);
    }

    public function createNewUser(array $data)
    {
        return $this->userRepository->createNewUser($data);
    }

    public function updateUserById($id, array $data)
    {
        return $this->userRepository->updateUserById($id, $data);
    }

    public function deleteUserById($id)
    {
        return $this->userRepository->deleteUserById($id);
    }
}
