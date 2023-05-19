<?php
namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $userRepository;
    /**
     * Summary of __construct
     * @param \App\Repositories\UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function getPersonAll()
    {
        return $this->userRepository->getPersonAll();
    }
    /**
     * Summary of getPersonOne
     * @param mixed $id
     * @return mixed
     */
    public function getPersonOne($id)
    {
        return $this->userRepository->getPersonOne($id);
    }
}
