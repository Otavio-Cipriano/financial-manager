<?php

namespace app\core;

class Router{

    public array $routes;

    protected Request $request;

    protected Response $response;

    protected  $controller;

    function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
    }

    public function get(string $path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }

    public function middleware($path, $callback){
        $this->routes['middleware'][$path] = $callback;
        return $this;
    }

    public function resolve(){
        $path = $this->request->path;
        $method = $this->request->method;
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false){
            echo "Está Rota não existe";
            return;
        }

        if(is_string($callback)){
            echo $callback;
            return;
        }

        if(is_array($callback)){
            $this->controller = new $callback[0]();
            $callback[0] = $this->controller;
        }

        return call_user_func($callback, $this->request, $this->response);
        
    }
}