/*
 +------------------------------------------------------------------------+
 | Microdb                                                                |
 +------------------------------------------------------------------------+
 | Copyright (c) 2015-2016 http://www.widuu.com                           |
 +------------------------------------------------------------------------+
 | This source file is subject to the Apache License that is bundled      |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to admin@widuu.com so we can send you a copy immediately.      	  	  |
 +------------------------------------------------------------------------+
 | Authors: widuu <admin@widuu.com>                      		  	      |
 |          					                          				  |
 +------------------------------------------------------------------------+
 */

namespace Microdb\Adapter;

/**
 * Pdo driver 
 *
 */

class Pdo extends Adapter{

	/**
	 * bind  type null 
	 */

	const TYPE_NULL  = 0;

	/**
	 * bind  type int 
	 */
	
	const TYPE_INT  = 1;

	/**
	 * bind  type string 
	 */

	const TYPE_STR  = 2;

	/**
	 *  bind type big data
	 */

	const TYPE_LOB  = 3;

	/**
	 * bind  type stmt 
	 */

	const TYPE_STMT  = 4;

	/**
	 * bind  type boolean 
	 */

	const TYPE_BOOL  = 5; 

	/**
	 * bind  type decimal 
	 */

	const TYPE_DECIMAL  = 1024;

	/**
	 * mutil database flag
	 */

	protected _multi_flag  = false;

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
	 *		'options'     =>    array();
	 *
	 *	);	
	 * </code>
	 * @author widuu <admin@widuu.com>
	 */

	public function connect( array! config = null ) -> <\PDO>{
		var username,password,options,dsnparts
		,dsn,key,value;

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

		// database name
		if fetch options , config["dbname"] {
			unset config["dbname"];
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

		//add pdo exception
		let options[\Pdo::ATTR_ERRMODE] = \Pdo::ERRMODE_EXCEPTION;

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
	 * executes prepare pdo statment and return PDOStatement
	 * @param 	PDOStatement		statement  <PDO execute prepare result>
	 * @param 	array			dataValue  <PDO bindVaue>
	 * @param 	array			dataTypes  <PDO data_type>
	 * @return 	PDOStatement 	
	 * <code>
	 * $statement = $db->prepare("select * from user where HOST= ? ");
	 * $execresult = $db->execPrepare( $statement , array('widuu') ,array(  mypdo::TYPE_STR ));
	 * //or
	 * $statement = $db->prepare("select * from user where HOST=:host");
	 * $execresult = $db->execPrepare( $statement , array('host'=>'widuu') ,array( 'host' => mypdo::STR ));
	 * </code>
	 */

	public function execPrepare(<\PDOStatement> statement ,array ! dataValue , dataTypes = null)-> <\PDOStatement> {
		
		var key,value,parameter,variable,type;

		if typeof statement != "object" || ! ( statement instanceof \PDOStatement ){
			throw new \Exception("PDOStatement type error");
			return;
		}

		for key , value in dataValue {
			if typeof key == "integer" {
				let parameter = key + 1;
			}else {
				let parameter = key ;
			}
			// judgment type
			if typeof dataTypes == "array" && fetch type , dataTypes[ key ] {
				switch type {
					case Pdo::TYPE_NULL :
						let variable = null;
						break;
					case Pdo::TYPE_INT  :
						let variable = intval( value );
						break;
					case Pdo::TYPE_STR :
						let variable = ( string ) value;
						break;
					case Pdo::TYPE_BOOL :
						let variable = ( boolean ) value;
						break;
					case Pdo::TYPE_DECIMAL :
						let variable = doubleval(value),
							type = Pdo::TYPE_DECIMAL;
						break;
					default :
						let variable = value,
							type = Pdo::TYPE_DECIMAL;
				}

				statement->bindValue( parameter , variable , type );	
			}else{
				statement->bindValue( parameter , value );
			}
			
		}
		statement->execute();
		return statement;
	}

	/**
	 * get mysql server version
	 *
	 * @author widuu <admin@widuu.com>
	 */

	public function getVerison(){
		return this->_pdo->getAttribute(4);
	}

}
