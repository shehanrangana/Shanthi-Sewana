<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/22/2018
 * Time: 12:36 AM
 */

class User
{
    public $email;
    public $password;
    public $type;
    public $con;

    public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

    public function register()
    {
        $sql = "insert into users(email,password,type) values(?,?,?);";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sss",$this->email,$this->password,$this->type);
        if($stmt->execute())
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }
    }

    public function login()
    {
        $sql = "select id,email,password,type from users where email=? and password=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss",$this->email,$this->password);
        if($stmt->execute())
        {
            $stmt->store_result();

            if($stmt->num_rows>0)//isset($email))
            {
                $stmt->bind_result($id,$email,$password,$type);

                while($stmt->fetch())
                {
                    session_start();
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;
                    $_SESSION["password"] = $password;
                    $_SESSION["type"] = $type;
                    //echo $_SESSION["id"];
                    switch ($type)
                    {
                        case "Admin":echo "<script type='text/javascript'>window.location.href='./Views/Admin'</script>";
                        case "Helper":echo "<script type='text/javascript'>window.location.href='./Views/Helper'</script>";
                        case "Employer":echo "<script type='text/javascript'>window.location.href='http://www.exoticdogs.com'</script>";
                    }

                }
            }
            else
            {
                echo $stmt->error." a".$stmt->num_rows." i";
                return $stmt->error;
            }
        }
        else
        {
            echo "3";
            return $stmt->error;
        }
    }

    public function getUser($email)
    {
        $sql = "select id from users where email=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$email);
        if($stmt->execute())
        {
            $stmt->store_result();
            if($stmt->num_rows>0)
            {
                $stmt->bind_param("s",$id);
                while($stmt->fetch())
                {
                    return $id;
                }
            }
        }
        return false;
    }
}