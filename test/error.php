<?php 

/**
  * example for database error infomation
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

// mysql database don't exists table widuu 

$db->prepare("select * from widuu");
$execresult = $db->execPrepare();

if ( !$execresult ){
	echo $db->getError();
}

echo "\n";