<?php
require_once("AppController.php");

class HomeController extends AppController{

    public function __construct()
    {
        
    }

    public function index(){
        $this->render('Home');
    }
    
}