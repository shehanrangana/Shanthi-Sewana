<?php

require_once("../../Model/Database.php");
require_once("../../Model/Advertisement.php");



function updateAdvertisement()
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $advertisement = new Advertisement();
        $advertisement->title = $_POST["title"];
        $advertisement->region = $_POST["region"];
        $advertisement->j_type = $_POST["j_type"];
        $advertisement->position = $_SESSION["position"];
        $advertisement->skills = $_POST["skills"];
        $advertisement->telephone = $_POST["telephone"];
        $advertisement->email = $_POST["email"];
        $advertisement->address1 = $_POST["address1"];
        $advertisement->address2 = $_POST["address2"];
        $advertisement->city = $_POST["city "];
        $advertisement->start_date = $_POST["start_date"];
        $advertisement->end_date = $_POST["dend_date"];
        $advertisement->description= $_POST["description"];
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



function getAdvertisement($id)
{
    $advertisement = new Advertisement();
    return $advertisement->getAdvertisement($id);
}