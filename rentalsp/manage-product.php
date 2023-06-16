<?php include ('include/session.php'); ?>
<?php
  $where = '';
  if(isset($_GET['category'])){
    $catid = $_GET['category'];
    $where = 'WHERE category_id ='.$catid;
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="stylesheet" href="/rais/settings/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/rais/settings/main1.css">
    <link rel="stylesheet" href="/rais/settings/font-awesome/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="/rais/settings/chart.js/Chart.js"></script>
    <script src="/rais/settings/chart.js/Chart.bundle.min.js"></script>
    <script src="/rais/settings/chart.js/loader.js"></script>
    <script src="/rais/settings/bootstrap/js/bootstrap.js"></script>
    <script src="/rais/settings/jquery/jquery-3.6.0.js"></script>
    <script src="/rais/settings/jquery/jquery-3.6.0.min.js"></script>
    <script src="/rais/settings/toastr/toastr.js"></script>
    <!--Data table links for css and javascripts-->

    <script src="/datatable/js/jquery.dataTables.js"></script>
    <script src="/datatable/js/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="/DataTables/DataTables-1.13.4/css/">
    <link rel="stylesheet" href="/DataTables/datatables.css">
    <script src="/DataTables/datatables.min.js"></script>

    <script src="/rais/settings/DataTables/datatables.min.js"></script>
    <link rel="stylesheet" href="/rais/settings/DataTables/datatables.min.css">
    <title>RAIS | Admin </title>
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

                    <div class="content row-middle">
                        <!--column for table display all products-->
                        <div class="section">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <!--for add buttons--->
                                            <div class="mt-2">
                                                <a href="#add-product" data-toggle="modal"
                                                    class="btn btn-info btn-sm btn-flat add-new" id="addproduct"><i
                                                        class="fa fa-plus"></i> Add New </a>
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
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!--colm for table of products--->
                                            <table id="example" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>image</th>
                                                        <th>Product name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Creation Date</th>
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
                                                  <td>".$row['product_id']."</td>
                                                  <td>
                                                  <img src='".$image."' height='40px' width='40px' border-radius='10px' >
                                                  <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='".$row['product_id']."'><i class='fa fa-edit'></i></a></span>
                                                </td>
                                                    <td>".$row['name']."</td>
                                                    <!--<td>".$row['p_info']."</td>-->
                                                    <td> <div class='text-center'><a href='#description' data-toggle='modal' class='btn btn-info btn-sm btn-flat product-info' data-id='".$row['product_id']."'><i class='fa fa-search'></i> View</a> </div> </td>
                                                    <td>".number_format($row['price'], 2)."<strong>Tsh</strong></td>
                                                    <td>".date('M d, Y', strtotime($row['created_on']))."</td>
                                                    <td>
                                                      <button class='btn btn-outline-success btn-sm edit btn-flat' data-product_id='".$row['product_id']."'><i class='fa fa-edit'></i> Edit</button>
                                                      <button class='btn btn-outline-danger btn-sm delete btn-flat' data-product_id='".$row['product_id']."'><i class='fa fa-trash'></i> Delete</button>
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
                                                        <th>#</th>
                                                        <th>image</th>
                                                        <th>Product Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Creation Date</th>
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
        <!---MODAL SECTION FOR PRODUCTS-->
        <div class="section">
            <!-- Add -->
            <div class="modal fade" id="add-product" data-bs-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><b>Add New Product</b></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="products_add.php"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name" class="col-sm-1 control-label">Name</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>

                                    <label for="category" class="col-sm-1 control-label">Category</label>

                                    <div class="col-sm-5">
                                        <select class="form-control" id="category" name="category" required>
                                            <option value="" selected>- Select -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-1 control-label">Price</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="price" name="price" required>
                                    </div>

                                    <label for="photo" class="col-sm-1 control-label">Photo</label>

                                    <div class="col-sm-5">
                                        <input type="file" id="photo" name="photo">
                                    </div>
                                </div>
                                <p><b>Description</b></p>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea id="editor1" name="p_info" rows="3" cols="80" required></textarea>
                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                    class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>
                                Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal for Delete Product--->

            <div class="modal fade" id="delete" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Product:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="products_delete.php">
                                <input type="hidden" class="prodid" name="product_id">
                                <div class="text-center">
                                    <p>DELETE PRODUCT</p>
                                    <h3 class="bold name"></h3>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal"><i
                                    class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-outline-danger" name="delete"><i
                                    class="fa fa-trash"></i>
                                Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Product Modal -->
            <div class="modal fade" id="edit" data-bs-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><b>Edit Product:</b></h4>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="products_edit.php">
                                <input type="hidden" class="prodid" name="id">
                                <div class="form-group">
                                    <label for="edit_name" class="col-sm-1 control-label">Name</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="edit_name" name="name">
                                    </div>

                                    <label for="edit_category" class="col-sm-1 control-label">Category</label>

                                    <div class="col-sm-5">
                                        <!---
                                        <select class="form-control" id="edit_category" name="category">
                                            <option selected id="catselected"></option>
                                        </select>
                                          --->
                                        <select class="form-control" id="edit_category" name="category" required>
                                            <option value="" id="catselected" selected></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edit_price" class="col-sm-1 control-label">Price</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="edit_price" name="price">
                                    </div>
                                </div>
                                <p><b>Description</b></p>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea id="editor2" name="p_info" rows="4" cols="20"></textarea>
                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-warning btn-sm pull-left"
                                data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-outline-success btn-sm" name="edit"><i
                                    class="fa fa-check-square-o"></i> Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product info modal  -->

            <?php

                                  
                                    $conn = $pdo->open();

                                    try{

                                    $stmt = $conn->prepare("SELECT * FROM products $where");
                                    $stmt->execute();
                                    foreach($stmt as $row){
                                    $image = (!empty($row['photo'])) ? 'product_images/'.$row['photo'] : 'product_images/noimage.jpg';
                                    echo 
                                    "
                                           

                                    
                                    ";
                                    }
                                    }
                                    catch(PDOException $e){
                                    echo $e->getMessage();
                                    }

                                    $pdo->close();
                                ?>

            <div class="modal fade" id="product-info" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Product Info:</h5>
                            <button type="button" class="btn-close bg-danger btn-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--Card-for profile of view descriptions-->
                            <div class="section">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-12">
                                        <div class="section">
                                            <div class="content">
                                                <div class="card img-card">
                                                    <?php echo "<img src='".$image."' class='product-image' >" ; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-12">
                                        <div class="section">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="for name"><strong>
                                                            Name:
                                                        </strong> </label>
                                                    <?php echo "<h3>".$row['name']."</h3>"; ?>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="for name"><strong>
                                                            Price:
                                                        </strong> </label>
                                                </div>
                                                <div class="col-lg-12 mt-4">
                                                    <label for="for name"><strong>
                                                            <h5>Descriptions:</h5>
                                                            <p id="info-product"></p>
                                                        </strong> </label>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Script main here-->
        <script src="/rais/settings/main.js"></script>

        <script>
        $(function() {
            $(document).on('click', '.add-new', function(e) {
                e.preventDefault();
                $('#add-product').modal('show');
                var category_id = $(this).data('category_id');
                getRow(id);
            });
            $(document).on('click', '.edit', function(e) {
                e.preventDefault();
                $('#edit').modal('show');
                var product_id = $(this).data('product_id');
                getRow(product_id);
            });


            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                $('#delete').modal('show');
                var product_id = $(this).data('product_id');
                getRow(product_id);
            });

            $(document).on('click', '.photo', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.product-info', function(e) {
                e.preventDefault();
                $('#product-info').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('#select_category').change(function() {
                var val = $(this).val();
                if (val == 0) {
                    window.location = 'manage-product.php';
                } else {
                    window.location = 'manage-product.php?category=' + val;
                }
            });

            $('#addproduct').click(function(e) {
                e.preventDefault();
                getCategory();
            });

            $("#addnew").on("hidden.bs.modal", function() {
                $('.append_items').remove();
            });

            $("#edit").on("hidden.bs.modal", function() {
                $('.append_items').remove();
            });

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
/<script>
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