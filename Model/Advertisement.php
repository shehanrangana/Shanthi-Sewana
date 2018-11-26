<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/24/2018
 * Time: 11:18 AM
 */

class Advertisement
{
    public $id;
    public $customer;
    public $address1;
    public $address2;
    public $address3;
    public $category;
    public $description;
    public $createDate;
    public $expectDate;
    public $amount;
    public $offer;  // 0 if an offer    1 if an advertisement
    public $price;
    public $con;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function viewAdvertisement()
    {
        $sql = "SELECT * 
        FROM advertisement;";
        $stmt = $this->con->prepare($sql);
        if($stmt->execute())
        {
            $stmt->store_result();
            if($stmt->num_rows>0)
            {
                return $stmt;
            }
            else
            {
                return null;
            }

        }
        else
        {
            return null;
        }

    }
}