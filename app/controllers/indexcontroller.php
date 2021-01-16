<?php

// Controllers Namespace
namespace APP\Controllers;

// Index Controller
class IndexController extends AbstractController {
  // Default Action Method
  public function defaultAction() {
    // Load Common Template Language File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('index.default');
    // Require The Desired View
    $this->view();
  }
}
