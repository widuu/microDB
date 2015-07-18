<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Microdb\\Adapter',
    'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
    'line' => 24,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * database driver adapter 
 *
 *',
    'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
    'line' => 26,
    'char' => 8,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Adapter',
    'abstract' => 1,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'abstract',
            1 => 'protected',
          ),
          'type' => 'method',
          'name' => 'connect',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
                'line' => 44,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
              'line' => 44,
              'char' => 59,
            ),
          ),
          'docblock' => '**
	 * The function connect database , params must be array
	 * <code>
	 * $config = array(
	 *		\'username\'  =>  \'username\',
	 *		\'password\'  =>   \'password\',
	 *		\'host\'	      =>   \'localhost\',
	 *		\'dbname\'    =>   \'test\',
	 *		\'charset\'     =>   \'utf8\',
	 *		\'prefix\'        =>    \'wd_\',
	 *		\'options\'     =>    array();
	 *	);	
	 * </code>
	 * @author widuu <admin@widuu.com>
	 *',
          'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
          'line' => 44,
          'last-line' => 50,
          'char' => 28,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'parseConfig',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'callback',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
              'line' => 52,
              'char' => 55,
            ),
          ),
          'docblock' => '**
	 * user can use this function parse database config to yourself
	 * 
	 *
	 *',
          'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
          'line' => 52,
          'last-line' => 55,
          'char' => 27,
        ),
      ),
      'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
      'line' => 26,
      'char' => 14,
    ),
    'file' => '/home/widuu/git/microdb/microdb/adapter/adapter.zep',
    'line' => 26,
    'char' => 14,
  ),
);