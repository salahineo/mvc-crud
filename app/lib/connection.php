<?php

// Database Namespace
namespace APP\Lib;

// Use PDO Namespaces
use PDO;
use PDOException;

// Connection Class
class Connection {
  // Connection Method
  public static function connect() {
    try {
      // Try PDO Connection
      $db = new PDO('mysql:host=' . DATABASE_HOST_NAME . ';dbname=' . DATABASE_DB_NAME, DATABASE_USER_NAME, DATABASE_PASSWORD, DATABASE_OPTIONS);
      // Set Fetch Method To Associative [Globally]
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      // Return Connection Object
      return $db;
    } catch(PDOException $e) {
      // Redirect To Connection Error Page
      header('Location: /notfound/db_error');
      exit();
    }
  }
}
