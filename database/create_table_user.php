<?php

require_once("MyPdo.php");

$sql = 'CREATE TABLE IF NOT EXISTS `user` 
(`id` int(11) NOT NULL auto_increment,
`name` int(11) NOT NULL,
`lastname` varchar(250) NOT NULL,
`city`  int(11) NULL,
PRIMARY KEY  (`id`));';
$table = (new MyPdo())->exec($sql);

var_dump($table);