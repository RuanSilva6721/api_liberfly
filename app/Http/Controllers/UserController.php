<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Exception;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get all users.
     *
     * @OA\Get(
     *     path="/api/users",
     *     tags={"user"},
     *     operationId="getPersonAll",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     security={
     *         {"petstore_auth": {"write:pets", "read:pets"}}
     *     }
     * )
     */
    public function getPersonAll()
    {
        try {
            return $this->userService->getPersonAll();
        } catch (Exception $e) {
            echo 'Exceção capturada: ' . $e->getMessage() . "\n";
        }
    }

    /**
     * Get a specific user by ID.
     *
     * @OA\Get(
     *     path="/api/users/{id}",
     *     tags={"user"},
     *     operationId="getPersonOne",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     security={
     *         {"petstore_auth": {"write:pets", "read:pets"}}
     *     }
     * )
     *
     * @param mixed $id
     * @return mixed
     */
    public function getPersonOne($id)
    {
        try {
            return $this->userService->getPersonOne($id);
        } catch (Exception $e) {
            echo 'Exceção capturada: ' . $e->getMessage() . "\n";
        }
    }
}

