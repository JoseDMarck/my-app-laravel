<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    public function index(){
        
        if (request()->has('empty')) {
            $users = [];
        }
        else {
            $users = ['Jose','Andrea','Arnold','Guts'];
        }
       
        $title = "Titulo Dinamico";
        return view('users', compact('title', 'users'));
    }



    public function show($id){
        return view('users-show', compact('id'));
    }

    
    
    public function create(){
        return 'Crear usuario Nuevo';
    }


}// UserController
