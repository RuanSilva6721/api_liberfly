<?php

namespace App\Http\Controllers;

use App\Services\PersonService;
use Exception;

class PersonController extends Controller
{
    private $personService;
    public function __construct(PersonService $personService){
        $this->personService = $personService;
    }

    /**
     * Summary of getPersonAll
     * @return mixed
     */
    public function getPersonAll()
    {
        try {
            return $this->personService->getPersonAll();
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
            return $this->personService->getPersonOne($id);
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

}
