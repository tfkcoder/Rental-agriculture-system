<?php include('include/session.php'); ?>

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
                                <a href="/rais/rentalsp/manage-product.php"><i class="fa fa-database"></i><span>Products</span></a>
                                
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
                                <a href="/rais/rentalsp/category.php"><i class="fa fa-list"></i><span>Category</span></a>
                                
                            </div>
                            <div class="mainmenu">
                                <a href="request.php"><i class="fa fa-book"></i><span>Request</span> </a>
                               
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
                    <nav class="navbar navbar-expand-sm navbar-light navbar-static-top bg-secondary fixed"
                        id="nav-bar-top">
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
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="fa fa-users text-success fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Reg Users</p>
                                                <p class="card-title reg-user " id="reg-user">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users");
                                                     $stmt->execute();
                                                     $crow1 =  $stmt->fetch();
                                                     echo "<h3 class='card-title ' >".$crow1['numrows']."</h3>";
                                                     $reg_user=$crow1['numrows'];
                                                     $pdo->close();
                                                    ?>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="add-user.php">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-refresh"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-globe "></i>
                                                <i class="fa fa-check-square-o text-success fa-4x"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Active Users</p>
                                                <p class="card-title">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE status1=:status1");
                                                    $stmt->execute(['status1'=>1]);
                                                    //$stmt->execute();
                                                    $crow2 =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow2['numrows']."</h3>";
                                                     $active_user=$crow2['numrows'];
                                                     $pdo->close();
                                                    ?>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="add-user.php">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-refresh"></i>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-money-coins text-success"></i>
                                                <i class="fa fa-close text-danger fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category ">Unactive</p>
                                                <p class="card-title">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE status1=:status1");
                                                    $stmt->execute(['status1'=>0]);
                                                    //$stmt->execute();
                                                    $crow3 =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow3['numrows']."</h3>";
                                                     $un_active_user=$crow3['numrows'];
                                                     $pdo->close();
                                                    ?>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="add-user.php">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-favourite-28 text-primary"></i>
                                                <i class="fa fa-signing text-primary fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Products</p>
                                                <p class="card-title">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM products");
                                                     $stmt->execute();
                                                     $crow4 =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow4['numrows']."</h3>";
                                                     $product=$crow4['numrows'];
                                                     $pdo->close();
                                                    ?>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="card-footer card-foote-style">
                                        <div class="stats text-center">
                                            <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                            Visualize
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-middle">
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="h5">Visualization <i class="fa fa-line-chart"></i> </div>
                                </div>
                                <div class="card-body">
                                    <div id="box2" style=" height: 400px; width:100%;">
                                        <canvas id="box" style=" height: 400px; width:100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-2">
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Script main here-->
    <script src="/rais/settings/main.js"></script>

    <script>
    /*
           ! :Load data from php and display on chart
        */
    var reg_user = <?php echo $reg_user ?>;
    var active_user = <?php echo $active_user ?>;
    var un_active_user = <?php echo $un_active_user ?>;
    var product = <?php echo $product ?>;
    var login = 8;


    new Chart(document.getElementById("box"), {
        type: 'doughnut',
        data: {
            labels: ["Reg Users", "Active", "Un active", "Products",
                "Logins"
            ],
            datasets: [{
                backgroundColor: ["#0f0dff", "#215f00",
                    "#de6262", "#4b6cb7", "#480048"
                ],
                data: [reg_user, active_user, un_active_user, product, login]
            }]
        },
        options: {
            title: {
                display: true,
                is3D: true,
                text: 'Users Visualization'
            }
        }
    });
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

    };
    var chart = new google.visualization.LineChart(document.getElementById('box1'));
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