<?php

require_once("./Model/Database.php");
require_once("./Model/User.php");

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
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user->email = testInput($_POST["email"]);
        $user->password = testInput($_POST["password"]);
        $user->type = testInput($_POST["type"]);
        if($result=$user->register())
        {
            return true;
        }
        else
        {
            return $result;
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
