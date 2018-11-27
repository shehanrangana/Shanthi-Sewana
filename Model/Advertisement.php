<?php

class Advertisement
{
    private $con;
    public $title;
    public $region;
    public $j_type; 
    public $position;
    public $skills;
    public $telephone;
    public $email;
    public $address1;
    public $address2;
    public $city;
    public $start_date;
    public $end_date;
    public $description;
   

   public function __construct()
    {
        $this->con = (new Database())->getConnection();
    }

//add a new Advertisement

 public function addAdvertisement()
    {
    try{
        $sql = "insert into advertisement(title, region, j_type, position, skills, telephone,email,address1,address2,city,start_date,end_date,description) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->con->prepare($sql);

        $stmt->bind_param("sssssssssssss",$this->title,$this->region,
            $this->j_type,$this->position,$this->skills,$this->telephone,$this->email,$this->address1
            ,$this->address2,$this->city,$this->start_date,$this->end_date,$this->description);
        
        if($stmt->execute())
        {
            return true;
            // header("Location: create.php?status=created");
            // exit();
        }
        else
        {
            return $stmt->error;
            // header("Location: create.php?status=fail_create");
            // return $stmt->error;
            // exit();
        }
      }
    catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
       }

    }


    // public function updateAdvertisement()
    // {
    //     try {
    //        $sql="update advertisement set title=?,region=? ,j_type=?,position=?,skills=?,telephone=?,email=?,address1=?,address2=?,city=?start_date=?,end_date=? description=? ";
    //        $stmt->bind_param("",$this->title,$this->region,
    //         $this->j_type1,$this->position,$this->skills,$this->telephone,$this->email,$this->address1
    //         ,$this->address2,$this->address2,$this->city,$this->start_date,$this->end_date,$emp_id);
    //     if($stmt->execute() &&  
            
    //     } catch {
            
    //     }

    // }


//delete an existing Advertisement

    public function deleteAdvertisement()
    {

        try{
            $sql="DELETE FROM advertisement WHERE emp_id=?";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("s", $empId);
            $stmt->execute();    

        }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
      }

    }



    public function getAdvertisement($empId)
    {

        try {
            $sql = "SELECT * FROM advertisement WHERE emp_id = ?";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("s", $empId);
            $stmt->execute();    
        }
        catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
        if($stmt->execute() && $stmt->affected_rows>0)
        {
            return true;
        }
        else
        {
            return $stmt->error;
        }
   }

}

?>