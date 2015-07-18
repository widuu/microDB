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
	 * mutil database flag
	 */

	protected _multi_flag = false;

	/**
	 * database config
	 */

	protected  static _config = null { get };

	/**
	 * Pdo resource
	 */

	 protected  _pdo { get };

	 /**
	  * database prefix
	  */

	protected _prefix { get,set };


	public function __construct( array! config = null ){
	 	if empty( config ) {
	 		throw new Exception( "params must be array" );
	 	}

	 	let this->_pdo = this->connect( config );
	 }

	/**
	 * The function connect database , params must be array
	 * <code>
	 * $config = array(
	 *		'username'  =>  'username',
	 *		'password'  =>   'password',
	 *		'host'	      =>   'localhost',
	 *		'dbname'    =>   'test',
	 *		'charset'     =>   'utf8',
	 *		'prefix'        =>    'wd_',
	 *
	 *	);	
	 * </code>
	 * @author widuu <admin@widuu.com>
	 */

	public function connect( array! config = null ) -> <\PDO>{
		var username,password,host,dbname,charset,options,
		dsnparts,dsn,key,value;

		if fetch username , config["username"] {
			unset config["username"];
		}

		if fetch password , config["password"] {
			unset config["password"];
		}

		//set pdo options
		if  fetch options , config["options"] {
			unset config["options"];
		}else{
			let options = [];
		}

		//set database table prefix
		if isset config["prefix"] {
			let this->_prefix = config["prefix"];
			unset config["prefix"];
		}

		//parse this dsn
		if !fetch dsn , config["dsn"] {
			let dsnparts = [];
			for key ,value in config {
				let dsnparts[] = key ."=" .value;
			}
			let dsn = join(";",dsnparts);
		}

		//create pdo connect
		return new \PDO("mysql:".dsn,username,password,options);		 
	}

	/**
	 *  return pdo prepare statement 
	 * @param     string      sqlStr
	 * @return     object      PDOStatement
	 * <code>
	 *  $statement = $pdo->prepare( "select * from wd_user where name= :name" );
	 *  $statement = $pdo->prepare( "select * from wd_user where name= ?" );
	 * </code>
	 * @author     widuu     <admin@widuu.com>
	 */

	public function prepare( string ! sqlStr ) -> <\PDOStatement> {
		return this->_pdo->prepare(sqlStr);
	}

	/**
	 * executes prepare 
	 *
	 */

	public function execPrepare(<\PDOStatement> statement ,array ! dataValue , dataTypes )-> <\PDOStatement> {

	}
}
