<?php

// App Namespace
namespace APP;

// Use Required Classes
use APP\Lib\FrontController;
use APP\Lib\Language;

// Start Session
session_start();

// Require Config File
require_once '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php';

// Require Autoload File
require_once APP . DS . 'lib' . DS . 'connection.php';
require_once APP . DS . 'lib' . DS . 'autoload.php';

// Set Language Session
$_SESSION['App_Language'] = isset($_SESSION['App_Language']) ? $_SESSION['App_Language'] : DEFAULT_LANGUAGE;

// Instance From Language class
$language = new Language();

// Instance From Front Controller Class
$frontcontroller = new FrontController($language);
