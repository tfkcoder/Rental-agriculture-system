<?php  include('include/session.php'); ?>
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

    <title>RAIS | Login</title>

</head>

<body>

    <div class="section">
        <div class="container">
            <h3 class="text-center h3-txt">RAIS</h3>
            <div class="container cc-hr">
                <hr>
            </div>
            
            <div class="card login-card-cd">
                <div class="card-header card-hed-logn">
                    <div class="h5 text-center">Rental Agriculture Input System [RAIS]</div>
                </div>

                <div class="login-box-body mt-4">
                <div class="section mt-2 mb-2">
                      <?php
                        if(isset($_SESSION['error'])){
                          echo "
                            <div class='h6 text-danger text-center'>
                             <i class='fa fa-warning text-warning' aria-hidden='true'></i>
                            <strong><span>".$_SESSION['error']."</span></strong>
                            </div>
                          ";
                          unset($_SESSION['error']);
                        }
                        if(isset($_SESSION['success'])){
                          echo "
                             <div class='h6 text-center text-success'>
                             <i class='fa fa-check-o text-success' aria-hidden='true'></i>
                             <strong><span>".$_SESSION['success']."</span></strong>
                             </div>
                            
                          ";
                          unset($_SESSION['success']);
                        }
                  ?>
                </div>

                    <form action="verify.php" method="POST">
                        <div class="mb-3 field email ">
                            <div class="input-group has-feedback input-area">
                                <span class="input-group-text">
                                    <i class="icon fa fa-envelope "></i>
                                </span>
                                <input type="email" class="form-control " id="inputEmail" placeholder="Enter email"
                                    name="email" autocomplete="off" tabindex="-1" required>
                            </div>
                        </div>
                        <div class="mb-3 field password ">
                            <div class="input-group has-feedback input-area">
                                <span class="input-group-text">
                                    <i class="icon fa fa-key"></i>
                                </span>
                                <input type="password" class="form-control " id="inputPassword" placeholder="Password"
                                    name="password" autocomplete="off" tabindex="-1" required>

                            </div>
                        </div>
                        <div class="form-group d-grid gap-2 mb-3">
                            <button class="btn btn-outline-secondary login-btn text-light" type="submit" name="login">
                                Login
                                <span class="btn-label btn-label-right"><i class="fa fa-sign-in "></i></span>
                            </button>
                        </div>
                    </form>

                </div>
                <div class="card-footer log-footer">
                    <a href="/rais/register.php" class='text-canter'>
                        Don't have account ?  <span class="ml-2 text-primary"> Signup </span>
                    </a>
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
    <script src="/rais/settings/main.js"></script>
</body>

</html>