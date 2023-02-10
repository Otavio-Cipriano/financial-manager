<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\core\Validate;
use app\model\User;
use app\services\UserService;

class RegisterController extends Controller {
    function index(Request $request, Response $response){
        $this->set_layout('auth');
        $response->render('register', $this->layout);
    }

    function store(Request $request, Response $response){
        $fields = $request->body;
        
        $validation = new Validate($fields, [
            'name' => ['regex' => "/^[a-zA-Z-'À-ÿ ]*$/", 'min' => 3, 'max' => 30, 'is_required' => true],
            'email' => ['is_email' => true, 'is_required' => true],
            'passwordConfirmation' => ['same' => 'password', 'is_required' => true]
        ]);

        $validation->validate();

        if(!$validation->all_valid()){
            $errors = $validation->invalidFields;
            $response->status(401)->send($errors);
            return;
        }
        
        if($this->check_email($fields['email'])){
            $validation->insert_error('email', 'generic', 'Email já cadastrado');
            $errors = $validation->invalidFields;
            $response->status(401)->send($errors);
            return;
        }

        $verified_password = $this->validate_password($fields['password']);

        if($verified_password){
            $validation->insert_error('password', 'generic', $verified_password);
            $errors = $validation->invalidFields;
            $response->status(401)->send($errors);
            return;
        }

        $sanitized = (object) $this->sanitized_fields($fields);

        $user = new User($sanitized->name, $sanitized->email, password_hash($sanitized->password, PASSWORD_BCRYPT));

        $user = UserService::create($user);
        
        if(!$user){
            $response->status(500)->send(['ERROR' => 'Erro interno']);
            return;
        }

        $response->status(201)->send(['success' => 'Usário criado com sucesso']);
    }

    protected function validate_password($password)
    {
        if(!preg_match('/(?=.*\d)/', $password)){
            return "É necessário no minimo um digito";
        }
        elseif(!preg_match('/(?=.*[a-z])/', $password)){
            return "É necessário no minimo um caratere minúsculo";
        }
        elseif(!preg_match('/(?=.*\W)/', $password)){
            return "É necessário no minimo um caratere especial";
        }
    }

    protected function check_email($email){
        $user = UserService::findByEmail($email);
        if($user) return true;
        return false;
    }

    protected function sanitized_fields(array $post_inputs){
        $user = filter_var_array($post_inputs, [
            'name' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'email' => FILTER_SANITIZE_EMAIL,
            'password' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ]);
        return $user;
    }
}