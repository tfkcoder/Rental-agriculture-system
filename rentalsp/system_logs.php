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

    <title>RAIS | Admin</title>
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
                        <div class="section profile-element-c">
                            <div class="dropdown profile-element text-center">
                                <a>
                                    <img src="/rais/images/sunflower.jpg" class="img-circle" alt="photo">
                                    <div class="section">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="logo-element text-center text-light mt-4">RAIS | Admin</div>
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
                                    <a href="/rais/rentalsp/admin.php"><span>Dashboard </span><i
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
                                <a href="#"><i class="fa fa-users"></i><span>Users</span></a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="/rais/rentalsp/add-user.php"><i class="fa fa-user"></i><span>
                                                    User View</span></a></li>
                                        <li><a href="/rais/rentalsp/manage-user.php"><i
                                                    class="fa fa fa-edit"></i><span>Manage User</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="system_logs.php"><i class="fa fa-trash"></i><span>System Logs</span></a>

                            </div>

                            <div class="section mt-4 line-sec">
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
                                  $stmt->execute(['user_id'=>$_SESSION['admin']]);
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

                        <div class="col-lg-12">
                            <div class="section mb-3">
                                <div class="content">
                                    <div class="container-fluid">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="h5">System Logs</div>
                                                <div class="h5 pull-right">Total Logs:
                                                        <?php
                                                                $conn = $pdo->open();
                                                              
                                                                   $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM system_logs");
                                                                   $stmt->execute();
                                                                   $crow =  $stmt->fetch();
                                                                   echo "<span class='card-title' >".$crow['numrows']."</span>";
                                                                   $pdo->close();
                                                         ?>
                                                     
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content">
                                                    <table id="example"
                                                        class="table table-bordered table-striped table-hover"
                                                        style="width:100%">
                                                        <thead>
                                                            <th>User Id</th>
                                                            <th>Action Performed</th>
                                                            <th>Date</th>
                                                            <th>Email</th>
                                                            <th>Action</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                               $conn = $pdo->open();
                                                               try{
                                                                    $stmt = $conn->prepare("SELECT * FROM system_logs");
                                                                    $stmt->execute();
                                                                     
                                                                    
                                                                    foreach($stmt as $row){
                                                                       
                                                                        echo "
                                                                        <tr>
                                    
                                                                            <td>".$row['user_id']."</td>
                                                                            <td>".$row['action1']."</td>
                                                                            <td>".$row['date']."</td>
                                                                            <td>".$row['email']."</td>
                                                                            <td>
                                                                             
                                                                             <button type='submit' class='btn  btn-outline-danger btn-sm delete btn-flat' title='Delete Record' data-logs_id='".$row['logs_id']."'><i class='fa fa-trash'></i></button>
                                                                            
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
                                                            <th>User Id</th>
                                                            <th>Action Performed</th>
                                                            <th>Date</th>
                                                            <th>Email</th>
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


                    </div>
                    <div class="row row-bottom">
                        <!--Request modals start-->
                        <!-- Delete user modal-->
                        <div class="modal fade" id="delete" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modalTitleId">Delete Logs</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="logs_delete.php">
                                            <input type="hidden" class="logid" name="logs_id">
                                            <div class="text-center">
                                                <h6 class="bold logid2"></h6>
                                                <h6 class="bold logid1"></h6>
                                                <h6 class="bold logname"></h6>
                                                <h6 class="bold logemail"></h6>
                                                <h6 class="bold logdate"></h6>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-warning btn-sm pull-left"
                                            data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                        <button type="submit" class="btn btn-outline-danger btn-sm" name="delete"><i
                                                class="fa fa-trash"></i>
                                            Delete</button>
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


        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var logs_id = $(this).data('logs_id');
            getRow(logs_id);
        });

    });

    function getRow(logs_id) {

        $.ajax({
            type: 'POST',
            url: 'logs_row.php',             
            data: {
                logs_id: logs_id
            },
            dataType: 'json',
            success: function(response) {
                $('.logid').val(response.logs_id);
                $('.logid2').html(response.logs_id);
                $('.logid1').html(response.user_id);
                $('.logname').html(response.action1);
                $('.logemail').html(response.email);
                $('.logdate').html(response.date);
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