<?php

require_once("../../Model/Database.php");
require_once("../../Model/Advertisement.php");


function getAdvertisement($ad_no)
{
    $advertisement = new Advertisement r();
    return $order->getAdvertisement($ad_no);
}