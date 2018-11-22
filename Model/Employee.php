<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/21/2018
 * Time: 8:39 PM
 */

class Employee
{

    private $con;
    public $fname;
    public $lname;
    public $address1;
    public $address2;
    public $address3;
    public $gender;
    public $birthday;
    public $nic;
    public $mobile;
    public $password;
    public $rate;
    public $type;
    public $description;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function AddEmployee()
    {
        $sql = "insert into employee(first_name,last_name,address_line_1,address_line_2,address_line_3
                  ,gender,birthday,nic,contact_no,rate,password,type,description) values(?,?,?,?,?,?,?,?,?,?,?,?,?);";

        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sssssssssssss",$this->fname,$this->lname,
            $this->address1,$this->address2,$this->address3,$this->gender,$this->birthday,$this->nic,$this->mobile,$this->rate,$this->password
        ,$this->type,$this->description);
        if($stmt->execute())
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }

    }

    public function UpdateEmployee($id)
    {
        $sql = "update employee set first_name=?,last_name=?,address_line_1=?,address_line_2=?,address_line_3=?,gender=?,birthday=?,
                nic=?,contact_no=?,rate=?,type=?,description=? where emp_id=?;";

        $stmt=$this->con->prepare($sql);
        $stmt->bind_param("ssssssssssssss",$this->fname,$this->lname,
            $this->address1,$this->address2,$this->address3,$this->gender,$this->birthday,$this->nic,$this->mobile,$this->rate,$this->password
            ,$this->type,$this->description,$id);
        if($stmt->execute() && $stmt->affected_rows>0)
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }
    }

    public function removeEmployee($id)
    {
        $sql = "delete from employee where id=?;";
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

    public function getEmployee($id)
    {
        $sql = "select emp_id,first_name,last_name,address_line_1,address_line_2,address_line_3,gender,birthday,nic,contact_no,rate,type,
                description from employee where emp_id=?;";

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
        $sql = "select emp_id,first_name,last_name,address_line_1,address_line_2,address_line_3,gender,birthday,nic,contact_no,rate,type,
                description from employee;";

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