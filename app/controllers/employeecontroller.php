<?php

// Controllers Namespace
namespace APP\Controllers;

// Use The Required Classes
use APP\Lib\Helper;
use APP\Lib\InputFilter;
use APP\Models\EmployeeModel;

// Employee Controller Class
class EmployeeController extends AbstractController {

  // Use The Required Traits
  use InputFilter;
  use Helper;

  // Default Action Method
  public function defaultAction() {
    // Change Action Method To Select
    $this->_action = 'select';
    // Trigger Action Method
    $this->selectAction();
  }

  // Select All Employees Action Method
  public function selectAction() {
    // Load Common Template Language File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('employee.select');
    // Trigger Model Query
    $employeeRow = EmployeeModel::getAll();
    // Assign Query Result To Data Array
    $this->_data = ['employeeRow' => $employeeRow];
    // Require The Desired View
    $this->view();
  }

  // Add New Employee Action Method
  public function addAction() {
    // Load Common Template Language File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('employee.add');
    // Check Post Submit
    if(isset($_POST['submit'])) {
      // Get & Filter POST Variables
      $name = $this->filterString($_POST['name']);
      $address = $this->filterString($_POST['address']);
      $age = $this->filterInt($_POST['age']);
      $salary = $this->filterFloat($_POST['salary']);
      // Set Data For New Employee
      $employee = new EmployeeModel($name, $age, $salary, $address);
      // Insert Record
      $employee->create();
      // Redirect To Employees Home
      $this->redirect('/employee');
    }
    // Require The Desired View
    $this->view();
  }

  public function editAction() {
    // Load Common Template Language File
    $this->_language->load('template.common');
    // Load Page Language File
    $this->_language->load('employee.edit');
    // Check Post Submit
    if(isset($_POST['submit'])) {
      // Get & Filter POST Variables
      $name = $this->filterString($_POST['name']);
      $address = $this->filterString($_POST['address']);
      $age = $this->filterInt($_POST['age']);
      $salary = $this->filterFloat($_POST['salary']);
      // Set Data For New Employee
      $employee = new EmployeeModel($name, $age, $salary, $address);
      // Update Record
      $employee->update($this->_parameters[0]);
      // Redirect To Employees Home
      $this->redirect('/employee');
    }
    // Check Parameter Exists
    if($this->_parameters[0] === null) {
      // Redirect To Employees Home
      $this->redirect('/employee');
    }
    // Get Employee ID
    $id = $this->filterInt($this->_parameters[0]);
    // Get Employee Record
    $this->_data['editEmployee'] = EmployeeModel::getRecord($id);
    // Check If ID Value Exists In DB
    if($this->_data['editEmployee'] === false) {
      // Redirect To Employees Home
      $this->redirect('/employee');
    }
    // Require The Desired View
    $this->view();
  }

  // Delete Action
  public function deleteAction() {
    // Check Parameter Exists
    if($this->_parameters[0] === null) {
      $this->redirect('/employee');
    }
    // Get Employee ID
    $id = $this->filterInt($this->_parameters[0]);
    // Check If ID Value Exists In DB
    if(EmployeeModel::getRecord($id) === false) {
      // Redirect To Employees Home
      $this->redirect('/employee');
    }
    // Trigger Delete Method
    EmployeeModel::delete($id);
    // Redirect To Employees Home
    $this->redirect('/employee');
  }
}
