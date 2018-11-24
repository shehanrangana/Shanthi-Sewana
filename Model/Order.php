<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/24/2018
 * Time: 12:33 PM
 */

class Order
{
    public $id;
    public $employee;
    public $description;
    public $address;
    public $city;
    public $district;
    public $category;
    public $create_date;
    public $expect_date;
    public $amount;
    public $price;
    public $status;   //0- not accepted  1-accepted   2-rejected
    public $con;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function getOrders($empId)
    {
        #status = 0;
        $sql = "select id,description,address,city,district,category,created_date,expect_date,amount,employee,employer,contact,status from order where employee=? and status=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("si", $empId,$status);
        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                return $stmt;
            }
        }
        return null;
    }

    public function updateOrderState($orderId,$state)
    {
        $sql = "update order status=? where id=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss",$orderId,$state);
        if($stmt->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}