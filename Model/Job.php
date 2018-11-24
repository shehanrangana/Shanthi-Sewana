<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/23/2018
 * Time: 11:47 PM
 */

class Job
{
    public $jobid;
    public $description;
    public $comment;
    public $employee;
    public $advertisement;
    public $con;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function getJobs($id)
    {
        $sql = "select jobid,description,comment,employee,advertisement from job where employee=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$id);
        if($stmt->execute())
        {
            $stmt->store_result();
            if($stmt->num_rows>0)
            {
                return $stmt;
            }
        }
        return false;
    }
}