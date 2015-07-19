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
print_r(get_class_methods("microdb\adapter\pdo"));
echo $db->getVersion();

//you can use this 

$statement = $db->prepare("select * from user where HOST=:host");
$execresult = $db->execPrepare( $statement , array('host'=>'widuu') ,array( 'host' => mypdo::TYPE_STR ));

// or 

$statement = $db->prepare("select * from user where HOST= ? ");
$execresult = $db->execPrepare( $statement , array('widuu') ,array(  mypdo::TYPE_STR ));

if ( !$execresult ){
	echo "Sql query string error\n";
}

$red = $execresult->fetchAll();

print_r($red);

echo "\n";