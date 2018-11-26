<?php 

require_once("../../Model/Database.php");
require_once("../../Model/Advertisement.php");

function viewAdvertisement(){

	$adv = new Order();
    return $adv->viewAdvertisement();

}

 ?>