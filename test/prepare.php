<?php 

/**
  * example for prepapre
  */

$db = new microdb\adapter\pdo(
		array(
			'host'		=>  'localhost',
			'username'	=>  'root',
			'password'	=>  'dgj99349',
			'dbname'	=>  'mysql',
			'charset'	=>  'utf8',
		)
	);

$statement = $db->prepare("select * from user where User=:user");
$execute_result = $statement->execute(array('user'=>'root'));
if ( !$execute_result ){
	echo "Sql query string error";
}
echo "\n";
$rows = $statement->fetchAll();
print_r($rows);
echo "\n";