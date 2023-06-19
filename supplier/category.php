<?php include 'include/session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="/rais/settings/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/rais/settings/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/rais/settings/main1.css">
    <link rel="stylesheet" href="/rais/settings/font-awesome/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/charts/loader.js">
    </script>
    <script src="/rais/settings/chart.js/Chart.js"></script>
    <script src="/rais/settings/chart.js/Chart.bundle.min.js"></script>
    <script src="/rais/settings/chart.js/loader.js"></script>
    <script src="/rais/settings/bootstrap/js/bootstrap.js"></script>
    <script src="/rais/settings/jquery/jquery-3.6.0.js"></script>
    <script src="/rais/settings/jquery/jquery-3.6.0.min.js"></script>
    <script src="/rais/settings/toastr/toastr.js"></script>


    <script src="/rais/datatable/js/jquery.dataTables.js"></script>
    <script src="/rais/datatable/js/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="/rais/DataTables/DataTables-1.13.4/css/">
    <link rel="stylesheet" href="/rais/DataTables/datatables.css">
    <script src="/rais/DataTables/datatables.min.js"></script>

    <script src="/rais/settings/DataTables/datatables.min.js"></script>
    <link rel="stylesheet" href="/rais/settings/DataTables/datatables.min.css">

    <title>RAIS | Admin</title>
</head>

<body>
    <!--parts for dashbord start here-->
    <div class="section" id="body-id">
        <div class="row">
            <div class="col-sm-2 side-nav sidebar-collapse">
                <!--begining side bar nav-->
                <div class="sidebar-collapse side-nav">
                    <!-- Begin side nav profile -->
                    <div class="nav-header">
                        <div class="section profile-element-c bg-primary">
                            <div class="dropdown profile-element text-center">
                                <a>
                                    <img src="/rais/images/sunflower.jpg" class="img-circle" alt="photo">
                                    <div class="section">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="logo-element text-center text-light mt-4">RAIS | Supplier</div>

                    </div>
                    <!-- End side nav profile -->
                    <!--bigning menu-->
                    <div class="sidebar-nav">
                        <ul class="side-nav ">
                            <div class="section line-sec">
                                <div class="h1 text-light">
                                    <h1>
                                        <hr>
                                    </h1>
                                </div>
                            </div>
                            <div class="section profile-top">
                                <li>
                                    <a href="/rais/supplier/supplier.php"><span>Dashboard </span><i
                                            class="fa fa-windows text-light"></i></a>
                                </li>

                                <div class="section line-sec">
                                    <div class="h1 text-light">
                                        <h1>
                                            <hr>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="/rais/supplier/category.php"><i
                                        class="fa fa-list"></i><span>Category</span></a>

                            </div>
                            <div class="mainmenu">
                                <a href="/rais/supplier/manage-product.php"><i
                                        class="fa fa-database"></i><span>Products</span></a>

                            </div>
                            <div class="mainmenu">
                                <a href="/rais/supplier/shipping.php"><i
                                        class="fa fa-truck"></i><span>Delivery</span></a>
                                <div class="submenu">

                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="#"><i class="fa fa-book"></i><span>Request</span> </a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="/rais/supplier/supplier.php"><i class="fa fa-comment"></i><span>
                                                    Approved Request</span></a></li>
                                        <li><a href="/rais/supplier/request.php"><i
                                                    class="fa fa fa-comments"></i><span>All
                                                    Request</span></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="section line-sec">
                                <div class="h1 text-light">
                                    <h1>
                                        <hr>
                                    </h1>
                                </div>
                            </div>
                            <div class="section mt-4">

                                <div class="container">
                                    <a href="#" class="profile-key">
                                        <i class="fa fa-user"></i>
                                        <span> Profile</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <!--End menu-->
                </div>
            </div>
            <div class="col-sm-10">

                <!--TOP NAV BEGIN HERE-->
                <div class="row border-bottom">
                    <nav class="navbar navbar-expand-sm navbar-light navbar-static-top bg-secondary" id="nav-bar-top">
                        <div class="container-fluid">
                            <a class="navbar-minimalize minimalize-styl-2 btn" href="#" id="btn-toggle-1"><i
                                    class="fa fa-bars"></i></a>
                            <a href="../logout.php" data-method="post" class="log-out btn btn-toggle"><i
                                    class='fa fa-power-off'></i> Log out</a>
                        </div>
                    </nav>
                </div>
                <!--section for dashbord -->
                <div class="section mt-4">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6">
                            <div class="h3">Dashboard</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section mt-1">
                                <div class="container-fluid text-dark">
                                    <h4 class="pull-left">Logged in as:&nbsp;<strong style="color: #0066cc;">
                                            <?php
                                  $conn = $pdo->open();
                                  $stmt = $conn->prepare("SELECT firstname,lastname FROM users WHERE user_id=:user_id");
                                  $stmt->execute(['user_id'=>$_SESSION['supplier']]);
                                  $crow =  $stmt->fetch();
                                  $firstnm=$crow['firstname'];
                                  $lastname=$crow['lastname'];
                                  echo "<td class='text-primary'>$firstnm  $lastname</td>";
                                  $pdo->close();
                                ?>
                                        </strong> </h4>

                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <!--section for dashbord content here-->
                <div class="content">
                    <div class="section">
                        <div class="content mt-2">
                            <div class="container mt-4 mb-2">
                                <?php
                            if(isset($_SESSION['error'])){
                            echo "
                                
                                <div class=' alert alert-danger  alert-dismissible mt-3 fade show' role='alert'>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                <strong> <i class='fa fa-warning'></i> </strong><span>".$_SESSION['error']."</span>
                                </div>
                            ";
                            unset($_SESSION['error']);
                            }
                            if(isset($_SESSION['success'])){
                            echo "
                                
                                <div class='alert alert-success  alert-dismissible mt-3 fade show' role='alert'>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                <strong> <i class='fa fa-check-square-o'></i></strong><span>".$_SESSION['success']."</span>
                                </div>
                            ";
                            unset($_SESSION['success']);
                            }
                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="row row-middle">


                        <div class="col-md-8 col-lg-12" id="col2">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5 text-success mt-1">Total Category

                                        <?php
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category");
                        $stmt->execute();
                        $crow =  $stmt->fetch();
                         echo "<span class='card-title' >".$crow['numrows']."</span>";

                         $pdo->close();
                        ?>

                                    </span>

                                </div>
                                <div class="card-body">
                                    <section class="content">
                                        <!--session messages display code--->


                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="box">
                                                    <div class="box-header with-border">
                                                        <a href="#addnew" data-toggle="modal"
                                                            class="btn btn-success btn-sm btn-flat add-new"><i
                                                                class="fa fa-plus"></i> New</a>
                                                    </div>

                                                    <div class="box-body mt-4">
                                                        <table id="example" class="table table-bordered">
                                                            <thead>
                                                                <th>Category Name</th>
                                                                <th>Tools</th>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                   $conn = $pdo->open();
                                   try{
                                        $stmt = $conn->prepare("SELECT * FROM category");
                                        $stmt->execute();
                                        foreach($stmt as $row){
                                            echo "
                                            <tr>
                                                <td>".$row['name']."</td>
                                                <td>
                                                <button class='btn btn-outline-success btn-sm edit btn-flat' title='Edit category' data-id='".$row['category_id']."'><i class='fa fa-edit'></i></button>
                                                <button class='btn btn-outline-danger btn-sm delete btn-flat' title='Delete category' data-id='".$row['category_id']."'><i class='fa fa-trash'></i></button>
                                                </td>
                                            </tr>
                                            ";
                                        }
                                        }
                                        catch(PDOException $e){
                                        echo $e->getMessage();
                                        }

                                        $pdo->close();
                                    ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ModaL add edit and delete for category-->
        <!-- Add category-->
        <div class="modal fade" id="addnew" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="category_add.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-warning btn-sm pull-left"
                            data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-outline-success btn-sm" name="add"><i
                                class="fa fa-save"></i>
                            Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit /update category-->
    <div class="modal fade" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Update Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="category_edit.php">
                        <input type="hidden" class="catid" name="category_id">
                        <div class="form-group">
                            <label for="edit_name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit_name" name="name">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning btn-sm pull-left" data-bs-dismiss="modal"><i
                            class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-outline-success btn-sm" name="edit"><i
                            class="fa fa-check-square-o"></i> Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalTitleId">Delete Category</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="category_delete.php">
                        <input type="hidden" class="catid" name="category_id">
                        <div class="text-center">
                            <h2 class="bold catname"></h2>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning btn-sm pull-left" data-bs-dismiss="modal"><i
                            class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-outline-danger btn-sm" name="delete"><i
                            class="fa fa-trash"></i>
                        Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    <!--Script main here-->
    <script>
    $(function() {
        $(document).on('click', '.add-new', function(e) {
            e.preventDefault();
            $('#addnew').modal('show');

        });

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var category_id = $(this).data('id');
            getRow(category_id);
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var category_id = $(this).data('id');
            getRow(category_id);
        });

    });

    function getRow(category_id) {
        $.ajax({
            type: 'POST',
            url: 'category_row.php',
            data: {
                category_id: category_id
            },
            dataType: 'json',
            success: function(response) {
                $('.catid').val(response.category_id);
                $('#edit_name').val(response.name);
                $('.catname').html(response.name);
            }
        });
    }
    </script>

    <script src="/rais/settings/main.js"></script>
    <script>
    $('.toast').toast(option)

    var alertList = document.querySelectorAll('.alert');
    alertList.forEach(function(alert) {
        new bootstrap.Alert(alert)
    })
    </script>
</body>
<!--Script for 3d charts-->
<script>
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawFunction);

function drawFunction() {
    var data = google.visualization.arrayToDataTable([
        ["Users", "Total"],
        ["Engineers", 30],
        ["Vistors", 300],
        ["Followers", 500],
        ["Admin", 20],
        ["Other", 30]
    ]);
    var options = {
        title: '',
        is3D: true
    };
    var chart = new google.visualization.PieChart(document.getElementById('box'));
    chart.draw(data, options);
}
</script>
<Script>
$(document).ready(function() {
    $('#btn-toggle-1').sideToggle({
        moving: '.side-nav',
        direction: 'left'
    });
});
</Script>

</html>