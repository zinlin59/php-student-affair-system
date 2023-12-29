<?php
require_once "signUp/Controller/login_controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <script type="text/javascript" src="registerFormDesign/js/nrc.js"></script>
    <!-- Title Page-->
    <title>Register Forms </title>

    <!-- Icons font CSS-->
    <link href="signUp/registerFormDesign/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="signUp/registerFormDesign/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="signUp/registerFormDesign/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="signUp/registerFormDesign/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="signUp/registerFormDesign/css/main.css" rel="stylesheet" media="all">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Login Form</h2>
                    <form method="POST">
                        <?php
                        if (count($errors) == 1) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        } elseif (count($errors) > 1) {
                        ?>
                            <div class="alert alert-danger">
                                <?php
                                foreach ($errors as $showerror) {
                                ?>
                                    <li><?php echo $showerror; ?></li>
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>


                        <!--Student INfo-->
                        <div class="input-group">

                            <div class="input-group">
                                <input class="input--style-4" type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
                            </div>
                            <div class="input-group">
                                <input class="input--style-4" type="password" name="password" placeholder="Password" value="<?php echo $nrc ?>">
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="p-t-15">
                                        <button class="btn btn-primary btn-lg" type="submit" name="login">Login</button></a>
                                    </div>
                                </div>

                                <div class="col-9 p-4">
                                    <label>Not yet a member? <a href="sign_up.php">Signup now</a> </label>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>