<?php

class Admin
{

    private $con;
    public $id = " ";
    public $fname = " ";
    public $lname = " ";
    public $address1 = " ";
    public $address2 = " ";
    public $address3 = " ";
    public $gender = " ";
    public $birthday = " ";
    public $nic = " ";
    public $mobile = " ";
    public $password;
    public $rate = " ";
    public $type = " ";
    public $description = " ";
    public $location = " ";

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function getEmployee($id)
    {
        $sql = "select emp_id,first_name,last_name,address_line_1,address_line_2,address_line_3,gender,nic,contact_no,rate,type,
                description ,propic from employee where emp_id=?;";

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

    public function getAllEmployee()
    {
        $sql = "select emp_id,first_name,last_name,address_line_1,address_line_2,address_line_3,gender,nic,contact_no,rate,type,
                description,propic from employee;";

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