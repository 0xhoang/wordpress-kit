<?php
/**
 * Created by PhpStorm.
 * User: lap00344
 * Date: 11/16/17
 * Time: 9:14 AM
 */

require_once dirname(__DIR__) . '/vendor/autoload.php';

if (file_exists(dirname(__DIR__) . '/config/production-config.php')) {
    define('WP_LOCAL_DEV', false);
    include(dirname(__DIR__) . '/config/production-config.php');
} else {
    define('WP_LOCAL_DEV', true);
    include(dirname(__DIR__) . '/config/local-config.php');
}

require_once(ABSPATH . 'wp-settings.php');