<?php
require_once("Controller.php");


class AppController extends Controller{

    protected $template = 'default';


    public function __construct(){
        die(__ROOT__);
        $this->viewPath = __ROOT__. '/templates/';
    }
}