<?php
namespace App\core;


class Router {

    private $url;
    private $method;
    protected array $params = [];
    protected array $routes = [];
    private string $namecontroller;



  

    public  function add(string $route, array $params = [])
    {
        $this->routes[$route] = $params;
    }

    public function dispatch(string $url){

        if($this->match($url)){
            $controllerName = $this->params['controller'];
            $controllerName = str_replace('', '', ucwords(str_replace('-','', $controllerName)));
            $controllerName = $this->getNamespace($controllerName);
        }

    }

    private function match(string $url){

        foreach($this->routes as $route => $params)
        {
            if(preg_match($route, $url, $matches)){

                foreach($matches as $key => $param){
                    if(is_string($key)){
                        $params[$key] = $param;

                    }
                }
                $this->params = $params;
                return true;

            }
        }
        return false;


    }

    public function getNamespace(string $nameController){

        $namespace = 'App\controller\\';
        if (array_key_exists('namespace', $this->params)) {
            $namespace .= $this->params['namespace']. '\\';
        }
        return $namespace;

    }



}

?>