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
                        <div class="section mt-1">
                            <div class="container-fluid text-light">
                                <span class="text-info">Info:</span>
                                <?php
                                  $conn = $pdo->open();
                                  $stmt = $conn->prepare("SELECT firstname,lastname FROM users WHERE user_id=:user_id");
                                  $stmt->execute(['user_id'=>$_SESSION['admin']]);
                                  $crow =  $stmt->fetch();
                                  $firstnm=$crow['firstname'];
                                  $lastname=$crow['lastname'];
                                  echo "<td class='text-light'>$firstnm  $lastname</td>";
                                  $pdo->close();
                             ?>
                            </div>
                        </div>
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

                    <div class="row row-middle">
                        <!--
                              <div class="col-md-12 col-sm-12 col-lg-12 col-6">
                                <div class="card card-product-info">
                                  <div class="card-header">
                                    <h5 class="card-title">Add Products</h5>
                                    <p class="card-category">Fill the table Below</p>
                                  </div>
                                  <div class="card-body">
                                     <div class="container">
                                      <div class="row">
                                            <div class="form-group">
                                                 <div class="mb-3">
                                                    <label for="" class="form-label">Category</label>
                                                    <select class="form-select form-select-lg" name="" id="">
                                                        <option selected>Select Category</option>
                                                        <option value="Laptop">Laptop</option>
                                                        <option value="Desktop">Desktop</option>
                                                        <option value="Tablets">Tablets</option>
                                                        <option value="Smartphone">SmartPhone</option>
                                                        <option value="Electronics">Electronics</option>
                                                    </select>
                                                 </div>
                                             </div>
                                             <div class="form-group has-success">
                                            
                                                <div class="">
                                                    <input type="number" class="form-control mt-1" name="price" id="success" aria-describedby="helpId" placeholder="Enter Price  Eg. 150000">
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <div class="description1">
                                                <textarea name="description1"  class="mt-2 rounded" id="success" cols="" rows="4" placeholder="Enter product Descriptions " required></textarea>
                                                </div>
                                            </div>
                                             <div class="form-group has-success">
                                                <label for="" class="form-label">Picture</label>
                                                <div class="">
                                                        <input type="file" class="form-control mt-1" name="price" id="success" aria-describedby="helpId" placeholder="Enter Price  Eg. 150000">
                                                    </div>
                                                </div>
                                        
                                           
                                            <div class="form-group d-grid gap-2 mb-3 mt-4">
                                                <button class="btn btn-icon login-button btn-primary" type="submit">
                                                      Submit
                                                  <span class="btn-label btn-label-right"><i class="fa fa-upload "></i></span>
                                                </button>
                                            </div>
                                     </div>       
                                   </div>
                                </div>
                              </div>
                            </div>
                          -->

                    </div>

                </div>
            </div>
        </div>
        <!--Script main here-->
        <script src="/rais/settings/main.js"></script>
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