<?php

// Controllers Namespace
namespace APP\Controllers;

// Use The Required Classes
use APP\Lib\Helper;

// Language Controller
class LanguageController extends AbstractController {
  // Use Helper
  use Helper;

  // Default Action Method
  public function defaultAction() {
    // Check Language Session
    $_SESSION['App_Language'] == 'ar' ? $_SESSION['App_Language'] = 'en' : $_SESSION['App_Language'] = 'ar';
    // Redirect To Previous Page
    $this->redirect($_SERVER['HTTP_REFERER']);
  }
}
