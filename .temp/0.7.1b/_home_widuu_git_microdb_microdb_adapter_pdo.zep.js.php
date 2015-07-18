<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Microdb\\Adapter',
    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
    'line' => 24,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Pdo driver 
 *
 *',
    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
    'line' => 26,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Pdo',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Adapter',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_multi_flag',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 40,
            'char' => 31,
          ),
          'docblock' => '**
	 * mutil database flag
	 *',
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 44,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => '_config',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 46,
            'char' => 35,
          ),
          'docblock' => '**
	 * database config
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 46,
              'char' => 41,
            ),
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 50,
          'char' => 3,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_pdo',
          'docblock' => '**
	 * Pdo resource
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 52,
              'char' => 25,
            ),
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 56,
          'char' => 4,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_prefix',
          'docblock' => '**
	  * database prefix
	  *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 58,
              'char' => 25,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 58,
              'char' => 30,
            ),
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 61,
          'char' => 7,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
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
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 61,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 61,
              'char' => 52,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 62,
                    'char' => 21,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 62,
                  'char' => 23,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 62,
                'char' => 23,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'params must be array',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 63,
                          'char' => 49,
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 63,
                        'char' => 49,
                      ),
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 63,
                    'char' => 50,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 64,
                  'char' => 4,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 66,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_pdo',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 66,
                      'char' => 26,
                    ),
                    'name' => 'connect',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 66,
                          'char' => 43,
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 66,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 66,
                    'char' => 44,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 66,
                  'char' => 44,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 67,
              'char' => 3,
            ),
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 61,
          'last-line' => 83,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
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
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 85,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 85,
              'char' => 48,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'username',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 86,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'password',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 86,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'host',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 86,
                  'char' => 29,
                ),
                3 => 
                array (
                  'variable' => 'dbname',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 86,
                  'char' => 36,
                ),
                4 => 
                array (
                  'variable' => 'charset',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 86,
                  'char' => 44,
                ),
                5 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 86,
                  'char' => 52,
                ),
                6 => 
                array (
                  'variable' => 'dsnparts',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 87,
                  'char' => 11,
                ),
                7 => 
                array (
                  'variable' => 'dsn',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 87,
                  'char' => 15,
                ),
                8 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 87,
                  'char' => 19,
                ),
                9 => 
                array (
                  'variable' => 'value',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 87,
                  'char' => 25,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 89,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'username',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 89,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 89,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'username',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 89,
                    'char' => 40,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 89,
                  'char' => 42,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 89,
                'char' => 42,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 90,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'username',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 90,
                      'char' => 27,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 90,
                    'char' => 28,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 91,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 93,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'password',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 93,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 93,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'password',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 93,
                    'char' => 40,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 93,
                  'char' => 42,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 93,
                'char' => 42,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 94,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'password',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 94,
                      'char' => 27,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 94,
                    'char' => 28,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 95,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 98,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'options',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 98,
                  'char' => 41,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 98,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'options',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 98,
                    'char' => 39,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 98,
                  'char' => 41,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 98,
                'char' => 41,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 99,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'options',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 99,
                      'char' => 26,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 99,
                    'char' => 27,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 100,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 101,
                        'char' => 20,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 101,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 102,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 105,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 105,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'prefix',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 105,
                    'char' => 27,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 105,
                  'char' => 29,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 105,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_prefix',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 106,
                          'char' => 30,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'prefix',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 106,
                          'char' => 39,
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 106,
                        'char' => 40,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 106,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 107,
                  'char' => 8,
                ),
                1 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 107,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'prefix',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 107,
                      'char' => 25,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 107,
                    'char' => 26,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 108,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 111,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'dsn',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 111,
                    'char' => 33,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 111,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'dsn',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 111,
                      'char' => 31,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 111,
                    'char' => 33,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 111,
                  'char' => 33,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 111,
                'char' => 33,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'dsnparts',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 112,
                        'char' => 21,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 112,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 113,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 113,
                    'char' => 29,
                  ),
                  'key' => 'key',
                  'value' => 'value',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'dsnparts',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                'line' => 114,
                                'char' => 26,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '=',
                                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                'line' => 114,
                                'char' => 31,
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 114,
                              'char' => 31,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 114,
                              'char' => 37,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 114,
                            'char' => 37,
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 114,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 115,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 116,
                  'char' => 6,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'dsn',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'join',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => ';',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 116,
                              'char' => 22,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 116,
                            'char' => 22,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'dsnparts',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 116,
                              'char' => 31,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 116,
                            'char' => 31,
                          ),
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 116,
                        'char' => 32,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 116,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 117,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 120,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => '\\PDO',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => 'mysql:',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 120,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'dsn',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 120,
                        'char' => 31,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 120,
                      'char' => 31,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 120,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'username',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 120,
                      'char' => 40,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 120,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'password',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 120,
                      'char' => 49,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 120,
                    'char' => 49,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 120,
                      'char' => 57,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 120,
                    'char' => 57,
                  ),
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 120,
                'char' => 58,
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 121,
              'char' => 2,
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
	 *
	 *	);	
	 * </code>
	 * @author widuu <admin@widuu.com>
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => '\\PDO',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 85,
                  'char' => 59,
                ),
                'collection' => 0,
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 85,
                'char' => 59,
              ),
            ),
            'void' => 0,
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 85,
            'char' => 59,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 85,
          'last-line' => 132,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'prepare',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'sqlStr',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 134,
              'char' => 43,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 135,
                    'char' => 15,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_pdo',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 135,
                    'char' => 21,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 135,
                  'char' => 21,
                ),
                'name' => 'prepare',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'sqlStr',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 135,
                      'char' => 36,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 135,
                    'char' => 36,
                  ),
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 135,
                'char' => 37,
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 136,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 *  return pdo prepare statement 
	 * @param     string      sqlStr
	 * @return     object      PDOStatement
	 * <code>
	 *  $statement = $pdo->prepare( "select * from wd_user where name= :name" );
	 *  $statement = $pdo->prepare( "select * from wd_user where name= ?" );
	 * </code>
	 * @author     widuu     <admin@widuu.com>
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => '\\PDOStatement',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 134,
                  'char' => 64,
                ),
                'collection' => 0,
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 134,
                'char' => 64,
              ),
            ),
            'void' => 0,
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 134,
            'char' => 64,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 134,
          'last-line' => 141,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'execPrepare',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statement',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PDOStatement',
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 143,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 143,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'dataValue',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 143,
              'char' => 75,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'dataTypes',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 143,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 143,
              'char' => 93,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 145,
                  'char' => 10,
                ),
                1 => 
                array (
                  'variable' => 'value',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 145,
                  'char' => 16,
                ),
                2 => 
                array (
                  'variable' => 'parameter',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 145,
                  'char' => 26,
                ),
                3 => 
                array (
                  'variable' => 'variable',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 145,
                  'char' => 35,
                ),
                4 => 
                array (
                  'variable' => 'type',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 145,
                  'char' => 40,
                ),
                5 => 
                array (
                  'variable' => 'customValue',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 145,
                  'char' => 52,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 147,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'not-equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'statement',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 147,
                      'char' => 24,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 147,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'object',
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 147,
                    'char' => 36,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 147,
                  'char' => 36,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'instanceof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'statement',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 147,
                        'char' => 61,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '\\PDOStatement',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 147,
                        'char' => 77,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 147,
                      'char' => 77,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 147,
                    'char' => 78,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 147,
                  'char' => 78,
                ),
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 147,
                'char' => 78,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'PDOStatement type error',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 148,
                          'char' => 50,
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 148,
                        'char' => 50,
                      ),
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 148,
                    'char' => 51,
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 149,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 150,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 152,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'dataValue',
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 152,
                'char' => 32,
              ),
              'key' => 'key',
              'value' => 'value',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'key',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 153,
                        'char' => 19,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 153,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'integer',
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 153,
                      'char' => 31,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 153,
                    'char' => 31,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'parameter',
                          'expr' => 
                          array (
                            'type' => 'add',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 154,
                              'char' => 25,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '1',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 154,
                              'char' => 28,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 154,
                            'char' => 28,
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 154,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 155,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'parameter',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'key',
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 156,
                            'char' => 25,
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 156,
                          'char' => 25,
                        ),
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 157,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 159,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dataTypes',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 159,
                          'char' => 25,
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 159,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'array',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 159,
                        'char' => 36,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 159,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'fetch',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 159,
                        'char' => 68,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dataTypes',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 159,
                          'char' => 60,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 159,
                          'char' => 66,
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 159,
                        'char' => 68,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 159,
                      'char' => 68,
                    ),
                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                    'line' => 159,
                    'char' => 68,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'switch',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 160,
                        'char' => 17,
                      ),
                      'clauses' => 
                      array (
                        0 => 
                        array (
                          'type' => 'case',
                          'expr' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'Pdo',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 161,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'TYPE_NULL',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 161,
                              'char' => 26,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 161,
                            'char' => 26,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'customValue',
                                  'expr' => 
                                  array (
                                    'type' => 'null',
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 162,
                                    'char' => 29,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 162,
                                  'char' => 29,
                                ),
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 163,
                              'char' => 11,
                            ),
                            1 => 
                            array (
                              'type' => 'break',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 164,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 164,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'type' => 'case',
                          'expr' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'Pdo',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 164,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'TYPE_INT',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 164,
                              'char' => 26,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 164,
                            'char' => 26,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'customValue',
                                  'expr' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'intval',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'value',
                                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                          'line' => 165,
                                          'char' => 39,
                                        ),
                                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                        'line' => 165,
                                        'char' => 39,
                                      ),
                                    ),
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 165,
                                    'char' => 40,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 165,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 166,
                              'char' => 11,
                            ),
                            1 => 
                            array (
                              'type' => 'break',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 167,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 167,
                          'char' => 9,
                        ),
                        2 => 
                        array (
                          'type' => 'case',
                          'expr' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'Pdo',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 167,
                              'char' => 25,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'TYPE_STR',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 167,
                              'char' => 25,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 167,
                            'char' => 25,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'customValue',
                                  'expr' => 
                                  array (
                                    'type' => 'cast',
                                    'left' => 'string',
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'value',
                                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                      'line' => 168,
                                      'char' => 41,
                                    ),
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 168,
                                    'char' => 41,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 168,
                                  'char' => 41,
                                ),
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 169,
                              'char' => 11,
                            ),
                            1 => 
                            array (
                              'type' => 'break',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 170,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 170,
                          'char' => 9,
                        ),
                        3 => 
                        array (
                          'type' => 'case',
                          'expr' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'Pdo',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 170,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'TYPE_BOOL',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 170,
                              'char' => 26,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 170,
                            'char' => 26,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'customValue',
                                  'expr' => 
                                  array (
                                    'type' => 'cast',
                                    'left' => 'bool',
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'value',
                                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                      'line' => 171,
                                      'char' => 42,
                                    ),
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 171,
                                    'char' => 42,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 171,
                                  'char' => 42,
                                ),
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 172,
                              'char' => 11,
                            ),
                            1 => 
                            array (
                              'type' => 'break',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 173,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 173,
                          'char' => 9,
                        ),
                        4 => 
                        array (
                          'type' => 'case',
                          'expr' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'Pdo',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 173,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'TYPE_DECIMAL',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 173,
                              'char' => 29,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 173,
                            'char' => 29,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'customValue',
                                  'expr' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'doubleval',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'value',
                                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                          'line' => 174,
                                          'char' => 40,
                                        ),
                                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                        'line' => 174,
                                        'char' => 40,
                                      ),
                                    ),
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 174,
                                    'char' => 41,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 174,
                                  'char' => 41,
                                ),
                                1 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'type',
                                  'expr' => 
                                  array (
                                    'type' => 'static-constant-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'Pdo',
                                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                      'line' => 175,
                                      'char' => 32,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'TYPE_DECIMAL',
                                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                      'line' => 175,
                                      'char' => 32,
                                    ),
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 175,
                                    'char' => 32,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 175,
                                  'char' => 32,
                                ),
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 176,
                              'char' => 11,
                            ),
                            1 => 
                            array (
                              'type' => 'break',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 177,
                              'char' => 12,
                            ),
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 177,
                          'char' => 12,
                        ),
                        5 => 
                        array (
                          'type' => 'default',
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'let',
                              'assignments' => 
                              array (
                                0 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'customValue',
                                  'expr' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 178,
                                    'char' => 30,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 178,
                                  'char' => 30,
                                ),
                                1 => 
                                array (
                                  'assign-type' => 'variable',
                                  'operator' => 'assign',
                                  'variable' => 'type',
                                  'expr' => 
                                  array (
                                    'type' => 'static-constant-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'Pdo',
                                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                      'line' => 179,
                                      'char' => 32,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'TYPE_DECIMAL',
                                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                      'line' => 179,
                                      'char' => 32,
                                    ),
                                    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                    'line' => 179,
                                    'char' => 32,
                                  ),
                                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                                  'line' => 179,
                                  'char' => 32,
                                ),
                              ),
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 180,
                              'char' => 5,
                            ),
                          ),
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 180,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 182,
                      'char' => 13,
                    ),
                    1 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'statement',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 182,
                          'char' => 15,
                        ),
                        'name' => 'bindValue',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'parameter',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 182,
                              'char' => 37,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 182,
                            'char' => 37,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'customValue',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 182,
                              'char' => 51,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 182,
                            'char' => 51,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'type',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 182,
                              'char' => 58,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 182,
                            'char' => 58,
                          ),
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 182,
                        'char' => 59,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 183,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'statement',
                          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                          'line' => 184,
                          'char' => 15,
                        ),
                        'name' => 'bindValue',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'parameter',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 184,
                              'char' => 37,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 184,
                            'char' => 37,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                              'line' => 184,
                              'char' => 45,
                            ),
                            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                            'line' => 184,
                            'char' => 45,
                          ),
                        ),
                        'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                        'line' => 184,
                        'char' => 46,
                      ),
                      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                      'line' => 185,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 187,
                  'char' => 3,
                ),
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 188,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'statement',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 188,
                  'char' => 13,
                ),
                'name' => 'execute',
                'call-type' => 1,
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 188,
                'char' => 23,
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 189,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'statement',
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 189,
                'char' => 19,
              ),
              'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
              'line' => 190,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * executes prepare 
	 * 
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => '\\PDOStatement',
                  'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                  'line' => 143,
                  'char' => 113,
                ),
                'collection' => 0,
                'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
                'line' => 143,
                'char' => 113,
              ),
            ),
            'void' => 0,
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 143,
            'char' => 113,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 143,
          'last-line' => 191,
          'char' => 16,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_NULL',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 28,
            'char' => 22,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 29,
          'char' => 6,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_INT',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 29,
            'char' => 24,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 30,
          'char' => 6,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_STR',
          'default' => 
          array (
            'type' => 'int',
            'value' => '2',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 30,
            'char' => 24,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 31,
          'char' => 6,
        ),
        3 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_LOB',
          'default' => 
          array (
            'type' => 'int',
            'value' => '3',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 31,
            'char' => 23,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 32,
          'char' => 6,
        ),
        4 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_STMT',
          'default' => 
          array (
            'type' => 'int',
            'value' => '4',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 32,
            'char' => 22,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 33,
          'char' => 6,
        ),
        5 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_BOOL',
          'default' => 
          array (
            'type' => 'int',
            'value' => '5',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 33,
            'char' => 22,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 34,
          'char' => 6,
        ),
        6 => 
        array (
          'type' => 'const',
          'name' => 'TYPE_DECIMAL',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1024',
            'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
            'line' => 34,
            'char' => 27,
          ),
          'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
          'line' => 38,
          'char' => 3,
        ),
      ),
      'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
      'line' => 26,
      'char' => 5,
    ),
    'file' => '/home/widuu/git/microdb/microdb/adapter/pdo.zep',
    'line' => 26,
    'char' => 5,
  ),
);