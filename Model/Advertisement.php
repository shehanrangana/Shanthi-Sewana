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


 public function AddAdvertisement()
    {
    try{
        $sql = "INSERT INTO advertisement(title, region, j_type, position, skills, telephone,email,address1,address2,city,start_date,end_date,description) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->con->prepare($sql);

        $stmt->bind_param("sssssssssssss",$this->title,$this->region,
            $this->j_type,$this->position,$this->skills,$this->telephone,$this->email,$this->address1
            ,$this->address2,$this->city,$this->start_date,$this->end_date,$this->description);
        
        if($stmt->execute())
        {
            header("Location: create.php?status=created");
            exit();
        }
        else
        {
            header("Location: create.php?status=fail_create");
            return $stmt->error;
            exit();
            }
        }
        catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
        
        
      }

    }

}

?>