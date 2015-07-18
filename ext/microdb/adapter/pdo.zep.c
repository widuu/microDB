
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
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/exception.h"
#include "kernel/fcall.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/array.h"
#include "kernel/hash.h"
#include "kernel/concat.h"
#include "kernel/string.h"
#include "ext/pdo/php_pdo_driver.h"
#include "kernel/main.h"


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
	 * database prefix
	 */
	zend_declare_property_null(microdb_adapter_pdo_ce, SL("_prefix"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_NULL"), 0 TSRMLS_CC);

	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_INT"), 1 TSRMLS_CC);

	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_STR"), 2 TSRMLS_CC);

	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_LOB"), 3 TSRMLS_CC);

	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_STMT"), 4 TSRMLS_CC);

	zend_declare_class_constant_long(microdb_adapter_pdo_ce, SL("TYPE_BOOL"), 5 TSRMLS_CC);

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
 * database prefix
 */
PHP_METHOD(Microdb_Adapter_Pdo, getPrefix) {


	RETURN_MEMBER(this_ptr, "_prefix");

}

/**
 * database prefix
 */
PHP_METHOD(Microdb_Adapter_Pdo, setPrefix) {

	zval *prefix;

	zephir_fetch_params(0, 1, 0, &prefix);



	zephir_update_property_this(this_ptr, SL("_prefix"), prefix TSRMLS_CC);

}

PHP_METHOD(Microdb_Adapter_Pdo, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zend_class_entry *_1 = NULL;
	zval *config_param = NULL, *_0, *_2, *_3 = NULL;
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
		ZEPHIR_INIT_VAR(_0);
		if (!_1) {
			_1 = zend_fetch_class(SL("Microdb\\Adapter\\Exception"), ZEND_FETCH_CLASS_AUTO TSRMLS_CC);
		}
		object_init_ex(_0, _1);
		if (zephir_has_constructor(_0 TSRMLS_CC)) {
			ZEPHIR_INIT_VAR(_2);
			ZVAL_STRING(_2, "params must be array", ZEPHIR_TEMP_PARAM_COPY);
			ZEPHIR_CALL_METHOD(NULL, _0, "__construct", NULL, 0, _2);
			zephir_check_temp_parameter(_2);
			zephir_check_call_status();
		}
		zephir_throw_exception_debug(_0, "microdb/adapter/pdo.zep", 63 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	ZEPHIR_CALL_METHOD(&_3, this_ptr, "connect", NULL, 0, config);
	zephir_check_call_status();
	zephir_update_property_this(this_ptr, SL("_pdo"), _3 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

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
		zephir_array_fetch_string(&_0, config, SL("prefix"), PH_NOISY | PH_READONLY, "microdb/adapter/pdo.zep", 106 TSRMLS_CC);
		zephir_update_property_this(this_ptr, SL("_prefix"), _0 TSRMLS_CC);
		zephir_array_unset_string(&config, SS("prefix"), PH_SEPARATE);
	}
	ZEPHIR_OBS_VAR(dsn);
	if (!(zephir_array_isset_string_fetch(&dsn, config, SS("dsn"), 0 TSRMLS_CC))) {
		ZEPHIR_INIT_VAR(dsnparts);
		array_init(dsnparts);
		zephir_is_iterable(config, &_2, &_1, 0, 0, "microdb/adapter/pdo.zep", 116);
		for (
		  ; zephir_hash_get_current_data_ex(_2, (void**) &_3, &_1) == SUCCESS
		  ; zephir_hash_move_forward_ex(_2, &_1)
		) {
			ZEPHIR_GET_HMKEY(key, _2, _1);
			ZEPHIR_GET_HVALUE(value, _3);
			ZEPHIR_INIT_LNVAR(_4);
			ZEPHIR_CONCAT_VSV(_4, key, "=", value);
			zephir_array_append(&dsnparts, _4, PH_SEPARATE, "microdb/adapter/pdo.zep", 114);
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
 *  return pdo prepare statement 
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
	zval *sqlStr_param = NULL, *_0;
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


	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_pdo"), PH_NOISY_CC);
	ZEPHIR_RETURN_CALL_METHOD(_0, "prepare", NULL, 0, sqlStr);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * executes prepare 
 * 
 */
PHP_METHOD(Microdb_Adapter_Pdo, execPrepare) {

	zephir_fcall_cache_entry *_6 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *_5 = NULL;
	HashTable *_2;
	HashPosition _1;
	zend_bool _0, _4;
	zval *dataValue = NULL;
	zval *statement, *dataValue_param = NULL, *dataTypes = NULL, *key = NULL, *value = NULL, *parameter = NULL, *type = NULL, *customValue = NULL, **_3;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &statement, &dataValue_param, &dataTypes);

	dataValue = dataValue_param;

	if (!dataTypes) {
		dataTypes = ZEPHIR_GLOBAL(global_null);
	}


	_0 = Z_TYPE_P(statement) != IS_OBJECT;
	if (!(_0)) {
		_0 = !((zephir_instance_of_ev(statement, zephir_get_internal_ce(SS("pdostatement") TSRMLS_CC) TSRMLS_CC)));
	}
	if (_0) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(zend_exception_get_default(TSRMLS_C), "PDOStatement type error", "microdb/adapter/pdo.zep", 148);
		return;
		RETURN_MM_NULL();
	}
	zephir_is_iterable(dataValue, &_2, &_1, 0, 0, "microdb/adapter/pdo.zep", 188);
	for (
	  ; zephir_hash_get_current_data_ex(_2, (void**) &_3, &_1) == SUCCESS
	  ; zephir_hash_move_forward_ex(_2, &_1)
	) {
		ZEPHIR_GET_HMKEY(key, _2, _1);
		ZEPHIR_GET_HVALUE(value, _3);
		if (Z_TYPE_P(key) == IS_LONG) {
			ZEPHIR_INIT_NVAR(parameter);
			ZVAL_LONG(parameter, (zephir_get_numberval(key) + 1));
		} else {
			ZEPHIR_CPY_WRT(parameter, key);
		}
		_4 = Z_TYPE_P(dataTypes) == IS_ARRAY;
		if (_4) {
			ZEPHIR_OBS_NVAR(type);
			_4 = zephir_array_isset_fetch(&type, dataTypes, key, 0 TSRMLS_CC);
		}
		if (_4) {
			do {
				if (ZEPHIR_IS_LONG(type, 0)) {
					ZEPHIR_INIT_NVAR(customValue);
					ZVAL_NULL(customValue);
					break;
				}
				if (ZEPHIR_IS_LONG(type, 1)) {
					ZEPHIR_INIT_NVAR(customValue);
					ZVAL_LONG(customValue, zephir_get_intval(value));
					break;
				}
				if (ZEPHIR_IS_LONG(type, 2)) {
					zephir_get_strval(_5, value);
					ZEPHIR_CPY_WRT(customValue, _5);
					break;
				}
				if (ZEPHIR_IS_LONG(type, 5)) {
					ZEPHIR_INIT_NVAR(customValue);
					ZVAL_BOOL(customValue, zephir_get_boolval(value));
					break;
				}
				if (ZEPHIR_IS_LONG(type, 1024)) {
					ZEPHIR_INIT_NVAR(customValue);
					ZVAL_DOUBLE(customValue, zephir_get_doubleval(value));
					ZEPHIR_INIT_NVAR(type);
					ZVAL_LONG(type, 1024);
					break;
				}
				ZEPHIR_CPY_WRT(customValue, value);
				ZEPHIR_INIT_NVAR(type);
				ZVAL_LONG(type, 1024);
			} while(0);

			ZEPHIR_CALL_METHOD(NULL, statement, "bindvalue", &_6, 0, parameter, customValue, type);
			zephir_check_call_status();
		} else {
			ZEPHIR_CALL_METHOD(NULL, statement, "bindvalue", &_6, 0, parameter, value);
			zephir_check_call_status();
		}
	}
	ZEPHIR_CALL_METHOD(NULL, statement, "execute", NULL, 0);
	zephir_check_call_status();
	RETVAL_ZVAL(statement, 1, 0);
	RETURN_MM();

}

