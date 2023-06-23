<?php

class Controller {

    protected $viewPath = '/templates/';

    protected $template;

    public function render($view, $variables = []) {
        
        extract($variables);
        require_once(__ROOT__.$this->viewPath .$view.'.php');
    
    }

    public function getHeaderLinks(){
        return [
            $this->getRoute("Home#index"),
            $this->getRoute("User#showUsers"),
        ];
    }

    public function getRoute($routeName = ''): string {
        $routesJson = file_get_contents(__ROOT__.'/routes.json');
        $routes = json_decode($routesJson, true);
        $routes = $routes['routes'];
        if(isset($routes[$routeName])){
            return $routes[$routeName];
        } else {
            return die($routeName." doesn't exist");
        }
    }
}