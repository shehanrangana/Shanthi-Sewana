<?php

class Admin
{

    private $con;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    // Get selected employee's details
    public function getEmployee($id)
    {
        
        $sql = "select emp_id,first_name,last_name,address_line_1,address_line_2,address_line_3,gender,birthday,nic,contact_no,rate from employee where emp_id=?";

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

    // Get all employees data
    public function getAllEmployee()
    {
        $sql = "select emp_id, first_name, last_name, address_line_1, address_line_2, address_line_3, gender, birthday, nic, contact_no, rate from employee;";

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

    // Get selected customer details
    public function getCustomer($id)
    {
        $sql = "select customer_id,first_name,last_name,address_line_1,address_line_2,address_line_3,nic,contact_no from customer where customer_id=?;";

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

    // Get all customers details
    public function getAllCustomer()
    {
        $sql = "select customer_id,first_name,last_name,address_line_1,address_line_2,address_line_3,nic,contact_no from customer";
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