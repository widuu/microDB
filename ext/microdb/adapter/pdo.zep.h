
extern zend_class_entry *microdb_adapter_pdo_ce;

ZEPHIR_INIT_CLASS(Microdb_Adapter_Pdo);

PHP_METHOD(Microdb_Adapter_Pdo, getConfig);
PHP_METHOD(Microdb_Adapter_Pdo, getPdo);
PHP_METHOD(Microdb_Adapter_Pdo, getPrefix);
PHP_METHOD(Microdb_Adapter_Pdo, setPrefix);
PHP_METHOD(Microdb_Adapter_Pdo, __construct);
PHP_METHOD(Microdb_Adapter_Pdo, connect);
PHP_METHOD(Microdb_Adapter_Pdo, prepare);
PHP_METHOD(Microdb_Adapter_Pdo, execPrepare);

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo_setprefix, 0, 0, 1)
	ZEND_ARG_INFO(0, prefix)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, config, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo_connect, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, config, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo_prepare, 0, 0, 1)
	ZEND_ARG_INFO(0, sqlStr)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_microdb_adapter_pdo_execprepare, 0, 0, 3)
	ZEND_ARG_OBJ_INFO(0, statement, PDOStatement, 0)
	ZEND_ARG_ARRAY_INFO(0, dataValue, 0)
	ZEND_ARG_INFO(0, dataTypes)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(microdb_adapter_pdo_method_entry) {
	PHP_ME(Microdb_Adapter_Pdo, getConfig, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, getPdo, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, getPrefix, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, setPrefix, arginfo_microdb_adapter_pdo_setprefix, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, __construct, arginfo_microdb_adapter_pdo___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Microdb_Adapter_Pdo, connect, arginfo_microdb_adapter_pdo_connect, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, prepare, arginfo_microdb_adapter_pdo_prepare, ZEND_ACC_PUBLIC)
	PHP_ME(Microdb_Adapter_Pdo, execPrepare, arginfo_microdb_adapter_pdo_execprepare, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
