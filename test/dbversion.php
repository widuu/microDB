<?php 

/**
  * example for prepapre
  */
use microdb\adapter\pdo as mypdo;

$db = new mypdo(
		array(
			'host'		=>  '127.0.0.1',
			'username'	=>  'root',
			'password'	=>  'dgj99349',
			'dbname'	=>  'mysql',
			'charset'	=>  'utf8',
		)
	);


echo $db->dbVersion();