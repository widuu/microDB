
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"


/**
 * database driver adapter 
 *
 */
ZEPHIR_INIT_CLASS(Microdb_Adapter) {

	ZEPHIR_REGISTER_CLASS(Microdb, Adapter, microdb, adapter, microdb_adapter_method_entry, ZEND_ACC_EXPLICIT_ABSTRACT_CLASS);

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
PHP_METHOD(Microdb_Adapter, connect) {

}

/**
 * user can use this function parse database config to yourself
 * 
 *
 */
PHP_METHOD(Microdb_Adapter, parseConfig) {

}

