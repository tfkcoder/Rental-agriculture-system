<?php  include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="/rais/settings/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/rais/settings/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/rais/settings/main.css">
    <link rel="stylesheet" href="/rais/settings/form3.css">
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

    <title>RAIS | Signup</title>

</head>

<body>

    <div class="section">
        <div class="container">
            <h3 class="text-center h3-txt">RAIS</h3>
            <div class="container cc-hr">
                <hr>
            </div>
            <div class="card">
                <div class="card-header card-hed-logn">
                    <p class="login-box-msg text-center mt-2 ">Create account</p>
                </div>
                <div class="login-box-body">
                <div class="section mt-2 mb-2">
                      <?php
                        if(isset($_SESSION['error'])){
                          echo "
                            <div class='h5 text-warning text-center'>
                             <i class='fa fa-warning text-warning' aria-hidden='true'></i>
                            <strong><span>".$_SESSION['error']."</span></strong>
                            </div>
                          ";
                          unset($_SESSION['error']);
                        }
                        if(isset($_SESSION['success'])){
                          echo "
                             <div class='h5 text-success text-center'>
                             <i class='fa fa-check-circle text-success' aria-hidden='true'></i>
                             <strong><span>".$_SESSION['success']."</span></strong>
                             </div>
                            
                          ";
                          unset($_SESSION['success']);
                        }
                  ?>
                </div>

                    <form action="user_reg.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <div class="mb-3">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-text"><i
                                                class="fa fa-user-circle-o text-dark"></i></span>
                                        <input type="text" class="form-control b" id="inputEmail"
                                            placeholder="First Name" name="firstname" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <div class="mb-3">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-text"><i
                                                class="fa fa-user-circle-o text-dark"></i></span>
                                        <input type="text" class="form-control b" id="inputEmail"
                                            placeholder="Last Name" name="lastname" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <div class="mb-3">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-text"><i class="fa fa-phone text-dark"></i></span>
                                        <input type="number" class="form-control b" id="inputEmail" placeholder="Phone"
                                            name="phone" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <div class="mb-3">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-text"><i class="fa fa-envelope text-dark"></i></span>
                                        <input type="email" class="form-control b" id="inputEmail"
                                            placeholder="Enter email" name="email" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 mt-2">
                                <label for="gender" class="col-sm-3 control-label text-center mb-2">Gender <span
                                        class='text-danger'>*</span></label>
                                <div class="input-group">
                                    <div class="mb-4">
                                        <input class="form-check-input" type="radio" name="gender" id="" value="Male"
                                            required>
                                        <label class="form-check-label text-light" for="active">Male</label>
                                        <input class="form-check-input" type="radio" name="gender" id="" value="Female"
                                            required>
                                        <label class="form-check-label text-light" for="blocked">Female</label>
                                        <input class="form-check-input" type="radio" name="gender" id="" value="Other"
                                            required>
                                        <label class="form-check-label text-light" for="blocked">Other</label>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <select class="form-select" name="types" id="validationCustom04" autocomplete="off"
                                    tabindex="-1" required>
                                    <option selected> Select User level</option>
                                    <option value="1">Farmer</option>
                                    <option value="2">Supplier</option>
                                </select>
                            </div>


                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <div class="mb-3">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-text"><i class="fa fa-key text-dark"></i></span>
                                        <input type="password" class="form-control b" placeholder="Password *"
                                            name="password" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
                                <div class="mb-3">
                                    <div class="input-group has-feedback">
                                        <input type="hidden" class="form-control b" name="status1" value="0"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">

                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2">

                            </div>
                        </div>

                        <div class="form-group d-grid gap-2 mb-3">

                            <button type="submit" name="add" class="btn btn-sm btn-outline-secondary text-light "> <i
                                    class="fa fa-user-plus"></i> Register</button>
                        </div>
                    </form>

                    <!--form end here-->
                </div>
                <div class="card-footer log-footer">
                    <a href="/rais/login.php">
                        <h6 class="text-center">LogIn</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="container cc-hr-btm">
            <div class="container text-center mb-2">
                <div class="h6 text-muted">Rais &copy;
                    <script>
                    document.write(new Date().getFullYear());
                    </script>
                    All rights reserved
                </div>
                <div class="h6 text-center text-muted text-dark">Version 1.0</div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>