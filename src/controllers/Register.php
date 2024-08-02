<?php

namespace App\Controllers;
use App\Core\Request;
use App\Forms\FormRegister;
use App\Models\UsersModels;


require_once('src/core/request.php');
require_once('src/forms/formregister.php');
require_once('src/model/usersmodels.php');


require_once('src/model/model.php');
require_once('src/core/db.php');


class Register
{
    public function register()
    {   $users = new UsersModels();
       $test = $users->findAll();
        // print_r($test);

        $request = new Request();
        $submit = $request->post('register');
       // var_dump($submit);
        if (isset($submit)) {
           
            $register = new UsersModels();
            $formRegister = new FormRegister($register);
            $controle = $formRegister->validate();
             
            if (isset($controle)) {
        
                // On "nettoie" l'adresse email
                $email = strip_tags($request->post('email'));
                // On chiffre le mot de passe
                $pass = password_hash($request->post('password'), PASSWORD_ARGON2I);
        
                $lastname = $request->post('lastname');
                $firstname = $request->post('firstname');
                $username = $request->post('username');
        
                $register->setEmail($email)
                         ->setPassword($pass)
                         ->setLastname($lastname)
                         ->setFirstname($firstname)
                         ->setUsername($username)
                ;
        
                // On stocke l'utilisateur
                $register->create();
                
        
                
            }
            
        }
       
      
        require('views/register.php');
    }
}