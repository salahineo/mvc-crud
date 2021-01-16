<?php

// Libraries Namespace
namespace APP\Lib;

// Helper Trait
trait Helper {

  // Redirect Method
  public function redirect($path) {
    // Close Session
    session_write_close();
    // Redirect To Path
    header('Location: ' . $path);
    // Exit Rest Of Code
    exit();
  }
}
