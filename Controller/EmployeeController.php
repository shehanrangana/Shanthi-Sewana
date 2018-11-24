<?php
require_once("../../Model/Database.php");
require_once("../../Model/Employee.php");


function UpdateEmployee()
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $emp = new Employee();
        $emp->nic = $_POST["nic"];
        $emp->fname = $_POST["fname"];
        $emp->lname = $_POST["lname"];
        $emp->email = $_SESSION["email"];
        $emp->mobile = $_POST["mobile"];
        $emp->address1 = $_POST["address"];
        $emp->address2 = $_POST["city"];
        $emp->address3 = $_POST["district"];
        $emp->gender = $_POST["gender"];
        $emp->rate = $_POST["rate"];
        $emp->type = $_POST["type"];
        $emp->description = $_POST["description"];
        $result = $emp->UpdateEmployee($_SESSION["id"]);
        if($result)
        {
            return true;
        }
        else
        {
            return $result;
        }

    }
}

function getEmployee($id)
{
    $emp = new Employee();
    return $emp->getEmployee($id);
}
