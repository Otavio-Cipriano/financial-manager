<?php
    
namespace app\core;

class Session{

    private int $lifetime;

    private bool $httponly;

    function __construct(int $lifetime = 3600, bool $httponly = false)
    {           
        $this->lifetime = $lifetime;
        $this->httponly = $httponly;
    }

    public function start(){
        session_set_cookie_params(
            ['lifetime' => $this->lifetime, 
            'httponly' => $this->httponly
            ]);
        session_start();
    }

    public function set_session(string $session_name, mixed $props){
        $_SESSION[$session_name] = $props;
    }

    public function get_session(string $session_name){
        return $_SESSION[$session_name]?? null;
    }
}