<?php
namespace App\Services;

use App\Repositories\PersonRepository;

class PersonService 
{
    private $personRepository;
    /**
     * Summary of __construct
     * @param \App\Repositories\PersonRepository $personRepository
     */
    public function __construct(PersonRepository $personRepository){
        $this->personRepository = $personRepository;
    }
    public function getPersonAll()
    {
        return $this->personRepository->getPersonAll();
    }
    /**
     * Summary of getPersonOne
     * @param mixed $id
     * @return mixed
     */
    public function getPersonOne($id)
    {
        return $this->personRepository->getPersonOne($id);
    }
}