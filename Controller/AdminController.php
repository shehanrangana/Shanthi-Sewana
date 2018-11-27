<?php
require_once("../../Model/Database.php");
require_once("../../Model/Admin.php");

function getEmployee($id)
{
    $emp = new Admin();
    return $emp->getEmployee($id);
}

function getAllEmployee()
{
    $emp = new Admin();
    return $emp->getAllEmployee();
}

function getCustomer($id)
{
    $emp = new Admin();
    return $emp->getCustomer($id);
}

function getAllCustomer()
{
    $emp = new Admin();
    return $emp->getAllCustomer();
}