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

    <title>RAIS | Farmer</title>
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
                        <div class="section profile-element-c bg-warning">
                            <div class="dropdown profile-element text-center">
                                <a>
                                    <img src="/rais/images/sunflower.jpg" class="img-circle" alt="photo">
                                    <div class="section">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="logo-element text-center text-light mt-4">RAIS | Farmer</div>
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
                                    <a href="/rais/farmers/farmer.php"><span>Dashboard </span><i
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
                                <a href="products.php"><i class="fa fa-users"></i><span>Equipments</span></a>
                            </div>
                            <div class="mainmenu">
                                <a href="/rais/farmers/shipping.php"><i
                                        class="fa fa-truck"></i><span>Shipping</span></a>
                                <div class="submenu">

                                </div>
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
                    <div class="row row-middle mt-4">
                        <div class="col-md-8 col-lg-12 col-sm-12" id="col2">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <!--for add buttons--->
                                            <div class="mt-2">
                                                <h5>Equipment List</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="section">
                                                <div class="row">
                                                    <!--for label--->
                                                    <div class="col-lg-8">
                                                        <div class="pull-right">
                                                            <label for="category" class="mt-2 control-label">Category:
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="content">
                                                            <form class="form-inline">
                                                                <div class="form-group">
                                                                    <select class="form-control input-md"
                                                                        id="select_category">
                                                                        <option value="0">ALL</option>
                                                                        <?php
                                                                            $conn = $pdo->open();

                                                                            $stmt = $conn->prepare("SELECT * FROM category");
                                                                            $stmt->execute();

                                                                            foreach($stmt as $crow){
                                                                              $selected = ($crow['category_id'] == $catid) ? 'selected' : ''; 
                                                                              echo "
                                                                                <option value='".$crow['category_id']."' ".$selected.">".$crow['name']."</option>
                                                                              ";
                                                                            }

                                                                            $pdo->close();
                                                                          ?>
                                                                    </select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive product-table">
                                        <table id="example" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th>image</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Rental cost</th>
                                                    <th>Import Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                                                $conn = $pdo->open();

                                                                                try{
                                                                                $now = date('Y-m-d');
                                                                                $stmt = $conn->prepare("SELECT * FROM products $where");
                                                                                $stmt->execute();
                                                                                foreach($stmt as $row){
                                                                                    $image = (!empty($row['photo'])) ? '../product_images/'.$row['photo'] : '../product_images/noimage.jpg';
                                                                                    // $counter = ($row['date_view'] == $now) ? $row['counter'] : 0;
                                                                                    echo "
                                                                                    <tr>
                                                                                    <td>
                                                                                    <img src='".$image."' height='160px' width='160px' border-radius='10px'>
                                                                                    </td>
                                                                                        <td>".$row['name']."</td>
                                                                                        <td><div class='h6' style='font-size:12px;height:auto'>".$row['p_info']."</div></td>
                                                                                        <td>".number_format($row['price'], 2)."<strong>Tsh</strong></td>
                                                                                        <td>".date('M d, Y', strtotime($row['created_on']))."</td>
                                                                                        <td>
                                                                                        <button class='btn btn-outline-success btn-sm edit btn-flat' data-product_id='".$row['product_id']."'><i class='fa fa-edit'></i> Request</button>
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
                                                <tr>
                                                    <th>image</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Import Date</th>
                                                    <th>Action</th>
                                                </tr>
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
    </div>
    <!--Script main here-->
    <script src="/rais/settings/main.js"></script>

    <script>

    $('#select_category').change(function() {
        var val = $(this).val();
        if (val == 0) {
            window.location = 'products.php';
        } else {
            window.location = 'products.php?category=' + val;
        }
    });

    function getRow(product_id) {
        $.ajax({
            type: 'POST',
            url: 'products_row.php',
            data: {
                product_id: product_id
            },
            dataType: 'json',
            success: function(response) {
                $('#editor2').html(response.p_info);
                $('#info-product').html(response.p_info);
                $('.name').html(response.prodname);
                $('.prodid').val(response.product_id);
                $('#edit_name').val(response.name);
                $('#catselected').val(response.category_id).html(response.catname);
                $('#edit_price').val(response.price);
                CKEDITOR.instances["editor2"].setData(response.p_info);
                getCategory();
            }
        });
    }

    function getCategory() {
        $.ajax({
            type: 'POST',
            url: 'category_fetch.php',
            dataType: 'json',
            success: function(response) {
                $('#category').append(response);
                $('#edit_category').append(response);
            }
        });
    }
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