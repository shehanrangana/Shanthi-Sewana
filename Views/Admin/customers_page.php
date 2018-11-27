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

            <!-- Here the page contents -->
            <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Customers</li>
            </ol>

            <!-- Customers table -->
            <input id="myInput" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <br>
            <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Address Line 1</th>
                <th scope="col">Address Line 2</th>
                <th scope="col">Address Line 3</th>
                <th scope="col">NIC</th>
                <th scope="col">Contact No</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
            <?php
                require_once("../../Controller/AdminController.php");
                // output data of each row
                // customer_id,first_name,last_name,address_line_1,address_line_2,address_line_3,nic,contact_no,email from customer;
                if($row=getAllCustomer()) {
                    $row->bind_result($customer_id, $first_name, $last_name, $address_line_1, $address_line_2, $address_line_3, $nic, $contact_no);
                    while($row->fetch()){
                    echo    "<tr>
                            <td scope='row'>". $first_name." ".$last_name."</td>
                            <td>".$address_line_1."</td>
                            <td> ".$address_line_2."</td>
                            <td> ".$address_line_3."</td>
                            <td> ".$nic."</td>
                            <td> ".$contact_no."</td>
                            <td>
                                <a href='customer_timeline.php?id=$customer_id' class='btn btn-sm btn-light'>Timeline</a>
                            </td>
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