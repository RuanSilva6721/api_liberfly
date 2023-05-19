<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Exception;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    /**
     * Summary of getPersonAll
     * @return mixed
     */
    public function getPersonAll()
    {
        try {
            return $this->userService->getPersonAll();
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }

    }

    /**
     * Summary of gerPersonOne
     * @param mixed $id
     * @return mixed
     */
    public function getPersonOne($id)
    {
        try {
            return $this->userService->getPersonOne($id);
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

}
