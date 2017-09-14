<?php
/**
 * Created by PhpStorm.
 * User: aleksandrmyronov
 * Date: 29.08.17
 * Time: 14:17
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
require_once (ROOT.DS.'lib'.DS."init.php");

$router = new Router($_SERVER['REQUEST_URI']);