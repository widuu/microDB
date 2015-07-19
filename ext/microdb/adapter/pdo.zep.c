
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/exception.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/array.h"
#include "kernel/hash.h"
#include "kernel/concat.h"
#include "kernel/string.h"
#include "ext/pdo/php_pdo_driver.h"


/**
 * Pdo driver 
 *
 */
ZEPHIR_INIT_CLASS(Microdb_Adapter_Pdo) {

	ZEPHIR_REGISTER_CLASS_EX(Microdb\\Adapter, Pdo, microdb, adapter_pdo, microdb_adapter_adapter_ce, microdb_adapter_pdo_method_entry, 0);

	/**
	 * mutil database flag
	 */
	zend_declare_property_bool(microdb_adapter_pdo_ce, SL("_multi_flag"), 0, ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * database config
	 */
	zend_declare_property_null(microdb_adapter_pdo_ce, SL("_config"), ZEND_ACC_PROTECTED|ZEND_ACC_STATIC TSRMLS_CC);

	/**
	 * Pdo resource
	 */
	zend_declare_property_null(microdb_adapter_pdo_ce, SL("_pdo"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * active pod statement
	 */
	zend_declare_property_null(microdb_adapter_pdo_ce, SL("_activeStatement"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * bind  type null 
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_NULL"), 0 TSRMLS_CC);

	/**
	 * bind  type int 
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_INT"), 1 TSRMLS_CC);

	/**
	 * bind  type string 
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_STR"), 2 TSRMLS_CC);

	/**
	 *  bind type big data
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_LOB"), 3 TSRMLS_CC);

	/**
	 * bind  type stmt 
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_STMT"), 4 TSRMLS_CC);

	/**
	 * bind  type boolean 
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_BOOL"), 5 TSRMLS_CC);

	/**
	 * bind  type decimal 
	 */
	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_DECIMAL"), 1024 TSRMLS_CC);

	return SUCCESS;

}

/**
 * database config
 */
PHP_METHOD(Microdb_Adapter_Pdo, getConfig) {


	RETURN_MEMBER(this_ptr, "_config");

}

/**
 * Pdo resource
 */
PHP_METHOD(Microdb_Adapter_Pdo, getPdo) {


	RETURN_MEMBER(this_ptr, "_pdo");

}

/**
 * active pod statement
 */
PHP_METHOD(Microdb_Adapter_Pdo, getActiveStatement) {


	RETURN_MEMBER(this_ptr, "_activeStatement");

}

PHP_METHOD(Microdb_Adapter_Pdo, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *config_param = NULL, *_0 = NULL;
	zval *config = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &config_param);

	if (!config_param) {
	ZEPHIR_INIT_VAR(config);
	array_init(config);
	} else {
	config = config_param;

	}


	if (ZEPHIR_IS_EMPTY(config)) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(microdb_adapter_exception_ce, "params must be array", "microdb/adapter/pdo.zep", 98);
		return;
	}
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "connect", NULL, 0, config);
	zephir_check_call_status();
	zephir_update_property_this(this_ptr, SL("_pdo"), _0 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

/**
 * The function connect database , params must be array
 * <code>
 * $config = array(
 *		'username'  =>  'username',
 *		'password'  =>  'password',
 *		'host'	    =>  'localhost',
 *		'dbname'    =>  'test',
 *		'charset'   =>  'utf8',
 *		'prefix'    =>  'wd_',
 *		'options'   =>  array();
 *
 *	);	
 * </code>
 * @author widuu <admin@widuu.com>
 */
PHP_METHOD(Microdb_Adapter_Pdo, connect) {

	int ZEPHIR_LAST_CALL_STATUS;
	HashTable *_2;
	HashPosition _1;
	zval *config_param = NULL, *username, *password, *options = NULL, *dsnparts, *dsn = NULL, *key = NULL, *value = NULL, *_0, **_3, *_4 = NULL;
	zval *config = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &config_param);

	if (!config_param) {
	ZEPHIR_INIT_VAR(config);
	array_init(config);
	} else {
	config = config_param;

	}


	ZEPHIR_OBS_VAR(username);
	if (zephir_array_isset_string_fetch(&username, config, SS("username"), 0 TSRMLS_CC)) {
		zephir_array_unset_string(&config, SS("username"), PH_SEPARATE);
	}
	ZEPHIR_OBS_VAR(password);
	if (zephir_array_isset_string_fetch(&password, config, SS("password"), 0 TSRMLS_CC)) {
		zephir_array_unset_string(&config, SS("password"), PH_SEPARATE);
	}
	ZEPHIR_OBS_VAR(options);
	if (zephir_array_isset_string_fetch(&options, config, SS("options"), 0 TSRMLS_CC)) {
		zephir_array_unset_string(&config, SS("options"), PH_SEPARATE);
	} else {
		ZEPHIR_INIT_NVAR(options);
		array_init(options);
	}
	if (zephir_array_isset_string(config, SS("prefix"))) {
		zephir_array_fetch_string(&_0, config, SL("prefix"), PH_NOISY | PH_READONLY, "microdb/adapter/pdo.zep", 142 TSRMLS_CC);
		zephir_update_property_this(this_ptr, SL("_prefix"), _0 TSRMLS_CC);
		zephir_array_unset_string(&config, SS("prefix"), PH_SEPARATE);
	}
	ZEPHIR_OBS_VAR(dsn);
	if (!(zephir_array_isset_string_fetch(&dsn, config, SS("dsn"), 0 TSRMLS_CC))) {
		ZEPHIR_INIT_VAR(dsnparts);
		array_init(dsnparts);
		zephir_is_iterable(config, &_2, &_1, 0, 0, "microdb/adapter/pdo.zep", 152);
		for (
		  ; zephir_hash_get_current_data_ex(_2, (void**) &_3, &_1) == SUCCESS
		  ; zephir_hash_move_forward_ex(_2, &_1)
		) {
			ZEPHIR_GET_HMKEY(key, _2, _1);
			ZEPHIR_GET_HVALUE(value, _3);
			ZEPHIR_INIT_LNVAR(_4);
			ZEPHIR_CONCAT_VSV(_4, key, "=", value);
			zephir_array_append(&dsnparts, _4, PH_SEPARATE, "microdb/adapter/pdo.zep", 150);
		}
		ZEPHIR_INIT_NVAR(dsn);
		zephir_fast_join_str(dsn, SL(";"), dsnparts TSRMLS_CC);
	}
	object_init_ex(return_value, php_pdo_get_dbh_ce());
	ZEPHIR_INIT_LNVAR(_4);
	ZEPHIR_CONCAT_SV(_4, "mysql:", dsn);
	ZEPHIR_CALL_METHOD(NULL, return_value, "__construct", NULL, 0, _4, username, password, options);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * return pdo prepare statement 
 * @param     string      sqlStr
 * @return     object      PDOStatement
 * <code>
 *  $statement = $pdo->prepare( "select * from wd_user where name= :name" );
 *  $statement = $pdo->prepare( "select * from wd_user where name= ?" );
 * </code>
 * @author     widuu     <admin@widuu.com>
 */
PHP_METHOD(Microdb_Adapter_Pdo, prepare) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *sqlStr_param = NULL, *_0, *_1 = NULL;
	zval *sqlStr = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &sqlStr_param);

	if (unlikely(Z_TYPE_P(sqlStr_param) != IS_STRING && Z_TYPE_P(sqlStr_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'sqlStr' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}

	if (likely(Z_TYPE_P(sqlStr_param) == IS_STRING)) {
		zephir_get_strval(sqlStr, sqlStr_param);
	} else {
		ZEPHIR_INIT_VAR(sqlStr);
		ZVAL_EMPTY_STRING(sqlStr);
	}


	ZEPHIR_CALL_METHOD(NULL, this_ptr, "freepdostatement", NULL, 1);
	zephir_check_call_status();
	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_pdo"), PH_NOISY_CC);
	ZEPHIR_CALL_METHOD(&_1, _0, "prepare", NULL, 0, sqlStr);
	zephir_check_call_status();
	zephir_update_property_this(this_ptr, SL("_activeStatement"), _1 TSRMLS_CC);
	RETURN_MM_MEMBER(this_ptr, "_activeStatement");

}

/**
 * executes prepare pdo statment and return PDOStatement
 * //@param 	PDOStatement		statement  <PDO execute prepare result>
 * @param 	array			dataValue  <PDO bindVaue>
 * @param 	array			dataTypes  <PDO data_type>
 * @return 	PDOStatement 	
 * <code>
 * $db->prepare("select * from user where HOST= ? ");
 * $execresult = $db->execPrepare(  array('widuu') ,array(  mypdo::TYPE_STR ));
 * //or
 * $db->prepare("select * from user where HOST=:host");
 * $execresult = $db->execPrepare(  array('host'=>'widuu') ,array( 'host' => mypdo::STR ));
 * </code>
 */
PHP_METHOD(Microdb_Adapter_Pdo, execPrepare) {

	zval *_10 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_8 = NULL;
	HashTable *_4;
	HashPosition _3;
	zend_bool _1, _9;
	zval *dataValue_param = NULL, *dataTypes = NULL, *key = NULL, *value = NULL, *parameter = NULL, *variable = NULL, *type = NULL, *result = NULL, *_0, *_2, **_5, _6 = zval_used_for_init, *_7 = NULL, *_11;
	zval *dataValue = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 2, &dataValue_param, &dataTypes);

	if (!dataValue_param) {
	ZEPHIR_INIT_VAR(dataValue);
	array_init(dataValue);
	} else {
	dataValue = dataValue_param;

	}
	if (!dataTypes) {
		dataTypes = ZEPHIR_GLOBAL(global_null);
	}


	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_activeStatement"), PH_NOISY_CC);
	_1 = Z_TYPE_P(_0) == IS_NULL;
	if (!(_1)) {
		ZEPHIR_OBS_VAR(_2);
		zephir_read_property_this(&_2, this_ptr, SL("_activeStatement"), PH_NOISY_CC);
		_1 = Z_TYPE_P(_2) != IS_OBJECT;
	}
	if (_1) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(zend_exception_get_default(TSRMLS_C), "don't exists PDOStatement", "microdb/adapter/pdo.zep", 206);
		return;
	}
	zephir_is_iterable(dataValue, &_4, &_3, 0, 0, "microdb/adapter/pdo.zep", 253);
	for (
	  ; zephir_hash_get_current_data_ex(_4, (void**) &_5, &_3) == SUCCESS
	  ; zephir_hash_move_forward_ex(_4, &_3)
	) {
		ZEPHIR_GET_HMKEY(key, _4, _3);
		ZEPHIR_GET_HVALUE(value, _5);
		if (Z_TYPE_P(key) == IS_LONG) {
			ZEPHIR_INIT_NVAR(parameter);
			ZVAL_LONG(parameter, (zephir_get_numberval(key) + 1));
		} else {
			ZEPHIR_SINIT_NVAR(_6);
			ZVAL_STRING(&_6, ":", 0);
			ZEPHIR_CALL_FUNCTION(&_7, "strstr", &_8, 2, key, &_6);
			zephir_check_call_status();
			if (!(zephir_is_true(_7))) {
				ZEPHIR_INIT_NVAR(parameter);
				ZEPHIR_CONCAT_SV(parameter, ":", key);
			} else {
				ZEPHIR_CPY_WRT(parameter, key);
			}
		}
		_9 = Z_TYPE_P(dataTypes) == IS_ARRAY;
		if (_9) {
			ZEPHIR_OBS_NVAR(type);
			_9 = zephir_array_isset_fetch(&type, dataTypes, key, 0 TSRMLS_CC);
		}
		if (_9) {
			do {
				if (ZEPHIR_IS_LONG(type, 0)) {
					ZEPHIR_INIT_NVAR(variable);
					ZVAL_NULL(variable);
					break;
				}
				if (ZEPHIR_IS_LONG(type, 1)) {
					ZEPHIR_INIT_NVAR(variable);
					ZVAL_LONG(variable, zephir_get_intval(value));
					break;
				}
				if (ZEPHIR_IS_LONG(type, 2)) {
					zephir_get_strval(_10, value);
					ZEPHIR_CPY_WRT(variable, _10);
					break;
				}
				if (ZEPHIR_IS_LONG(type, 5)) {
					ZEPHIR_INIT_NVAR(variable);
					ZVAL_BOOL(variable, zephir_get_boolval(value));
					break;
				}
				if (ZEPHIR_IS_LONG(type, 1024)) {
					ZEPHIR_INIT_NVAR(variable);
					ZVAL_DOUBLE(variable, zephir_get_doubleval(value));
					ZEPHIR_INIT_NVAR(type);
					ZVAL_LONG(type, 1024);
					break;
				}
				ZEPHIR_CPY_WRT(variable, value);
				ZEPHIR_INIT_NVAR(type);
				ZVAL_LONG(type, 1024);
			} while(0);

			_11 = zephir_fetch_nproperty_this(this_ptr, SL("_activeStatement"), PH_NOISY_CC);
			ZEPHIR_CALL_METHOD(NULL, _11, "bindvalue", NULL, 0, parameter, variable, type);
			zephir_check_call_status();
		} else {
			_11 = zephir_fetch_nproperty_this(this_ptr, SL("_activeStatement"), PH_NOISY_CC);
			ZEPHIR_CALL_METHOD(NULL, _11, "bindvalue", NULL, 0, parameter, value);
			zephir_check_call_status();
		}
	}
	_11 = zephir_fetch_nproperty_this(this_ptr, SL("_activeStatement"), PH_NOISY_CC);
	ZEPHIR_CALL_METHOD(&result, _11, "execute", NULL, 0);
	zephir_check_call_status();
	if (ZEPHIR_IS_FALSE_IDENTICAL(result)) {
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "error", NULL, 0);
		zephir_check_call_status();
		RETURN_MM_BOOL(0);
	}
	RETURN_MM_MEMBER(this_ptr, "_activeStatement");

}

/**
 * get server database version
 * <code>
 * echo $db->dbversion();
 * </code>
 * @author widuu <admin@widuu.com>
 */
PHP_METHOD(Microdb_Adapter_Pdo, dbVersion) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *_0, *_1;

	ZEPHIR_MM_GROW();

	if (!(zephir_isset_property(this_ptr, SS("_pdo") TSRMLS_CC))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(microdb_adapter_exception_ce, "database service don't connect", "microdb/adapter/pdo.zep", 275);
		return;
	}
	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_pdo"), PH_NOISY_CC);
	ZEPHIR_INIT_VAR(_1);
	ZVAL_LONG(_1, 4);
	ZEPHIR_RETURN_CALL_METHOD(_0, "getattribute", NULL, 0, _1);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * free pdo statement
 * @author widuu <admin@widuu.com>
 */
PHP_METHOD(Microdb_Adapter_Pdo, freePdostatement) {


	zephir_update_property_this(this_ptr, SL("_activeStatement"), ZEPHIR_GLOBAL(global_null) TSRMLS_CC);

}

/**
 * get sql execute error infomation
 * @author widuu <admin@widuu.com>
 */
PHP_METHOD(Microdb_Adapter_Pdo, error) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *error = NULL, *_0, *_1, *_2, *_3, *_4;

	ZEPHIR_MM_GROW();

	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_activeStatement"), PH_NOISY_CC);
	if (zephir_is_true(_0)) {
		_1 = zephir_fetch_nproperty_this(this_ptr, SL("_activeStatement"), PH_NOISY_CC);
		ZEPHIR_CALL_METHOD(&error, _1, "errorinfo", NULL, 0);
		zephir_check_call_status();
		zephir_array_fetch_long(&_2, error, 0, PH_NOISY | PH_READONLY, "microdb/adapter/pdo.zep", 298 TSRMLS_CC);
		zephir_array_fetch_long(&_3, error, 2, PH_NOISY | PH_READONLY, "microdb/adapter/pdo.zep", 298 TSRMLS_CC);
		ZEPHIR_INIT_VAR(_4);
		ZEPHIR_CONCAT_SVSV(_4, "SQLSTATE[", _2, "]: ", _3);
		zephir_update_property_this(this_ptr, SL("_error"), _4 TSRMLS_CC);
	} else {
		ZEPHIR_INIT_ZVAL_NREF(_1);
		ZVAL_STRING(_1, "", 1);
		zephir_update_property_this(this_ptr, SL("_error"), _1 TSRMLS_CC);
	}
	ZEPHIR_MM_RESTORE();

}

