<?php

// Libraries Namespace
namespace APP\Lib;

// Language Class
class Language {
  // Dictionary Array
  private $_dictionary;

  // Load Language File Method
  public function load($path) {
    // Check Session Language
    $defaultLanguage = $_SESSION['App_Language'];
    // Explode Path To Array Of Language Dir & Language File
    $path = explode('.', $path);
    // Get File Path Of Current Session Language
    $languageFile = LANGUAGES . DS . $defaultLanguage . DS . $path[0] . DS . $path[1] . '.lang.php';
    // Check If File Exists
    if(file_exists($languageFile)) {
      // Get Language File
      require $languageFile;
      // Check File Array
      if(is_array($_) && !empty($_)) {
        // Loop Through Array Of Words
        foreach($_ as $key => $value) {
          // Save Every Word In Dictionary
          $this->_dictionary[$key] = $value;
        }
      }
    }
  }

  // Get Dictionary Method
  public function getDictionary() {
    // Return Dictionary
    return $this->_dictionary;
  }
}
