<?php include '../../Model/Advertisement.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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

    <!-- styles of the table -->
    <?php include '../../css/Admin/advertismentStyle.php'; ?>
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

          
        </div>
        <!-- Start of the table -->

        <table class="data-table">
				<caption class="title">Sales Data of Electronic Division</caption>
				<thead>
					<tr>
						<th>NO</th>
						<th>Customer Id</th>
						<th>Address Line 1</th>
            			<th>Address Line 2</th>
                        <th>Address Line 3</th>
                        <th>Category</th>
                        <th>Description</th>
						<th>Created date</th>
						<th>Expecting date</th>
					</tr>
				</thead>
				<tbody>
				<?php
				
				while ($row = mysql_fetch_array($query))
				{
					
					echo '<tr>
							<td>'.$row['ad_no'].'</td>
							<td>'.$row['customer_id'].'</td>
							<td>'.$row['address_line_1'].'</td>
                            <td>'.$row['address_line_2'].'</td>
                            <td>'.$row['address_line_3'].'</td>
              				<td>'.$row['category'].'</td>
                            <td>'.$row['description'].'</td>
							<td>'. date('F d, Y', strtotime($row['created_date'])) . '</td>
							<td>'. date('F d, Y', strtotime($row['expecting_date'])) . '</td>
						</tr>';
					
				}?>
				</tbody>
				
			</table>

        <!-- End of the table -->

        
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