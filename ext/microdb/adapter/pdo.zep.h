
extern zend_class_entry *microdb_adapter_pdo_ce;

ZEPHIR_INIT_CLASS(Microdb_Adapter_Pdo);

PHP_METHOD(Microdb_Adapter_Pdo, connect);
PHP_METHOD(Microdb_Adapter_Pdo, parseConfig);

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo_connect, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, config, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo_parseconfig, 0, 0, 1)
	ZEND_ARG_INFO(0, callback)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(microdb_adapter_pdo_method_entry) {
	PHP_ME(Microdb_Adapter_Pdo, connect, arginfo_microdb_adapter_pdo_connect, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, parseConfig, arginfo_microdb_adapter_pdo_parseconfig, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_FE_END
};
