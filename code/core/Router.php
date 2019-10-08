<?php



class Router{

    protected $routes = [
        'GET' => [],
        'POST' => []

    ];

    public function get($uri,$controller){
    
        $this->routes['GET'][$uri] = $controller;
    
    }
    public function post($uri,$controller){
    
        $this->routes['POST'][$uri] = $controller;
    
    }
    
    public function direct($uri,$request){
        //about/culture key  =>  Value
    
        if(array_key_exists($uri,$this->routes[$request])){
    
            return $this->routes[$request][$uri];
    
        }

        throw new Exception('\nNo Routes Define For This\n');

    }
    public static function load($file){
        $router = new static;
        require $file;
        return $router;
        }


}
