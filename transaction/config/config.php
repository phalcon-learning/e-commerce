<?php
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('TRANSACTION_PATH') || define('TRANSACTION_PATH', BASE_PATH . '/transaction');

return new \Phalcon\Config([
    'database' => [
        'adapter'    => 'Mysql',
        'host'       => 'localhost',
        'username'   => 'root',
        'password'   => '',
        'dbname'     => 'ecommerce',
        'charset'    => 'utf8',
    ],

    'application' => [
        'modelsDir'      => TRANSACTION_PATH . '/models/',
        'controllersDir'      => TRANSACTION_PATH . '/controllers/',
        'migrationsDir'  => TRANSACTION_PATH . '/migrations/',
        'viewsDir'       => TRANSACTION_PATH . '/views/',
        'baseUri'        => '/project/',
    ]
]);
