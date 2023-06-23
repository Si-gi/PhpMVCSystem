<?php
require_once("AppController.php");

class HomeController extends AppController{

    public function __construct()
    {
        $this->getHeaderLinks();
    }

    public function index(){
        $this->render('Home');
    }
    
}