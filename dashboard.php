<?php include('include/session1.php'); ?>
<?php include('include/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!--- refresh page after 2 seconds 
    <meta http-equiv="refresh" content="2">
       --->
    <link rel="stylesheet" href="/rais/settings/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/rais/settings/main.css">
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
    <title> RAIS|  supplier <i class="fa fa-user"></i></title>
</head>

<body>
    <!--parts for dashbord start here-->
    <div class="section" id="body-id">
        <div class="row">
            <div class="col-sm-2 side-nav sidebar-collapse " id="col-left">
                <!--begining side bar nav-->
                <div class="sidebar-collapse side-nav">
                    <!-- Begin side nav profile -->
                    <div class="nav-header">
                        <div class="dropdown profile-element text-center">
                            <a> 
                                <img src="/rais/images/chef-3.jpg" class="img-circle" alt="photo">
                                <div class="section">
                                    <div class="h6"><span>Username:</span> </div>
                                </div>
                                <span class="text-muted text-xs block">Admin</span></span>
                            </a>
                        </div>
                        <div class="logo-element text-center">SITE</div>
                    </div>
                    <!-- End side nav profile -->
                    <!--bigning menu-->
                    <div class="sidebar-nav">
                        <ul class="side-nav color-gray">
                            <div class="section profile-top">
                                <li class=" text-center">
                                    <a href="/dalali/dashboard.php"><i
                                            class="fa fa-th-large"> </i><span class="ml-4">Dashboard</span></a>
                                </li>

                                <li class="nav-header">
                                    <div class="h4 text-center">
                                        <span class="pl-4 text-center">Tools</span>
                                    </div>
                                </li>
                            </div>
                            <div class="mainmenu">
                                <a href="javascript:void(0)"><i class="fa fa-archive"></i><span>Products</span></a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="/dalali/admin/add-product.php"><i class="fa fa-upload"></i>
                                                <span>Apload
                                                    Products</span></a></li>
                                        <li><a href="/dalali/admin/manage-product.php"><i class="fa fa fa-edit"></i>
                                                <span>Manage Products</span></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="javascript:void(0)"><i class="fa fa-whatsapp"></i><span>Whatsapp</span></a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="/dalali/admin/add-user.php"><i class="fa fa-whatsapp"></i><span>Catalogue</span></a></li>
                                        <li><a href="/dalali/admin/manage-user.php"><i
                                                    class="fa fa fa-cog"></i><span>Manage
                                                    Catalogue</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="javascript:void(0)"><i class="fa fa-comments"></i><span>Message</span></a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>Whatsapp</span></a></li>
                                        <li><a href="#"><i class="fa fa fa-envelope-o"></i> <span>Emails</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mainmenu">
                                <a href="javascript:void(0)"><i class="fa fa-book"></i> <span>Report</span></a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-eye"></i> <span>View</span></a></li>
                                        <li><a href="#"><i class="fa fa-print"></i> <span>Print Report</span></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="section mt-4">
                                <div class="container">
                                    <a href="javascript:void(0)" class="profile-key">
                                        <i class="fa fa-user"></i>
                                        <span> Profile</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <!--End menu-->
                </div>
            </div>
            <div class="col-sm-10" id="dashboard">
                <!--TOP NAV BEGIN HERE-->
                <div class="row border-bottom">
                    <nav class="navbar navbar-expand-sm navbar-light navbar-static-top bg-secondary" id="nav-bar-top">
                        <div class="container-fluid">
                            <a class="navbar-minimalize minimalize-styl-2 btn " href="#" id="btn-toggle-1"><i
                                    class="fa fa-bars "></i></a>
                            <a href="logout.php" data-method="post" class="log-out btn btn-toggle"><i
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
                    <!--Dashboard row for manage users For normal users-->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-globe "></i>
                                                <i class="fa fa-cart-plus text-secondary fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Products</p>
                                                <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE types=:types");
                                                    $stmt->execute(['types'=>0]);
                                                    //$stmt->execute();
                                                    $crow =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow['numrows']."</h3>";
                                                     $pdo->close();
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                            <div class="card card-stats ">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="fa fa-whatsapp text-success fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">WhatsApp</p>
                                                <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE types=:types");
                                                    $stmt->execute(['types'=>1]);
                                                    //$stmt->execute();
                                                    $crow =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow['numrows']."</h3>";
                                                     $pdo->close();
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="fa fa-comments-o text-primary fa-4x" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                            <div class="numbers">
                                                <p class="card-category">Notification</p>
                                                <?php
                                                    $conn = $pdo->open();
                                                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE types=:types");
                                                    $stmt->execute(['types'=>2]);
                                                    //$stmt->execute();
                                                    $crow =  $stmt->fetch();
                                                     echo "<h3 class='card-title' >".$crow['numrows']."</h3>";
                                                     $pdo->close();
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section">
                        <div class="card mt-4">
                            <div class="card-header">
                                <div class="content">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-text">
                                            <i class="icon fa fa-plus text-dark"></i>
                                        </span>
                                           <button type="button" name="" id="" class="btn btn-outline-secondary add-user">Add Product</button>
                                         
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-middle">
                                    <div class="col-lg-12 mb-4">
                                        <div class="box-body mt-8">
                                            <table id="example" class="table table-bordered table-hover table-responsive"
                                                style="width:100%">
                                                <thead style=" background-color:#fafafa;">
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Uploaded On</th>
                                                    <th>Tools</th>
                                                </thead>
                                                <tbody>
                                            <?php
                                            $conn = $pdo->open();

                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM products");
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                                $image = (!empty($row['photo'])) ? 'product_images/'.$row['photo'] : 'product_images/noimage.jpg';
                                                echo "
                                                  <tr>
                                                  <td style='height:10px;'>
                                                  <img src='".$image."' height='45px' width='45px' border-radius='20px' >
                                                  <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='".$row['product_id']."'><i class='fa fa-edit'></i></a></span>
                                                  </td>
                                                    <td style='height:10px; font-size:13px; font-style:oblique;' >".$row['name']."</td>
                                                    <td style=' font-size:12px; font-style:oblique;' >
                                                      <p style='width: 200px;'>
                                                      ".$row['p_info']."
                                                      </p>
                                                    </td>
                                                    <td>".number_format($row['price'], 2)."<strong>Tsh</strong></td>
                                                    <td>".date('M d, Y', strtotime($row['created_on']))."</td>
                                                    <td>
                                                      <a class='edit ' data-product_id='".$row['product_id']."' title='Edit Product'><i class='fa fa-edit'></i></a>
                                                      <a class='delete text-danger' data-product_id='".$row['product_id']."' title='Delete Product' style=' margin-left: 10px;'><i class='fa fa-trash'></i></a>
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
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Uploaded On</th>
                                                    <th>Tools</th>
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
        <!--USER MODAL ADD DELETE AND UPDATES -->
        <!-- Add-user modal -->
        <div class="modal fade" id="add-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content modal-style">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Add User</h5>

                    </div>

                    <div class="modal-body">
                        <!--form for catching user  data-->
                        <form class="form-horizontal" method="POST" action="user_add.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">First Name <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            @
                                        </span>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="Firstname" name="firstname" autocomplete="off" tabindex="-1"
                                            required>
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">Last Name <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            @
                                        </span>
                                        <input type="text" class="form-control" id="validationCustom02"
                                            placeholder="Last Name" name="lastname" autocomplete="off" tabindex="-1"
                                            required>
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">Phone <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="number" class="form-control" id="validationCustomUsername"
                                            aria-describedby="inputGroupPrepend" placeholder="Phone" name="phone"
                                            autocomplete="off" tabindex="-1" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">Address <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <input type="text" class="form-control" id="validationCustom03"
                                            placeholder="Address" autocomplete="off" name="address" tabindex="-1"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">Email <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            aria-describedby="inputGroupPrepend" placeholder="Email" autocomplete="off"
                                            name="email" tabindex="-1" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">Gender <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <div class="mb-4">
                                            <input class="form-check-input" type="radio" name="gender" id=""
                                                value="Male" required>
                                            <label class="form-check-label" for="active">Male</label>
                                            <input class="form-check-input" type="radio" name="gender" id=""
                                                value="Female" required>
                                            <label class="form-check-label" for="blocked">Female</label>
                                            <input class="form-check-input" type="radio" name="gender" id=""
                                                value="Other" required>
                                            <label class="form-check-label" for="blocked">Other</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">User Level <span
                                            class='text-danger'>*</span></label>
                                    <select class="form-select" name="types" id="validationCustom04" autocomplete="off"
                                        tabindex="-1" required>
                                        <option selected> Select User level </option>
                                        <option value="0">Admin</option>
                                        <option value="1">Blocker</option>
                                        <option value="2">User</option>

                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="status" class="col-sm-3 control-label">User status <span
                                            class='text-danger'>*</span></label>
                                    <select class="form-select" name="status1" id="validationCustom04"
                                        autocomplete="off" tabindex="-1" required>
                                        <option selected>User status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Suspend</option>

                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 mt-2">
                                    <label for="photo"> Select Photo:</label>
                                    <input type="file" class="form-control" id="validationCustom02" name="photo"
                                        autocomplete="off" tabindex="-1">
                                </div>
                                <!----- 
                                        <div class="col-md-6 col-lg-6 col-sm-12 mt-4">
                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="validationCustomUsername"
                                                    aria-describedby="inputGroupPrepend"
                                                    placeholder="Password ! not mandatory"
                                                    name="password"
                                                    autocomplete="off"
                                                    tabindex="-1"
                                                    
                                                >
                                            </div>
                                          
                                        </div>
                                      -->
                            </div>
                            <!--form end here-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-sm " data-bs-dismiss="modal"> <i
                                class="fa fa-times"></i> Close</button>
                        <button type="submit" name="add" class="btn btn-sm btn-outline-success "> <i
                                class="fa fa-check-square-o"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!---EDIT USER MODAL----->
        <div class="modal fade" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
            aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content modal-style">
                    <div class="modal-header">
                        <h5 class="modal-title text-success" id="modalTitleId">Edit User Info</h5>
                    </div>
                    <div class="modal-body">
                        <!--form for catching user  data-->
                        <form class="form-horizontal" method="POST" action="users_edit.php"
                            enctype="multipart/form-data">
                            <input type="hidden" class="userid" name="user_id">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_firstname" class="col-sm-3 control-label">First Name <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            @
                                        </span>
                                        <input type="text" class="form-control" id="edit_firstname" name="firstname"
                                            autocomplete="off" tabindex="-1" required>
                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_lastname" class="col-sm-3 control-label">Last Name <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            @
                                        </span>
                                        <input type="text" class="form-control" id="edit_lastname" name="lastname"
                                            autocomplete="off" tabindex="-1" required>

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_email" class="col-sm-3 control-label">Email <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control" id="edit_email" name="email"
                                            autocomplete="off" tabindex="-1" required>

                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_phone" class="col-sm-3 control-label">Phone <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="text" class="form-control" id="edit_phone" name="phone"
                                            autocomplete="off" tabindex="-1" required>

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_address" class="col-sm-3 control-label">Address <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="edit_address" name="address"
                                            autocomplete="off" tabindex="-1" required></textarea>
                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_password" class="col-sm-3 control-label"> Password <span
                                            class='text-danger'>*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="fa fa-key"></i>
                                        </span>
                                        <input type="password" class="form-control" id="edit_password" name="password"
                                            autocomplete="off" tabindex="-1" required>

                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="edit_password" class="col-sm-3 control-label"> User level <span
                                            class='text-danger'>*</span></label>
                                    <select class="form-select" name="types" id="validationCustom04" autocomplete="off"
                                        tabindex="-1" required>
                                        <option value="0" selected>Admin</option>
                                        <option value="1">Blocker</option>
                                        <option value="2">User</option>

                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                    <label for="status" class="col-sm-3 control-label">Status <span
                                            class='text-danger'>*</span></label>
                                    <div class="form-group mt-1">
                                        <input class="form-check-input" type="radio" name="status1" id="" value="1"
                                            checked autocomplete="off" tabindex="-1" required>
                                        <label class="form-check-label" for="active">Active</label>
                                        <input class="form-check-input" type="radio" name="status1" id="" value="0"
                                            autocomplete="off" tabindex="-1" required>
                                        <label class="form-check-label" for="blocked">Blocked</label>
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

        <!-- Delete user modal-->
        <div class="modal fade" id="delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><b>Deleting...</b></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="users_delete.php">
                            <input type="hidden" class="userid" name="user_id">
                            <div class="text-center">
                                <div class="h5 p text-primary">
                                    <p>Delete User:</p>
                                </div>
                                <h5 class="bold fullname "></h5>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm btn-warning pull-left"
                            data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-danger btn-sm" name="delete"><i class="fa fa-trash"></i>
                            Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Photo -->
        <div class="modal fade" id="edit_photo">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="users_photo.php"
                            enctype="multipart/form-data">
                            <input type="hidden" class="userid" name="user_id">
                            <div class="form-group">
                                <label for="photo" class="col-sm-3 control-label">Photo</label>

                                <div class="col-sm-9">
                                    <input type="file" id="photo" name="photo" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="upload"><i
                                class="fa fa-check-square-o"></i> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Activate  user modal-->
        <div class="modal fade" id="activate">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close " data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><b>Activating...</b></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="users_activate.php">
                            <input type="hidden" class="userid" name="user_id">
                            <div class="text-center">
                                <p>ACTIVATE USER</p>
                                <h2 class="bold fullname"></h2>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm btn-warning pull-left"
                            data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-sm btn-flat" name="activate"><i
                                class="fa fa-check"></i> Activate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





        <!--Script main here-->
        <script src="/dalali/settings/main.js"></script>

        <script>
        $(function() {

            $(document).on('click', '.add-user', function(e) {
                e.preventDefault();
                $('#add-modal').modal('show');

            });

            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                $('#delete').modal('show');
                var user_id = $(this).data('user_id');
                getRow(user_id);
            });

            $(document).on('click', '.edit', function(e) {
                e.preventDefault();
                $('#edit').modal('show');
                var user_id = $(this).data('user_id');
                getRow(user_id);
            });
            $(document).on('click', '.view', function(e) {
                e.preventDefault();
                var user_id = $(this).data('user_id');
                getRow(user_id);
            });

            $(document).on('click', '.photo', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.status', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.activate', function(e) {
                e.preventDefault();
                $('#activate').modal('show');
                var user_id = $(this).data('id');
                getRow(user_id);
            });


        });

        function getRow(user_id) {
            $.ajax({
                type: 'POST',
                url: 'users_row.php',
                data: {
                    user_id: user_id
                },
                dataType: 'json',
                success: function(response) {
                    $('.userid').val(response.user_id);
                    $('#edit_email').val(response.email);
                    $('#edit_password').val(response.password);
                    $('#edit_firstname').val(response.firstname);
                    $('#edit_lastname').val(response.lastname);
                    $('#edit_address').val(response.address);
                    $('#edit_phone').val(response.phone);
                    $('.fullname').html(response.firstname + ' ' + response.lastname);
                    $('.email').html(response.email);
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
 
 var col1 = $("#col-left");
 var col2 = $("#dashboard");

$(document).ready(function(){  
    $("#btn-toggle-1").click(function(){  
        $("#col-left").toggle(600);
        if(col1.is(':visible')){
             col2.removeClass('col-lg-12');
             col2.addClass('col-sm-10');
          }
          else{
             col2.removeClass('col-sm-10');
             col2.addClass('col-lg-12');
             col2.addClass('col-sm-12');
          }      
    });  
}); 

</Script>

<script>jQuery(function ($) {
$(function () { 
    $("[data-toggle='tooltip']").tooltip(); 
});
});
</script>

</html>