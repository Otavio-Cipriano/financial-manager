<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\core\Validate;
use app\services\UserService;
use app\services\UserSessionService;

class LoginController extends Controller {

    function index(Request $request, Response $response){
        $this->set_layout('auth');
        $response->render('login', $this->layout);
    }

    function store(Request $request, Response $response){
        $validation = new Validate($request->body, [
            'email' => ['is_email' => true, 'is_required' => true],
            'password' => ['is_required' => true],
        ]);
        
        if(!$validation->all_valid()){
            $response->status(401)->send($validation->invalidFields);
            return;
        }
        
        $sanitized = (object) $this->sanitize_fields($request->body);
        
        $user =  UserService::findByEmail($sanitized->email);

        if(!$user){
            $validation->insert_error('email', 'generic', 'Não existe usuário com este email.');
            $response->status(401)->send($validation->invalidFields);
            return;
        }

        $verified_password = password_verify($sanitized->password, $user->password);

        if(!$verified_password){
            $validation->insert_error('password', 'generic', 'Senha incorreta');
            $response->status(401)->send($validation->invalidFields);
            return;
        }

        $session = new UserSessionService();
        $session->start($user);

        $response->status(200)->send('Login: Success');
    }

    protected function sanitize_fields(array $post_inputs){
        $user = filter_var_array($post_inputs, [
            'email' => FILTER_SANITIZE_EMAIL,
            'password' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ]);
        return $user;
    }
}