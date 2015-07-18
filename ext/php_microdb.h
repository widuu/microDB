
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_MICRODB_H
#define PHP_MICRODB_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_MICRODB_NAME        "microdb"
#define PHP_MICRODB_VERSION     "0.0.1"
#define PHP_MICRODB_EXTNAME     "microdb"
#define PHP_MICRODB_AUTHOR      "widuu <admin@widuu.com>"
#define PHP_MICRODB_ZEPVERSION  "0.7.1b"
#define PHP_MICRODB_DESCRIPTION "php database framework written in c"



ZEND_BEGIN_MODULE_GLOBALS(microdb)

	int initialized;

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	/* Global constants */
	zval *global_true;
	zval *global_false;
	zval *global_null;
	
ZEND_END_MODULE_GLOBALS(microdb)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(microdb)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) TSRMG(microdb_globals_id, zend_microdb_globals *, v)
#else
	#define ZEPHIR_GLOBAL(v) (microdb_globals.v)
#endif

#ifdef ZTS
	#define ZEPHIR_VGLOBAL ((zend_microdb_globals *) (*((void ***) tsrm_ls))[TSRM_UNSHUFFLE_RSRC_ID(microdb_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(microdb_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def microdb_globals
#define zend_zephir_globals_def zend_microdb_globals

extern zend_module_entry microdb_module_entry;
#define phpext_microdb_ptr &microdb_module_entry

#endif
