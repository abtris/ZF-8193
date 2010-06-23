<?php
/**
 *  @version ##VERSION##
 *  @package ##PACKAGE##
 *  @filesource
 */
// timezone
date_default_timezone_set('Europe/Prague');

error_reporting( E_ALL | E_STRICT );

define('APPLICATION_PATH', dirname(__FILE__) . '/../../application/');

// Include path
set_include_path(
    '.'
    . PATH_SEPARATOR . APPLICATION_PATH . '../library'
    . PATH_SEPARATOR . get_include_path()
);


// Define application environment
define('APPLICATION_ENV', 'development');

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
