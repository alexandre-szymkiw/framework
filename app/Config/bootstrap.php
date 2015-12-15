<?php
/**
 * Bootstrap handler - perform the SMVC Framework boot stage.
 *
 * @author Virgil-Adrian Teaca - virgil@@giulianaeassociati.com
 * @version 3.0
 * @date December 15th, 2015
 */

use Smvc\Helpers\Session;

/**
 * Turn on output buffering.
 */
ob_start();

require dirname(__FILE__).'/constants.php';
require dirname(__FILE__).'/functions.php';
require dirname(__FILE__).'/config.php';

/**
 * Turn on custom error handling.
 */

set_exception_handler('Smvc\Core\Logger::ExceptionHandler');
set_error_handler('Smvc\Core\Logger::ErrorHandler');

/**
 * Set timezone.
 */
date_default_timezone_set('Europe/Rome');

/**
 * Start sessions.
 */
Session::init();

/** load routes */
require dirname(__FILE__).'/routes.php';