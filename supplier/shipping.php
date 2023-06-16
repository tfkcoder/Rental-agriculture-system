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


    <script src="/datatable/js/jquery.dataTables.js"></script>
    <script src="/datatable/js/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="/DataTables/DataTables-1.13.4/css/">
    <link rel="stylesheet" href="/DataTables/datatables.css">
    <script src="/DataTables/datatables.min.js"></script>

    <script src="/rais/settings/DataTables/datatables.min.js"></script>
    <link rel="stylesheet" href="/rais/settings/DataTables/datatables.min.css">

    <title>RAIS | Supplier</title>
</head>

<body onload="load()">
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
                                <a href="/rais/supplier/shipping.php"><i
                                        class="fa fa-truck"></i><span>Shipping</span></a>
                                <div class="submenu">

                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="supplier.php"><i class="fa fa-book"></i><span>Request</span> </a>

                            </div>
                            <div class="section line-sec">
                                <div class="h1 text-light">
                                    <h1>
                                        <hr>
                                    </h1>
                                </div>
                            </div>
                            <div class="section mt-4">

                                <div class="container text-light">
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
                    </div>
                </div>
                <!--section for dashbord content here-->
                <div class="content">
                    <div class="row mt-4">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-globe "></i>
                                                <i class="fa fa-comments text-primary fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Comment's</p>
                                                <p class="card-title" id='0101'>
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM request");
                                                    $stmt->execute();
                                                    $crow =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow['numrows']."</h3>";
                                                     $pdo->close();
                                                ?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/rais/supplier/shipping.php">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-refresh"></i>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-money-coins text-success"></i>
                                                <i class="fa fa-truck text-success fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Shipped</p>
                                                <p class="card-title" id='0102'>
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM request WHERE types=:types");
                                                    $stmt->execute(['types'=>1]);
                                                    //$stmt->execute();
                                                     $crow =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow['numrows']."</h3>";
                                                     $pdo->close();
                                                    ?>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/rais/supplier/shipping.php">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="fa fa-truck text-dark fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Pending</p>
                                                <p class="card-title" id='0103'>
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM request WHERE types=:types");
                                                    $stmt->execute(['types'=>0]);
                                                    //$stmt->execute();
                                                     $crow =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow['numrows']."</h3>";
                                                     $pdo->close();
                                                    ?>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/rais/supplier/shipping.php">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-refresh"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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

                        <div class="col-lg-8">
                            <div class="section mb-3">
                                <div class="content">
                                    <div class="container-fluid">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="h5">Shipped Request's</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content">
                                                    <table id="example"
                                                        class="table table-bordered table-striped table-hover"
                                                        style="width:100%">
                                                        <thead>
                                                            <th>Equipment</th>
                                                            <th>Quantity</th>
                                                            <th>Day Of Use</th>
                                                            <th>Status</th>
                                                            <th>Shipped</th>
                                                            <th>Action</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                               $conn = $pdo->open();
                                                               try{
                                                                    $stmt = $conn->prepare("SELECT * FROM request WHERE types=:types");
                                
                                                                    //$stmt->execute(['types'=>1]);
                                                                     $stmt->execute(['types'=>1]);
                                                                    
                                                                    foreach($stmt as $row){
                                                                        $status1 = ($row['status1'])? '<div  class="p  rounded-pill w-40 text-center  text-success">Approved </div>' : '<div class="text-center" ><span class="label div text-danger rounded-pill w-40 text-center "> Pending </span> </div>';
                                                                        $types = ($row['types'])? '<div  class="p  rounded-pill w-40 text-center  text-success">Yes </div>' : '<div class="text-center"> <span class="label div text-danger rounded-pill w-40 text-center "> No </span></div> ';

                                                                        echo "
                                                                        <tr>
                                    
                                                                            <td>".$row['equipment']."</td>
                                                                            <td>".$row['quantity']."</td>
                                                                            <td>".$row['days']."</td>
                                                                            <td>".$status1."</td>
                                                                            <td>".$types."</td>
                                                                            <td>
                                                                            <button class='btn  btn-outline-success btn-sm edit btn-flat' title='Edit Record' data-request_id='".$row['request_id']."'><i class='fa fa-edit'></i></button>
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
                                                        <tfoot>
                                                            <th>Equipment</th>
                                                            <th>Quantity</th>
                                                            <th>Day Of Use</th>
                                                            <th>Status</th>
                                                            <th>Shipped</th>
                                                            <th>Action</th>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section ">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="h5 text-dark pull-left">Comments <i
                                                    class="fa fa-comments-o"></i> </div>
                                        </div>
                                        <div class="card-body">

                                            <div class="section">
                                                <div class="container-fluid">
                                                    <form method="POST" action="request_add.php"
                                                        enctype="multipart/form-data">

                                                        <div class="form-floating mb-3">
                                                            <input type="textarea" class="form-control" name="comment"
                                                                id="formId1" placeholder="" required>
                                                            <label for="formId1">comments </label>
                                                        </div>
                                                        <div class=" d-grid gap-2 mb-3 mt-2">
                                                            <button type="submit" name="send"
                                                                class="btn btn-outline-primary">Send </button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section mt-4">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Manage your comments</h5>
                                        </div>
                                        <div class="card-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row row-bottom">
                        <!--Request modals start-->
                        <!-- Delete user modal-->
                        <div class="modal fade" id="delete">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Deleting...</b></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="request_delete.php">
                                            <input type="hidden" class="requestid" name="request_id">
                                            <div class="text-center">
                                                <div class="h5 p text-primary">

                                                </div>
                                                <h3 class="bold equipment"></h3>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                            class="btn btn-default btn-sm btn-outline-warning pull-left"
                                            data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                        <button type="submit" class="btn btn-outline-danger btn-sm" name="delete"><i
                                                class="fa fa-trash"></i>
                                            Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="edit" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                role="document">
                                <div class="modal-content modal-style">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-success" id="modalTitleId">Shipping Approval</h5>
                                    </div>
                                    <div class="modal-body">
                                        <!--form for catching user  data-->
                                        <form class="form-horizontal" method="POST" action="request_edit.php"
                                            enctype="multipart/form-data">
                                            <input type="hidden" class="requestid" name="request_id">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-sm-12 mt-2">
                                                    <label for="status" class="col-sm-12 control-label">Shipping
                                                        Status</label>
                                                    <div class="form-group mt-1">
                                                        <input class="form-check-input" type="radio" name="types" id=""
                                                            value="1" checked autocomplete="off" tabindex="-1" required>
                                                        <label class="form-check-label" for="active">Shipped</label>
                                                        <input class="form-check-input" type="radio" name="types" id=""
                                                            value="0" autocomplete="off" tabindex="-1" required>
                                                        <label class="form-check-label" for="blocked">Waiting
                                                            Shipping</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <!--form end here-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm pull-left "
                                            data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                        <button type="submit" class="btn btn-outline-success btn-sm" name="edit"><i
                                                class="fa fa-check-square-o"></i> Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Request modals ends-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Script main here-->
    <script src="/rais/settings/main.js"></script>

    <script>
    $(function() {

        $(document).on('click', '.add-user', function(e) {
            e.preventDefault();
            $('#add-modal').modal('show');

        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var request_id = $(this).data('request_id');
            getRow(request_id);
        });

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var request_id = $(this).data('request_id');
            getRow(request_id);
        });


    });

    function getRow(request_id) {

        $.ajax({
            type: 'POST',
            url: 'request_row.php',
            data: {
                request_id: request_id
            },
            dataType: 'json',
            success: function(response) {
                $('.requestid').val(response.request_id);
                $('#edit_equipment').val(response.equipment);
                $('#edit_quantity').val(response.quantity);
                $('#edit_days').val(response.days);
                $('.equipment').html(response.equipment);
            }
        });
    }
    </script>
    <!--ALERT SCRIPT-->
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