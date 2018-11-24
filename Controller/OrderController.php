<?php

require_once("../../Model/Database.php");
require_once("../../Model/Order.php");


function getOrders($empId)
{
    $order = new Order();
    return $order->getOrders($empId);
}