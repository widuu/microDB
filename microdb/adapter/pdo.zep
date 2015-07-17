/*
 +------------------------------------------------------------------------+
 | Microdb                                                                |
 +------------------------------------------------------------------------+
 | Copyright (c) 2015-2016 http://www.widuu.com                           |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file docs/LICENSE.txt.                        |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to admin@widuu.com so we can send you a copy immediately.      	  |
 +------------------------------------------------------------------------+
 | Authors: widuu <admin@widuu.com>                      		  |
 |          					                          |
 +------------------------------------------------------------------------+
 */

namespace Microdb\Adapter;

/**
 * Pdo driver 
 *
 */

class Pdo extends Adapter{

	/**
	 * The function connect database , params must be array
	 * <code>
	 * $config = array(
	 *		'username' => 'username',
	 *		'password' => 'password',
	 *		'host'	     => 'localhost',
	 *		'database'  => 'test',
	 *		'charset'    => 'utf8',
	 *		'prefix'      => 'wd_'
	 *	);	
	 * </code>
	 * @author widuu <admin@widuu.com>
	 */

	public function connect( array! config = null){

	}

	/**
	 * user can use this function parse database config to yourself
	 * 
	 *
	 */

	public static  function parseConfig(callback){
		//Judgment type , if not function throw exception;
		if typeof callback != "object" {
			throw new \Exception("param must be callback function");
		}
		
		return {callback}();
	}
}
