<?php

class Controller {

    protected $viewPath = '/templates/';

    protected $template;

    public function render($view, $variables = []) {
        
        // extract($variables);
        require_once(__ROOT__.$this->viewPath .$view.'.php');
    
    }
}