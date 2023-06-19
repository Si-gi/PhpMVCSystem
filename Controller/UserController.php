<?php
require_once("AppController.php");
require_once(__ROOT__."/database/MyPdo.php");

class UserController extends AppController {
    
    private $pdo;
    public function __construct()
    {
        $this->pdo = new MyPdo("book");
    }

    public function showUsers(){
    
        $books = $this->pdo->query('SELECT * FROM book');
        $this->render('UserList', $books);
    }

    public function userDetail() {

    }
}