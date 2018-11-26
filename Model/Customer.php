<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/21/2018
 * Time: 9:19 PM
 */

class Customer
{
    private $con;
    public $fname;
    public $lname;
    public $address1;
    public $address2;
    public $address3;
    public $nic;
    public $mobile;
    public $password;
    public $email;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function AddCustomer()
    {
        $sql = "insert into customer(first_name,last_name,address_line_1,address_line_2,address_line_3
                  ,nic,contact_no,password,email) values(?,?,?,?,?,?,?,?,?);";

        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sssssssss",$this->fname,$this->lname,
            $this->address1,$this->address2,$this->address3,$this->nic,$this->mobile,$this->password
            ,$this->email);
        if($stmt->execute())
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }

    }

    public function UpdateCustomer($id)
    {
        $sql = "update customer set first_name=?,last_name=?,address_line_1=?,address_line_2=?,address_line_3=?,
                nic=?,contact_no=?,password=?,email=? where customer_id=?;";

        $stmt=$this->con->prepare($sql);
        $stmt->bind_param("",$this->fname,$this->lname,
            $this->address1,$this->address2,$this->address3,$this->nic,$this->mobile,$this->password
            ,$this->email,$id);
        if($stmt->execute() && $stmt->affected_rows>0)
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }
    }

    public function removeCustomer($id)
    {
        $sql = "delete from customer where customer_id?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$id);
        if($stmt->execute() && $stmt->affected_rows>0)
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }
    }

    public function getCustomer($id)
    {
        $sql = "select customer_id,first_name,last_name,address_line_1,address_line_2,address_line_3,nic,contact_no,email,password from customer where customer_id=?;";

        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$id);
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

    public function getAllCustomer()
    {
        $sql = "select customer_id,first_name,last_name,address_line_1,address_line_2,address_line_3,nic,contact_no,email from customer;";
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



<<<<<<< HEAD
=======


>>>>>>> 9031f2c146daac51bcd5309172b68bbf27ae6f5d
}