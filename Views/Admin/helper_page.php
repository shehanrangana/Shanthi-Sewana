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
    <link href="../../css/Admin_css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../css/Admin_css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/Admin_css/sb-admin.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation bar -->
    <?php include 'navbar.php' ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>

        <div id="content-wrapper">

            <!-- Here the page contents -->
            <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Helpers</li>
            </ol>

          <!-- Employee cards -->
          <!-- <div class="container mb-5 mt-5">
            <div class="pricing card-deck flex-column flex-md-row mb-3">

              <div class="card card-pricing shadow text-center px-3 mb-4">
                  <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Category 1</span>
                  <img src="../../img/admin_view_img/employee.png" alt="profile_pic" class="img-thumbnail">
                  <div class="bg-transparent card-header pt-4 border-0">
                      <h5 class="h5 font-weight-normal text-primary text-center mb-0" data-pricing-value="15"><span class="price">T.W.Karunathilake</span></h5>
                  </div> -->

                  <!-- Include rating component -->
                  <?php //include 'ratings.php' ?>

                  <!-- <div class="card-body pt-0">
                      <ul class="list-unstyled mb-4">
                          <li>AGE : </li>
                          <li>CONTACT : </li>
                      </ul>
                      <a href="employee_details.php" class="btn btn-primary mb-3">View Profile</a>
                  </div>
              </div> -->

              <!-- <div class="card card-pricing shadow text-center px-3 mb-4">
                  <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Category 2</span>
                  <img src="../../img/admin_view_img/employee.png" alt="profile_pic" class="img-thumbnail">
                  <div class="bg-transparent card-header pt-4 border-0">
                      <h5 class="h5 font-weight-normal text-primary text-center mb-0" data-pricing-value="15"><span class="price">S.A.Perera</span></h5>
                  </div> -->

                  <!-- Include rating component -->
                  <!-- <?php //include 'ratings.php' ?> -->

                  <!-- <div class="card-body pt-0">
                      <ul class="list-unstyled mb-4">
                          <li>AGE : </li>
                          <li>CONTACT : </li>
                      </ul>
                      <a href="employee_details.php" class="btn btn-primary mb-3">View Profile</a>
                  </div>
              </div>

              <div class="card card-pricing shadow text-center px-3 mb-4">
                  <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Category 3</span>
                  <img src="../../img/admin_view_img/employee.png" alt="profile_pic" class="img-thumbnail">
                  <div class="bg-transparent card-header pt-4 border-0">
                      <h5 class="h5 font-weight-normal text-primary text-center mb-0" data-pricing-value="15"><span class="price">G.A.Rathnayake</span></h5>
                  </div> -->

                  <!-- Include rating component -->
                  <!-- <?php //include 'ratings.php' ?>

                  <div class="card-body pt-0">
                      <ul class="list-unstyled mb-4">
                          <li>AGE : </li>
                          <li>CONTACT : </li>
                      </ul>
                      <a href="employee_details.php" class="btn btn-primary mb-3">View Profile</a>
                  </div>
              </div> -->

              <!-- <div class="card card-pricing shadow text-center px-3 mb-4">
                  <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Category 4</span>
                  <img src="../../img/admin_view_img/employee.png" alt="profile_pic" class="img-thumbnail">
                  <div class="bg-transparent card-header pt-4 border-0">
                      <h5 class="h5 font-weight-normal text-primary text-center mb-0" data-pricing-value="15"><span class="price">N.A.Samarasinghe</span></h5>
                  </div> -->

                  <!-- Include rating component -->
                  <!-- <?php //include 'ratings.php' ?>

                  <div class="card-body pt-0">
                      <ul class="list-unstyled mb-4">
                          <li>AGE : </li>
                          <li>CONTACT : </li>
                      </ul>
                      <a href="employee_details.php" class="btn btn-primary mb-3">View Profile</a>
                  </div>
              </div>

            </div>
          </div> -->

            <!-- Employee table -->
            <input id="myInput" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <br>
            <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">Employee ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">NIC</th>
                <th scope="col">Contact No</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="myTable">
            <?php
                require_once("../../Controller/AdminController.php");
                // output data of each row
                if($row=getEmployee()) {
                    $row->bind_result($emp_id, $first_name, $last_name, $address_line_1, $address_line_2, $address_line_3, $gender, $birthday, $nic, $contact_no, $rate, $type, $description, $email);
                    while($row->fetch()){
                    echo    "<tr>
                            <td scope='row'>".$emp_id."</td>
                            <td>" . $first_name." ".$last_name."</td>
                            <td> ".$gender."</td>
                            <td> ".$nic."</td>
                            <td> ".$contact_no."</td>
                            <td> ".$email."</td>
                            <td><button type='button' class='btn btn-outline-info btn-sm'>View Profile</button></td>
                            </tr>";
                    }
                }
                
            ?>
            </tbody>
            </table>

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
/* .card-pricing.popular {
    z-index: 1;
    border: 3px solid #007bff;
} 
.card-pricing .list-unstyled li {
    padding: .5rem 0; 
    color: #6c757d;
    text-align: left;
} */

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