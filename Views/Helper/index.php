<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shanthi Sewana</title>

    <!-- Bootstrap core CSS -->
    <link rel="icon" href="../../img/icons/header-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php
require_once("../../Controller/EmployeeController.php");
session_start();
$result = getEmployee($_SESSION["id"]);
if($result!=null)
{
    $result->store_result();
    /*select emp_id,first_name,last_name,address_line_1,address_line_2,address_line_3,gender,nic,contact_no,rate,type,
                    description from employee where emp_id=?;";*/
    if($result->num_rows>0)
    {
        echo $_SESSION["id"]." ".$_SESSION["email"]." ".$_SESSION["type"];
        $result->bind_result($id,$fname,$lname,$address1,$address2,$address3,$gender,$nic,$mobile,$rate,$type,$description);
        while($result->fetch())
        {
            /*$_SESSION = array("id"=>$_SESSION["id"],"email"=>$_SESSION["email"],"type"=>$_SESSION["type"],"fname"=>$fname,"lname"=>$lname,
                "address1"=>$address1,"address2"=>$address2,"address3"=>$address3,"gender"=>$gender,"nic"=>$nic,"mobile"=>$mobile,
                "rate"=>$rate,"Type"=>$type,"description"=>$description);*/
            $_SESSION["fname"] = $fname;
            $_SESSION["lname"] = $lname;
            $_SESSION["address1"] = $address1;
            $_SESSION["address2"] = $address2;
            $_SESSION["address3"] = $address3;
            $_SESSION["gender"] = $gender;
            $_SESSION["nic"] = $nic;
            $_SESSION["mobile"] = $mobile;
            $_SESSION["rate"] = $rate;
            $_SESSION["Type"] = $type;
            $_SESSION["description"] = $description;
            echo $_SESSION["id"];
        }
    }
}


?>
<div class="container">
    <header id="main-header">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
                <img src="../../img/person1.jpg">
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="d-flex flex-column">
                    <div class="p-5 bg-black text-white">
                        <div class="name d-flex flex-row justify-content-between align-items-center">
                            <h1 class="display-4">John Doe</h1>
                            <div><i class="fa fa-twitter"></i></div>
                            <div><i class="fa fa-facebook"></i></div>
                            <div><i class="fa fa-instagram"></i></div>
                            <div><i class="fa fa-github"></i></div>
                        </div>
                    </div>

                    <div class="p-4 bg-black">
                        Experienced Full Stack Web Developer
                    </div>

                    <div>
                        <div class="d-flex flex-row text-white align-items-stretch text-center">
                            <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                                <i class="fa fa-home d-block"></i> Home
                            </div>
                            <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                                <i class="fa fa-graduation-cap d-block"></i> Resume
                            </div>
                            <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                                <i class="fa fa-folder-open d-block"></i> Work
                            </div>
                            <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                                <i class="fa fa-envelope d-block"></i> Contact
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- HOME -->
    <div id="home" class="collapse show">
        <div class="card card-body bg-primary text-white py-5">
            <h2>Welcome to my page</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, quia.</p>
        </div>

        <div class="card card-body py-5">
            <h3>My Skills</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nulla et, modi harum hic deserunt.</p>
            <hr>
            <h4>HTML</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:100%"></div>
            </div>
            <h4>CSS</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:100%"></div>
            </div>
            <h4>JavaScript</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:90%"></div>
            </div>
            <h4>PHP</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:80%"></div>
            </div>
            <h4>Python</h4>
            <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:70%"></div>
            </div>
        </div>
    </div>

    <!-- RESUME -->
    <div id="resume" class="collapse">
        <div class="card card-body bg-success text-white py-5">
            <h2>My Profile</h2>
            <p></p>
        </div>
        <div>
            <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">NIC</label>
                        <input type="text" class="form-control" id="inputAddress2" name="nic" pattern="[0-9]{9}[Xx|Vv]" value="<?php echo $_SESSION['nic'];?>" required>
                    </div>
                    <div class="col-md-9"></div>
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">First Name</label>
                        <input type="email" class="form-control" id="inputEmail4" name="fname" placeholder="Amal" value="<?php echo $_SESSION['fname'];?>" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Last Name</label>
                        <input type="email" class="form-control" id="inputEmail4" name="lname" placeholder="Karunacena" value="<?php echo $_SESSION['lname'];?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" value="<?php echo $_SESSION['email'];?>" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputAddress2">Mobile No.</label>
                        <input type="text" class="form-control" id="inputAddress2" name="mobile" pattern="[0-9]{10}" value="<?php echo $_SESSION['mobile'];?>">
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required value="<?php echo $_SESSION['address1'];?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city" required value="<?php echo $_SESSION['address2'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">District</label>
                        <select id="inputState" class="form-control" name="district" value="<?php echo $_SESSION['address3'];?>">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Gender</label>
                        <select id="inputState" class="form-control" name="gender" value="<?php echo $_SESSION['gender'];?>">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Rate</label>
                        <input type="text" class="form-control" id="inputZip" name="rate" value="<?php echo $_SESSION['rate'];?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Type</label>
                        <input type="text" class="form-control" id="inputZip" name="type">
                    </div>

                    <div class="form-group col-md-7">
                        <label for="inputZip">Discription</label>
                        <textarea class="form-control" id="inputZip" name="discription" placeholder="Write about you. This will be displayed to your employer's. Your attitude, and other things." value="1"></textarea>
                    </div>
                </div>

                <input type="submit" class="ml-3 btn btn-primary" name="submit" value="Save Changes"><input type="reset" class="ml-3 btn btn-primary" value="Cancel">
            </form>
        </div>

    </div>

    <!-- WORK -->
    <div id="work" class="collapse">
        <div class="card card-body bg-warning py-5">
            <h3>My Portfolio</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, adipisci?</p>
        </div>

        <div class="card card-body py-5">
            <h3>What have I built?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, eum.</p>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=251" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=252" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=253" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=254" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=255" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=256" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=257" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=257" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://unsplash.it/1200/768.jpg?image=258" data-toggle="lightbox">
                        <img src="https://unsplash.it/600.jpg?image=258" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT -->
    <div id="contact" class="collapse">
        <div class="card card-body bg-danger text-white py-5">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, dignissimos?</p>
        </div>

        <div class="card card-body py-5">
            <h3>Get in touch</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, autem.</p>
            <form>
                <div class="form-group">
                    <div class="input-group input-group-lg">
              <span class="input-group-addon bg-danger text-white">
                <i class="fa fa-user"></i>
              </span>
                        <input type="text" class="form-control bg-dark text-white" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-lg">
              <span class="input-group-addon bg-danger text-white">
                <i class="fa fa-envelope"></i>
              </span>
                        <input type="email" class="form-control bg-dark text-white" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-lg">
              <span class="input-group-addon bg-danger text-white">
                <i class="fa fa-pencil"></i>
              </span>
                        <textarea rows="5" class="form-control bg-dark text-white" placeholder="Message"></textarea>
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="main-footer" class="p-5 bg-dark text-white">
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-outline-light"><i class="fa fa-cloud"></i> Download Resume</a>
            </div>
        </div>
    </footer>
</div>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
<script>
    $('.port-item').click(function(){
        $('.collapse').collapse('hide');
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
</body>
</html>
<?php
require_once("../../Controller/EmployeeController.php");

if(isset($_POST["submit"]))
{
    $result = UpdateEmployee();
    if($result)
    {
        echo "<script type='text/javascript'>alert('Profile updated successfully')</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert($result)</script>";

    }
}
?>