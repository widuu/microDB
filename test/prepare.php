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

$statement = $db->prepare("select * from user where HOST=:host");
$execresult = $db->execPrepare( $statement , array('host'=>'widuu') ,array( 'host' => mypdo::TYPE_STR ));

// or 

//$statement = $db->prepare("select * from user where HOST= ? ");
//$execresult = $db->execPrepare( $statement , array('widuu') ,array(  mypdo::TYPE_STR ));

if ( !$execresult ){
	echo "Sql query string error\n";
}

$result = $execresult->fetchAll();

print_r($result);

echo "\n";