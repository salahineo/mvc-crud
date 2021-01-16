<?php

// Libraries Namespace
namespace APP\Lib;

// Input Filter Trait
trait InputFilter {
  // Filter Integer
  public function filterInt($input) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
  }
  // Filter Float
  public function filterFloat($input) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
  }
  // Filter String
  public function filterString($input) {
    return htmlentities(strip_tags($input), ENT_QUOTES, 'UTF-8');
  }
}
