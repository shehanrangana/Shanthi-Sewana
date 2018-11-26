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
// Include database connection
require_once("../../Model/Database.php");
require_once("../../Model/Advertisement.php");

try {
    // Create sql statment
    $advertisement= new Advertisement();
    $result = $advertisement->get;

} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}

?>

    <div class="container">
        <?php if (isset($_GET['status']) && $_GET['status'] == "deleted") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Deleted</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_delete") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Delete</strong>
        </div>
        <?php endif ?>
        <!-- Table Product -->
        <div class="card border-danger">
            <div class="card-header masthead bg-primary  text-white">
            <strong><i class="fa fa-database"></i> Offers</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left">Search and Find a Job </h5>
                    <a href="create.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <!-- <th>Qty</th> -->
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($result->rowCount() > 0) : ?>
                    <?php foreach ($result as $advertisement) : ?>
                    <tr>
                        <td><?= $advertisement['title'] ?></td>
                        <td><?= $advertisement['region'] ?></td>
                        <td><?= $advertisement['j_type'] ?></td>
                        <!-- <td><?= $product['qty'] ?></td> -->
                        <td>
                            <a href="show.php?id=<?=$advertisement['ad_id']?>" class="btn btn-sm btn-light"><i class="fa fa-th-list"></i></a>
                            <a href="edit.php?id=<?=$advertisement['ad_id']?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-<?= $advertisement['ad_id'] ?>"><i class="fa fa-trash"></i></a>
                            <?php include("inc/modal.php") ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                <?php endif ?>
                </tbody>
            </table>
        </div>
      </div>
      <!-- End Table Product -->
      <br>
    </div><!-- /.container -->
<?php include("inc/footer.php") ?>
</body>
</html>
