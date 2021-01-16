<?php

// Controllers Namespace
namespace APP\CONTROLLERS;

// Not Found Controller
class NotFoundController extends AbstractController {

  // Database Connection Error Action Method
  public function db_errorAction() {
    // Load Common Template Language File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('notfound.db_error');
    // Require The Desired View
    $this->view();
  }

  // No View Action Method
  public function noviewAction() {
    // Load Common Template Language File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('notfound.noview');
    // Require The Desired View
    $this->view();
  }
}
