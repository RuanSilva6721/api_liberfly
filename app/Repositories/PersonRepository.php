<?php
namespace App\Repositories;

use App\Models\Person;
use Illuminate\Support\Facades\DB;


class PersonRepository
{
    public function getPersonAll()
    {
        return "aqui";
        // return  DB::transaction(function () {
        //     return Person::all();
        //  });
    }
    public function getPersonOne($id)
    {
        return  DB::transaction(function () use($id) {
            return Person::find($id);
         });
    }
}