
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
#include "kernel/memory.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/fcall.h"


/**
 * Pdo driver 
 *
 */
ZEPHIR_INIT_CLASS(Microdb_Adapter_Pdo) {

	ZEPHIR_REGISTER_CLASS_EX(Microdb\\Adapter, Pdo, microdb, adapter_pdo, microdb_adapter_adapter_ce, microdb_adapter_pdo_method_entry, 0);

	return SUCCESS;

}

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
PHP_METHOD(Microdb_Adapter_Pdo, connect) {

	zval *config_param = NULL;
	zval *config = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &config_param);

	if (!config_param) {
	ZEPHIR_INIT_VAR(config);
	array_init(config);
	} else {
	config = config_param;

	}



}

/**
 * user can use this function parse database config to yourself
 * 
 *
 */
PHP_METHOD(Microdb_Adapter_Pdo, parseConfig) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *callback;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &callback);



	if (Z_TYPE_P(callback) != IS_OBJECT) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(zend_exception_get_default(TSRMLS_C), "param must be callback function", "microdb/adapter/pdo.zep", 56);
		return;
	}
	ZEPHIR_RETURN_CALL_ZVAL_FUNCTION(callback, NULL, 0);
	zephir_check_call_status();
	RETURN_MM();

}

