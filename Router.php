<?php
require_once("Route.php");
require_once("RouterException.php");
class Router {

    private $url;
    private $routes = [];
    private $namedRoutes = [];

    public function __construct($url){
        $this->url = $url;
    }

    public function get($path, $callable, $name = null){
        return $this->add($path, $callable, $name, 'GET');
    }

    public function post($path, $callable, $name = null){
        return $this->add($path, $callable, $name, 'POST');
    }

    private function add($path, $callable, $name, $method){
        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;
        if(is_string($callable) && $name === null){
            $name = $callable;
        }
        if($name){
            $this->namedRoutes[$name] = $route;
        }
        return $route;
    }

    public function run(){
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            // throw new RouterException('REQUEST_METHOD does not exist');

        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->match($this->url)){
                return $route->call();
            }
        }
        // throw new RouterException('No matching routes');
    }

    public function export_json($routeFile = "./routes.json"){
        $paths = json_encode([
            'routes' => array_map([$this, 'getPaths'], $this->namedRoutes)
        ]);
        file_put_contents($routeFile, $paths);
    }


    private function getPaths(Route $route){
        return $route->getPath();
    }

    public function url($name, $params = []){
        if(!isset($this->namedRoutes[$name])){
            // throw new RouterException('No route matches this name');
        }
        return $this->namedRoutes[$name]->getUrl($params);
    }

}