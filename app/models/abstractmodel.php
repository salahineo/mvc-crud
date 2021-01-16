<?php

// Models Namespace
namespace APP\Models;

// Use Required Classes
use App\Lib\Connection;
use App\Lib\Helper;
use PDO;
use PDOStatement;

// Abstract Model
class AbstractModel {

  // Use Required Traits
  use Helper;

  // Data Type Constants
  const DATA_TYPE_STR = PDO::PARAM_STR;
  const DATA_TYPE_INT = PDO::PARAM_INT;
  const DATA_TYPE_DECIMAL = 4;


  // Get All Records Method
  public static function getAll() {
    // Select All Records From Table In DESC Order
    $query = 'SELECT * FROM ' . static::$tableName . ' ORDER BY ' . static::$primaryKey . ' DESC';
    // Prepare Query
    $stmt = Connection::connect()->prepare($query);
    // If Statement Executed, Then Fetch All Data, Else Return False
    return $stmt->execute() === true ? $stmt->fetchAll() : false;
  }

  // Get Record By Primary Key Method
  public static function getRecord($primaryKey) {
    // Select All Records From Table
    $query = 'SELECT * FROM ' . static::$tableName . ' WHERE ' . static::$primaryKey . ' = ' . $primaryKey;
    // Prepare Query
    $stmt = Connection::connect()->prepare($query);
    // If Statement Executed, Then Fetch All Data, Else Return False
    return $stmt->execute() === true ? $stmt->fetch() : false;
  }

  // Delete Row Data From Table Method
  public static function delete($primaryKey) {
    // Delete Query With Named Parameters On The Primary Key (ID) Record
    $query = 'DELETE FROM ' . static::$tableName . ' WHERE ' . static::$primaryKey . ' = ' . $primaryKey;
    // Prepare Query
    $stmt = Connection::connect()->prepare($query);
    // Execute Statement
    return $stmt->execute();
  }

  // Create New Row Data To Table Method
  public function create() {
    // Insert Query With Named Parameters
    $query = 'INSERT INTO ' . static::$tableName . ' SET ' . self::buildNamedParameter();
    // Prepare Query
    $stmt = Connection::connect()->prepare($query);
    // Prepare Values
    $this->prepareValues($stmt);
    // Execute Statement
    return $stmt->execute();
  }

  // Update Row Data From Table Method
  public function update($primaryKey) {
    // Update Query With Named Parameters On The Primary Key (ID) Record
    $query = 'UPDATE ' . static::$tableName . ' SET ' . self::buildNamedParameter() . ' WHERE ' . static::$primaryKey . ' = ' . $primaryKey;
    // Prepare Query
    $stmt = Connection::connect()->prepare($query);
    // Prepare Values
    $this->prepareValues($stmt);
    // Execute Statement
    return $stmt->execute();
  }

  // Build Named Parameters Method
  public static function buildNamedParameter() {
    // Initial Value For Named Parameters
    $namedParameters = '';
    // Loop To Table Schema To Get Column Names
    foreach(static::$tableSchema as $columnName => $type) {
      // Complete Insert Query With Column Names
      $namedParameters .= $columnName . ' = :' . $columnName . ', ';
    }
    // Return Named Parameters
    return trim($namedParameters, ', ');
  }

  // Binding Parameters Method
  private function prepareValues(PDOStatement &$stmt) {
    // Binding Parameters
    foreach(static::$tableSchema as $columnName => $type) {
      // Check Decimal Data Type
      if($type == 4) {
        // Filter Decimal Value
        $sanitizedValue = filter_var($this->$columnName, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        // Binding Parameter
        $stmt->bindValue(":{$columnName}", $sanitizedValue);
      } else {
        // Binding Parameter
        $stmt->bindValue(":{$columnName}", $this->$columnName, $type);
      }
    }
  }
}
