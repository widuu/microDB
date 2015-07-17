<?php 

use Microdb\Adapter\Pdo as mypdo;

var_dump(mypdo::parseConfig(function(){
	return 1;
})
);

try {
	mypdo::parseConfig(1);
}catch(\Exception $e){
	var_dump($e->getMessage());
}