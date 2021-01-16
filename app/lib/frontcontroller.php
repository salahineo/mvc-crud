<?php

// Libraries Namespace
namespace APP\Lib;

// Front Controller Class
class FrontController {

  // Not Found Constants
  const NOT_FOUND_ACTION = 'notFoundAction';
  const NOT_FOUND_CONTROLLER = 'APP\Controllers\NotFoundController';

  // URL Components With Defaults
  private $_controller = 'index';
  private $_action = 'default';
  private $_parameters = array();

  // Language Variable
  private $_language;

  // Constructor
  public function __construct(Language $language) {
    // Set Language
    $this->_language = $language;
    // Trigger Parse URL Method
    $this->parseURL();
    // Trigger Dispatch Method
    $this->dispatch();
  }

  // Parse URL To 3 Components Method
  private function parseURL() {
    // Get Requested URL PATH (Without '/' In Beginning Or End)
    $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    // Explode URL To 3 Items [Controller - Action - Parameters]
    $url = explode('/', $url, 3);
    // Check First Item [Controller]
    if(isset($url[0]) && $url[0] != '') {
      // Set Value To Controller
      $this->_controller = $url[0];
    }
    // Check Second Item [Action]
    if(isset($url[1]) && $url[1] != '') {
      // Set Value To Action
      $this->_action = $url[1];
    }
    // Check Third Item [Parameters]
    if(isset($url[2]) && $url[2] != '') {
      // Set Value To Parameters (As Array)
      $this->_parameters = explode('/', $url[2]);
    }
  }

  // Trigger Desired Controller And It's Action Method
  private function dispatch() {
    // Get Full Controller Class Name
    $controllerName = 'APP\Controllers\\' . ucfirst(strtolower($this->_controller)) . 'Controller';
    // Get Full Action Name
    $actionName = strtolower($this->_action) . 'Action';
    // If This Controller Not Exist, Go To Not Found Controller
    if(!class_exists($controllerName)) {
      // Set Controller To Not Found
      $controllerName = self::NOT_FOUND_CONTROLLER;
    }
    // Take Instance From Controller
    $controller = new $controllerName;
    // Check If This Action Not Exist
    if(!method_exists($controller, $actionName)) {
      // Set Action To Not Found
      $this->_action = $actionName = self::NOT_FOUND_ACTION;
    }
    // Send Properties To This Controller Class
    $controller->setController($this->_controller);
    $controller->setAction($this->_action);
    $controller->setParameters($this->_parameters);
    $controller->setLanguage($this->_language);

    // Trigger Controller Action Method
    $controller->$actionName();
  }
}
