<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shanthi Sewana</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

    <!-- Custom fonts for this template-->
    <link href="../../css/Admin/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../css/Admin/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/Admin/sb-admin.css" rel="stylesheet">
<body>
    <!-- Navigation bar -->
    <?php include 'navbar.php' ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>

        <div id="content-wrapper">
            <!-- Get selected customer's details -->
            <?php 
                require_once("../../Controller/AdminController.php");
                // select customer_id,first_name,last_name,address_line_1,address_line_2,address_line_3,nic,contact_no from customer
                if($result=getCustomer($_GET['id'])) {
                $result->bind_result($customer_id, $first_name, $last_name, $address_line_1, $address_line_2, $address_line_3, $nic, $contact_no);
                while($result->fetch()){}
                }
            ?>

            <!-- Here the page contents -->
            <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="customers_page.php">Customer</a>
                </li>
                <li class="breadcrumb-item active">
                    <?php echo $customer_id ?>
                </li>
            </ol>

            <!-- Customers timeline -->
            <div class="container mt-5 mb-5">
	            <div class="row">
		            <div class="col-md-12 offset-md-3">
			            <h4>TIMELINE OF >> <?php echo $first_name.' '.$last_name ?></h4>
			            <ul class="timeline">
				            <li>
				            	<a target="_blank" href="#">Employee Name</a>
				            	<a href="#" class="float-right">21 March, 2014</a>
                                <br><br>
				            	<h6>Duration : </h6>
                                <h6>Charge : </h6>
				            </li>
				            <li>
				            	<a target="_blank" href="#">Employee Name</a>
				            	<a href="#" class="float-right">02 Juny, 2010</a>
                                <br><br>
				            	<h6>Duration : </h6>
                                <h6>Charge : </h6>
				            </li>
                            <li>
				            	<a target="_blank" href="#">Employee Name</a>
				            	<a href="#" class="float-right">11 May, 2018</a>
                                <br><br>
				            	<h6>Duration : </h6>
                                <h6>Charge : </h6>
				            </li>
	        		    </ul>
	            	</div>
	            </div>
            </div>
            
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php include 'footer.php' ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="../../js/Admin/jquery/jquery.min.js"></script>
    <script src="../../js/Admin/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../js/Admin/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/Admin/sb-admin.min.js"></script>
</body>
</html>

<style>

/* Table styles */
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

/* Search bar styles */

</style>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style>
ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
.col-md-12 {
    margin-left: 0!important;
}
</style>