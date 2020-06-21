<?php

namespace App\Services;
use App\Newusers;


class UserService {

    public function register(Array $values){
        Newusers::create($values);
    }

    public function getAllUsers(){
        return Newusers::all();
    }

}