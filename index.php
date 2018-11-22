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

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="mr-3" src="img/icons/icon-1.png" style="width:50px;height:50px">Shanthi Sewana</a>
		<button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mx-0 mx-lg-1">
					<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Home</a>
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
<div class="masthead bg-primary text-white text-center" style="height:500px">
	<div id="home" class="container">
	<!--<img class="container-fluid ml-0 mt-0 mb-0 mr-0" src="/img/home-1.jpg" alt="" style="width:100%">-->
	
		
		<div class="home-inner-layer">
		<h1 class="text-uppercase mb-0">Shanthi Sewana</h1>
		<hr class="star-light">
		<h2 class="font-weight-light mb-0">Looking for the best domestic helpers</h2>
		</div>
		</div>

	
</div>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
	<div class="container">
		<hr class="star-dark mb-5">
		<div class="row">
			<div class="col-md-6">
				<div class="job-box">

				</div>
			</div>
		</div>
	</div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
	<div class="container">
		<h2 class="text-center text-uppercase text-white">About</h2>
		<hr class="star-light mb-5">
		<div class="row">
			<div class="col-lg-4 ml-auto">
				<p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
			</div>
			<div class="col-lg-4 mr-auto">
				<p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
			</div>
		</div>
		<div class="text-center mt-4">
			<a class="btn btn-xl btn-outline-light" href="#">
				<i class="fas fa-download mr-2"></i>
				Download Now!
			</a>
		</div>
	</div>
</section>

<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
		<hr class="star-dark mb-5">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<form name="sentMessage" id="contactForm" novalidate="novalidate">
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Name</label>
							<input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Email Address</label>
							<input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Phone Number</label>
							<input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Message</label>
							<textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<br>
					<div id="success"></div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="footer text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Location</h4>
				<p class="lead mb-0">2215 John Daniel Drive
					<br>Clark, MO 65243</p>
			</div>
			<div class="col-md-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Around the Web</h4>
				<ul class="list-inline mb-0">
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-google-plus-g"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-linkedin-in"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
							<i class="fab fa-fw fa-dribbble"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4 class="text-uppercase mb-4">About Freelancer</h4>
				<p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
					<a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
			</div>
		</div>
	</div>
</footer>

<div class="copyright py-4 text-center text-white">
	<div class="container">
		<small>Copyright &copy; Your Website 2018</small>
	</div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
					<hr class="star-dark mb-5">
					<img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
						<i class="fa fa-close"></i>
						Close Project</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
					<hr class="star-dark mb-5">
					<img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
						<i class="fa fa-close"></i>
						Close Project</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
					<hr class="star-dark mb-5">
					<img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
						<i class="fa fa-close"></i>
						Close Project</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
					<hr class="star-dark mb-5">
					<img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
						<i class="fa fa-close"></i>
						Close Project</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
					<hr class="star-dark mb-5">
					<img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
						<i class="fa fa-close"></i>
						Close Project</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
	<div class="portfolio-modal-dialog bg-white">
		<a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
			<i class="fa fa-3x fa-times"></i>
		</a>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
					<hr class="star-dark mb-5">
					<img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
					<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
					<a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
						<i class="fa fa-close"></i>
						Close Project</a>
				</div>
			</div>
		</div>
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