<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shanthi Sewana</title>

    <!-- Bootstrap core CSS -->
    <link rel="icon" href="img/icons/header-icon.png" type="image/x-icon">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


</head>

<body id="page-top">
<?php session_start();?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="mr-3" src="img/icons/icon-1.png" style="width:50px;height:50px">Shanthi Sewana</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For Employers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Post a job</a>
                        <a class="dropdown-item" href="#">Find a candidate</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-hover py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For helpers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Domestic helper jobs</a>
                        <a class="dropdown-item" href="#">Submit your profile</a>

                    </div>
                </li>
                <li class="nav-item mx-0 mx-lg-1">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-3 mb-1 py-1 px-0 px-lg-3" data-toggle="modal" data-target="#exampleModal">
                        Login
                    </button>


                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="login" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                <div class="form-group">
                        <label for="exampleInputEmail1">User name(Email)</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Don't have an account then <a href="./register.php">Sign in</a></small>

                    <input type="submit" class="btn btn-primary" name="login" value="Login"><button type="reset" class="btn btn-secondary ml-3" data-dismiss="modal">Cancel</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Header -->
<div class="masthead bg-primary text-white text-center" style="height: 500px">
    <div id="home" class="container">
        <!--<img class="container-fluid ml-0 mt-0 mb-0 mr-0" src="/img/home-1.jpg" alt="" style="width:100%">-->


        <div class="home-inner-layer">
            <h1 class="text-uppercase mb-0">About us</h1>
            <hr class="star-light">
            <h3 class="font-weight-light mb-0 mt-5">You must have an account to use this site for job posting, find jobs, make offers to candidate</h3>
        </div>
    </div>


</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-4">

            <div style="width:250px;border-style:ridge;border-radius:7px;margin-top: 7px">
                <h5>Don't have an account then Make an account</h5>
                <button type="button" class="btn btn-primary ml-3 mt-3 mb-1 py-1 px-0 px-lg-3" data-toggle="modal" data-target="#employeeRegister">
                    Register
                </button>
            </div>

            <div class="modal fade" id="employeeRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Register as employer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form name="login" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                            <div class="form-row">

                                        <div class="form-group col-md-8">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="form-group col-md-8">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required pattern=".{7,}" title="7 or more characters">
                                        </div>
                                        <div class="col-md-4"></div>

                                        <div class="form-group col-md-8">
                                            <label for="inputType">Register as...</label>
                                            <select name="type" id="inputType" class="form-control" style="width:100%">
                                                <option>Helper</option>
                                                <option>Employer</option>
                                            </select>
                                        </div>

                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>	<button type="reset" class="btn btn-primary ml-3">Cancel</button>

                                </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-4">
            <div style="width:250px;border-style:ridge;border-radius:7px;margin-top:7px">
                <h5>Have an acoount then Login...</h5>
                <button type="button" class="btn btn-primary ml-3 mt-3 mb-1 py-1 px-0 px-lg-3" data-toggle="modal" data-target="#employeeLogin">
                    Login
                </button>
            </div>
            <div class="modal fade" id="employeeLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form name="login" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                            <div class="form-group">
                                    <label for="exampleInputEmail1">User name(Email)</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <input type="submit" class="btn btn-primary" name="login" value="Login"><button type="reset" class="btn btn-secondary ml-3" data-dismiss="modal">Cancel</button>
                            </>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-1"></div>

    </div>
	</div>

<!-- Bootstrap core JavaScript -->
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="./vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="./js/jqBootstrapValidation.js"></script>
<script src="./js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="./js/freelancer.min.js"></script>

</body>

</html>
<?php

require_once("./Controller/UserController.php");

if(isset($_POST['submit']))
{
    if(strlen(trim($_POST["password"]))<7)
    {
        "<script type='text/javascript'>alert('Password field must be 7 characters or more')</script>";
    }
    else
    {

        if(register())
        {
            echo "<script type='text/javascript'>alert('Successfully registered')</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid details')</script>";
        }
    }

}

if(isset($_POST['login']))
{
    if(strlen(trim($_POST["password"]))<7)
    {
        "<script type='text/javascript'>alert('Password field must be 7 characters or more')</script>";
    }
    else
    {

        if(login()==false)
        {
            echo "<script type='text/javascript'>alert('Invalid credentials')</script>";
        }

    }

}
?>
