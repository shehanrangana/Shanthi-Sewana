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
    <link href="../../css/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php
require_once("../../logallow.php");
require_once("../../Controller/EmployeeController.php");
require_once("../../Controller/JobController.php");
require_once("../../Controller/OrderController.php");
$result = getEmployee($_SESSION["id"]);
if($result!=null)
{
    $result->store_result();
    if($result->num_rows>0)
    {
        //echo $_SESSION["id"]." ".$_SESSION["email"]." ".$_SESSION["type"];
        $result->bind_result($id,$fname,$lname,$address1,$address2,$address3,$gender,$nic,$mobile,$rate,$type,$description,$location);
        while($result->fetch())
        {
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
            $_SESSION["location"] = $location;
            //echo $_SESSION["location"]."111";
            //echo $_SESSION["id"];
        }
    }
}


?>
<div class="container">
    <header id="main-header">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-5">
                <!--<img src="../../img/person1.jpg">-->
                <img src="<?php echo $_SESSION['location']?>" width="100%" height="100%">

            </div>

            <div class="col-lg-8 col-md-7">
                <div class="d-flex flex-column">
                    <div class="p-5 bg-black text-white">
                        <div class="name d-flex flex-row justify-content-between align-items-center">
                            <h1 class="display-4">
                                <?php
                                    echo $_SESSION['fname']." ".$_SESSION['lname'];
                                ?>
                            </h1>

                            <div><i class="fa fa-twitter"></i></div>
                            <div><i class="fa fa-facebook"></i></div>
                            <div><i class="fa fa"></i><a href="../../logout.php">Logout</a></div>
                            <div><i class="fa fa-github"></i></div>

                        </div>
                    </div>

                    <div class="p-4 bg-black">
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
            <h2>Previous jobs</h2>
            <p class="lead"></p>
        </div>

        <div class="card card-body py-5">
            <!--<h3>My Skills</h3>
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
            -->
            <?php
            $result = getJobs($_SESSION["id"]);
            //        $sql = "select jobid,description,comment,employee,advertisement from job where employee=?;";
            if($result)
                {
                    $result->bind_result($id,$description,$comment,$employee,$advetisement);
                    $a = 0;
                    while($result->fetch())
                    {
                        $a = 1;
                        echo "
                            <div class='bg-faded' style='border-style: ridge;border-radius: 7px'>
                            <p>$description</p>
                            <p><strong>User feedback</strong><br>$comment</p>
                            </div>
                        ";
                    }
                    if($a==0)
                    {


                        echo "
                            <div class='bg-light' style='border-style: ridge;border-radius: 7px'>
                            <p>
                            <h3 class='text-gray-dark'>Nothing to display</h3>
                            </p>
                            </div>
                        ";
                    }

                }
                else
                {



                        echo "
                            <div class='bg-light'>
                            <p>
                            <h3 class='text-gray-dark'>Nothing to display</h3>
                            </p>
                            </div>
                        ";

                }
                ?>



        </div>
    </div>

    <!-- RESUME -->
    <div id="resume" class="collapse">
        <div class="card card-body bg-success text-white py-5">
            <h2>My Profile</h2>
            <div align="right">
                <h5 align="right" class="mr-3">Upload a profile picture</h5>
            <form name="propic" method="post" enctype="multipart/form-data">
                <input type="hidden" name="" value="300000000">
                <input type="file" name="upload" value="" title="Upload your profile picture">
                <input type="submit" name="upload" value="Upload">
            </form>
            </div>
        </div>

            <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">NIC</label>
                        <input type="text" class="form-control" id="inputAddress2" name="nic" value="<?php echo $_SESSION['nic'];?>" required>
                    </div>
                    <div class="col-md-9"></div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="fname" placeholder="Amal" value="<?php echo $_SESSION['fname'];?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Last Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="lname" placeholder="Karunacena" value="<?php echo $_SESSION['lname'];?>" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" value="<?php echo $_SESSION['email'];?>" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">Mobile No.</label>
                        <input type="text" class="form-control" id="inputAddress2" name="mobile" pattern="[0-9]{10}" value="<?php echo $_SESSION['mobile'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required value="<?php echo $_SESSION['address1'];?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city" required value="<?php echo $_SESSION['address2'];?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">District</label>
                        <select id="inputState" class="form-control" name="district" value="<?php echo $_SESSION['address3'];?>">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputState">Gender</label>
                        <select id="inputState" class="form-control" name="gender" value="<?php echo $_SESSION['gender'];?>">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Rate</label>
                        <input type="text" class="form-control" id="inputZip" name="rate" value="<?php echo $_SESSION['rate'];?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Service  : <strong><?php echo $_SESSION["Type"]; ?></strong></label>
                        <select id="inputState" class="form-control" name="type">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
<div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="inputZip">Description</label>
                        <textarea class="form-control" id="inputZip" name="description" placeholder="Write about you. This will be displayed to your employer's. Your attitude, and other things."><?php echo $_SESSION["description"];?></textarea>

                    </div>
                </div>

                <input type="submit" class="ml-3 btn btn-primary" name="submit" value="Save Changes"><input type="reset" class="ml-3 btn btn-primary" value="Cancel">
            </form>


    </div>

    <!-- WORK -->
    <div id="work" class="collapse">
        <div class="card card-body bg-warning py-5">
            <h3>Orders</h3>
            <p></p>
        </div>

        <div class="card card-body py-5">
            <h3></h3>
            <p></p>
            <div class="row no-gutters">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Expect Date</th>
                        <th scope="col">Category</th>
                        <th scope="col">Address</th>
                        <th scope="col">Employer</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Amount</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        /*$result = getOrders($_SESSION["id"]);
                        if($result!=null)
                            {
                                //$sql = "select id,description,address,city,district,category,created_date,expect_date,amount,employee,employer,contact,status from order where employee=? and status=0;";

                                $result->bind_result($id,$description,$address,$city,$district,$category,$createDate,$expectDate,$amount,$employee,$employer,
                                $contact,$status);
                                while($result->fetch())
                                {
                                    echo "<tr scope='row'><td>$id</td><td>$expectDate</td><td>$category</td><td>$address.','.$city.','.$district</td><td>$employer</td><td>$contact</td><td>$amount</td></tr>"."<button class='btn btn-primary'>Accept</button>"."<button class='btn btn-primary'>Reject</button>";
                                }
                            }*/
                            ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
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
<script src="../../js/dialogbox.js"></script>
<script src="../../js/sweetalert2.js"></script>
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

if(isset($_POST["submit"]))
{
    $result = UpdateEmployee();
    if($result)
    {
        //echo "<script type='text/javascript'>alert('Profile updated successfully');window.location=window.location;</script>";
        echo "<script type='text/javascript'>swal({
  title: 'Profile updated successfully',
  text: '',
  type: 'success',
  confirmButtonText: 'Ok'
})</script>";
    }
    else
    {
        //echo "<script type='text/javascript'>alert('Unsuccess')</script>";
        echo "<script type='text/javascript'>swal({
  title: 'Something went wrong',
  text: '',
  type: 'error',
  confirmButtonText: 'Ok'
})</script>";
    }
}

if(isset($_POST["upload"]))
{
    $result = uploadPicture();
    if($result)
    {
        echo "<script type='text/javascript'>swal({
  title: 'Profile photo uploaded successfully',
  text: '',
  type: 'success',
  confirmButtonText: 'Ok'
})</script>";
    }
    else
    {
        echo "<script type='text/javascript'>swal({
  title: 'Profile photo updated went wrong',
  text: '',
  type: 'error,
  confirmButtonText: 'Ok'
})</script>";
    }
}
?>