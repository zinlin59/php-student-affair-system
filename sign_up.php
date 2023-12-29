<?php
session_start();

require "signUp/Controller/sing_up_controller.php";


?>
<!DOCTYPE html>
<html lang="en">
<style>
    /* The message box is shown when the user clicks on the password field */
    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }
</style>

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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="signUp/registerFormDesign/css/main.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="signUp/registerFormDesign/js/nrc.js"></script>

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Register Form</h2>
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
                                <input class="input--style-4" type="text" name="email" placeholder="Email" value="<?php echo $name ?>">
                            </div>
                            <div class="input-group ">

                                <div class="row row-space">

                                    <div class="col-3">
                                        <div class="">
                                            <select id="stateCode" class="form-select" name="stateCode" value="<?php echo $name ?>">
                                                <option selected disabled>NRC</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">

                                            <select id="townCode" name="townCode" class="form-select" value="<?php echo $name ?>">
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="">
                                            <select id="naing" name="naing" class="form-select">
                                                <option value="N">N</option>
                                                <option value="P">P</option>
                                                <option value="E">E</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input name="nrcNumber" id="nrcNumber" placeholder="123456" class="input--style-4" type="number" style="width: 160px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">

                                <input type="password" id="psw" class="input--style-4" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
                            </div>
                            <div class="input-group">
                                <input class="input--style-4" type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $name ?>">
                            </div>
                            <!-- password validation -->
                            <div id="message">
                                <h3>Password must contain the following:</h3>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div class="p-t-15">

                                        <button class="btn btn-primary" type="submit" name="signUp"> Register</button>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }

    document.getElementById('stateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });
        //console.log(selectedNRC);
        //console.log(selectedNRC[1]);

        //var temp = document.getElementById('townCode');

        //console.log(temp.options.length);

        selectedNRC.sort();

        var township = document.getElementById('townCode');

        while (township.options.length > 0) {
            township.remove(0);
        }

        for (var i = 0; i < selectedNRC.length; i++) {
            var opt = document.createElement('option');
            opt.value = selectedNRC[i];
            opt.innerHTML = selectedNRC[i];
            township.appendChild(opt);
        }
    };

    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>

</html>