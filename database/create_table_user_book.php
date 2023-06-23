<?php

require_once("MyPdo.php");

$sql = 'CREATE TABLE IF NOT EXISTS `user_book` 
(`id_user` int(11) NOT NULL,
`id_book` int(11) NOT NULL);';
$table = (new MyPdo())->exec($sql);

var_dump($table);