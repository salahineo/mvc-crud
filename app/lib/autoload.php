<?php

// Libraries Namespace
namespace APP\Lib;

// Autoloader Class
class Autoload {
  // Autoload Files Method
  public static function autoload($className) {
    // Exclude 'APP' From Class Name
    $className = str_replace('APP', '', $className);
    // Replace Backslash With Directory Separator
    $className = str_replace('\\', DS, $className);
    // Lowercase Classname, Then Add PHP Extension To It
    $className = strtolower($className) . '.php';
    // Check File Exist
    if(file_exists(APP . $className)) {
      // Require This File
      require_once APP . $className;
    }
  }
}

// Trigger Autoload Method
spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');
