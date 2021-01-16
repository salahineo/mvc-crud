<?php

// Controllers Namespace
namespace APP\Controllers;

// Use The Required Classes
use APP\Lib\FrontController;

// Abstract Controller Class
class AbstractController {

  // URL Properties
  protected $_controller;
  protected $_action;
  protected $_parameters;

  // Language Property
  protected $_language;

  // View Data Property
  protected $_data = array();

  // Set Controller Method
  public function setController($controller) {
    $this->_controller = $controller;
  }

  // Set Action Method
  public function setAction($action) {
    $this->_action = $action;
  }

  // Set Parameters Method
  public function setParameters($parameters) {
    $this->_parameters = $parameters;
  }

  // Set Language Method
  public function setLanguage($language) {
    $this->_language = $language;
  }

  // Check The Requested View Method
  public function view() {
    // Check For Action & Controller
    if($this->_action == FrontController::NOT_FOUND_ACTION) {
      // Render Not Found View
      $this->renderView('notfound', 'notfound.view.php');
    } else {
      // Get The Requested View Path
      $view = VIEWS . DS . strtolower($this->_controller) . DS . strtolower($this->_action) . '.view.php';
      // Check If View File Exists
      if(file_exists($view)) {
        // Render The Requested View
        $this->renderView(strtolower($this->_controller), strtolower($this->_action) . '.view.php');
      } else {
        // Render No View-View
        $this->renderView('notfound', 'noview.view.php', $this->_language->load('notfound.notfound'));
      }
    }
  }

  // Render The Requested View Method
  public function renderView($controller, $action, $language = '') {
    // Merge Language Dictionary & Data In One Array, To Send Them To The Requested View
    $this->_data = array_merge($this->_data, $this->_language->getDictionary());
    // Extract Data To Variables And Values
    extract($this->_data);
    // Require The Requested View With Template Files
    require_once TEMPLATE . DS . 'headerstart.php';
    require_once TEMPLATE . DS . 'headerend.php';
    require_once TEMPLATE . DS . 'contentstart.php';
    require_once TEMPLATE . DS . 'nav.php';
    require_once TEMPLATE . DS . 'rowstart.php';
    require_once TEMPLATE . DS . 'sidebar.php';
    require_once VIEWS . DS . $controller . DS . $action;
    require_once TEMPLATE . DS . 'rowend.php';
    require_once TEMPLATE . DS . 'contentend.php';
    require_once TEMPLATE . DS . 'footer.php';
  }

  // Not Found Action Method
  public function notFoundAction() {
    // Load Common Language Template File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('notfound.notfound');
    // Require The Desired View
    $this->view();
  }
}
