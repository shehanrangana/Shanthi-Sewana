<?php
require_once("../../Model/Database.php");
require_once("../../Model/Admin.php");

function getEmployee()
{
    $emp = new Admin();
    return $emp->getAllEmployee();
}

function getEmployeeDetails($id)
{
    $emp = new Admin();
    return $emp->getEmployee($id);
}