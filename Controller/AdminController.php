<?php
require_once("../../Model/Database.php");
require_once("../../Model/Employee.php");

function getEmployee()
{
    $emp = new Employee();
    return $emp->getAllEmployee();
}
