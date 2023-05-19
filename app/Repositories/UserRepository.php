<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserRepository
{
    public function getPersonAll()
    {
        return  DB::transaction(function () {
            return User::all();
         });
    }
    public function getPersonOne($id)
    {
        return  DB::transaction(function () use($id) {
            return User::find($id);
         });
    }
}
