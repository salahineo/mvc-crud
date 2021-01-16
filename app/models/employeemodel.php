<?php

// Models Namespace
namespace APP\Models;

// Employee Class
class EmployeeModel extends AbstractModel {
  // Database Table Info Related To Employees Table With Its Data Type
  protected static $tableName = 'employees';
  protected static $tableSchema = array(
    'name'    => self::DATA_TYPE_STR,
    'address' => self::DATA_TYPE_STR,
    'age'     => self::DATA_TYPE_INT,
    'salary'  => self::DATA_TYPE_DECIMAL,
  );

  // Default Primary Key For WHERE Clause
  protected static $primaryKey = 'id';

  // Class Properties
  protected $name;
  protected $age;
  protected $salary;
  protected $address;

  // Class Constructor
  public function __construct($name, $age, $salary, $address) {
    // Set Values To Properties
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
    $this->address = $address;
  }
}
