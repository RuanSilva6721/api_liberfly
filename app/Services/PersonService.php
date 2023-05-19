<?php
namespace App\Services;

use App\Repositories\PersonRepository;

class PersonService 
{
    private $personRepository;
    public function __construct(PersonRepository $personRepository){
        $this->personRepository = $personRepository;
    }
    public function getPersonAll()
    {
        return $this->personRepository->getPersonAll();
    }
    public function getPersonOne($id)
    {
        return $this->personRepository->getPersonOne($id);
    }
}