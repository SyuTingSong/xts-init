<?php
return array(
    'component' => array(
        'apple' => array(
            'class' => '\\xts\\Apple',
            'singleton' => true,
            'conf' => array(
                'actionDir' => X_PROJECT_ROOT.'/protected/action',
                'defaultAction' => '/index',
                'actionPrefix' => 'action_',
                'preAction' => '',
                'preActionFile' => '',
            ),
        ),
        'orange' => array(
            'class' => '\\xts\\Orange',
            'singleton' => false,
            'conf' => array(
                'tablePrefix' => '',
                'queryId' => 'db',
                'enableCacheByDefault' => false,
                'moldyConf' => array(
                    'cacheId' => 'cache',
                    'duration' => 3600,
                ),
                'schemaConf' => array(
                    'schemaCacheId' => 'cc',
                    'useSchemaCache' => true,
                    'schemaCacheDuration' => 0,
                ),
            ),
        ),
        'db' => array(
            'class' => '\\xts\\Query',
            'singleton' => true,
            'conf' => array(
                'host' => 'localhost',
                'port' => 3306,
                'schema' => 'xts',
                'charset' => 'utf8',
                'user' => 'xts',
                'password' => 'xtstest',
                'persistent' => false,
            ),
        ),
        'cache' => array(
            'class' => '\\xts\\MCache',
            'singleton' => true,
            'conf' => array(
                'host' => 'localhost',
                'port' => 11211,
                'persistent' => true,
                'keyPrefix' => '',
            ),
        ),
        'cc' => array(
            'class' => '\\xts\\CCache',
            'singleton' => true,
            'conf' => array(
                'cacheDir' => X_PROJECT_ROOT.'/protected/runtime/compile_cache',
            ),
        ),
        'view' => array(
            'class' => '\\xts\\Hail',
            'require' => X_LIB_ROOT.'/hail.php',
            'singleton' => true,
            'conf' => array(
                'tpl_dir' => X_PROJECT_ROOT.'/protected/view',
                'tpl_ext' => 'html',
                'compile_dir' => X_RUNTIME_ROOT.'/compiled_template',
                'enable_clip' => false,
                'cacheId' => 'cc', // string to cache component id or false to disable cache
                'cacheDuration' => 60, // page cache duration, second
            )
        ),
        'redis' => array(
            'class' => '\xts\Redis',
            'require' => X_LIB_ROOT.'/redis.php',
            'singleton' => true,
            'conf' => array(
                'host' => 'localhost',
                'port' => 6379,
                'timeout' => 0,
                'persistent' => false,
                'database' => 0,
                'auth' => null,
                'keyPrefix' => '',
            ),
        ),
        'valley' => array(
            'class' => '\xts\Valley',
            'require' => X_LIB_ROOT.'/valley.php',
            'singleton' => false,
            'conf' => array(
                'encoding' => 'UTF-8',
            ),
        ),
    ),
);
