<?php
if(file_exists("../../Model/Database.php"))
{
    require_once("../../Model/Database.php");
    require_once("../../Model/Employee.php");
}

if(file_exists("./Model/Database.php"))
{
    require_once("./Model/Database.php");
    require_once("./Model/Employee.php");

}



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

function uploadPicture()
{
    $emp = new Employee();
    $fileLocation = "../../img/profile/".$_FILES['upload']['name'];
    $a = 0;
    switch($_FILES['upload']['type'])
    {
        case "image/jpeg":$a=1;break;
        case "image/png":$a=1;break;
    }
    if($_FILES["upload"]["error"]==0 && $a==1)
    {
        if(move_uploaded_file($_FILES['upload']['tmp_name'],$fileLocation))
        {
            if($emp->photoUpload($_SESSION['id'],$fileLocation))
            {
                $_SESSION['location'] = $fileLocation;
                return true;
            }
            else
            {
                return false;
            }
        }

    }
    else
    {
        return false;
    }
}

function getAllEmployee()
{
    $emp = new Employee();
    return $emp->getAllEmployee();
}
