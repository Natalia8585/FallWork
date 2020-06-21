<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newusers;
use App\Http\Requests\StoreFormValidation;

class NewusersController extends Controller
{
    public function index(){
       // $user = Newusers::all();
        $user = resolve('UserService')->getAllUsers();
        return view('newusers.index', compact('user'));

    }
    public function add(){
        
            return view('newusers.add');
       
        
    
    }
    public function save(StoreFormValidation $request){
        
        //Newusers::create($request->all());
        resolve('UserService')->register($request->all());
        $success='Dziękujemy za dodanie użytkownika';
        return view('newusers.add', compact('success'));
   
    

}
}
