<?php

require_once("./Model/Database.php");
require_once("./Model/User.php");
require_once("./Model/Employee.php");

function login()
{
    $user = new User();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user->email = testInput($_POST["email"]);
        $user->password = testInput($_POST["password"]);
        if($user->login()==false)
        {
            return false;
        }

    }
}

function register()
{
    $user = new User();
    $emp = new Employee();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user->email = testInput($_POST["email"]);
        $user->password = testInput($_POST["password"]);
        $user->type = testInput($_POST["type"]);

        if($result1=$user->register())
        {
            $emp->id = $user->getUser($_POST["email"]);
            if($result2=$emp->AddEmployee())
            {
                return true;
            }
            else
            {
                return $result2;
            }
        }
        else
        {
            return $result1;
        }

    }
}
function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //echo $data."123";
    return $data;
}
