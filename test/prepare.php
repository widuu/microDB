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

//you can use this 
$statement = $db->prepare("select * from user where host=:host");
$execresult = $db->execPrepare( $statement , array(':host'=>'localhost') , array( ':host' => mypdo::TYPE_STR, ));
// or 

// $statement = $db->prepare("select * from user where host= ? ");
// $execresult = $db->execPrepare( $statement , array('localhost') ,array(  mypdo::TYPE_STR ));

if ( !$execresult ){
	echo "Sql query string error\n";
}

$result = $execresult->fetchAll();

print_r($result);

echo "\n";