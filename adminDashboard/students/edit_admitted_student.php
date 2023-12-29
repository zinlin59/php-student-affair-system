<?php

require_once "studentController/admitted_student_controller.php";

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
    <script type="text/javascript" src="nrc.js"></script>
    <!-- Title Page-->
    <title>Update Forms </title>

    <!-- Icons font CSS-->
    <link href="registerFormDesign/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="registerFormDesign/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="registerFormDesign/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="registerFormDesign/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="registerFormDesign/css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Add Admitted Students</h2>
                    <form method="POST">
                        <?php
                        if (count($errors) > 0) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>

                        <!--Student INfo-->
                        <div class="input-group">
                            <div class="input-group">
                                <input class="input--style-4 disabled" type="hidden" name="id" value="<?php echo $getid; ?>">
                            </div>
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="name" value="<?php echo $getname; ?>">
                            </div>
                            <!-- NRC -->
                            <div class="input-group ">

                                <div class="row nrc ">
                                    <div class="col-3">
                                        <?php
                                        $strNrc = "$getnrc";
                                        $strArray = explode(' ', $strNrc);
                                        $nrcState = $strArray[0];
                                        $stateCode =  str_replace("/", "",  $nrcState);

                                        $townCode = $strArray[1];

                                        $N = $strArray[2];
                                        $start =  str_replace("(", "",  $N);
                                        $naing =  str_replace(")", "",  $start);


                                        $nrcNumber = $strArray[3];

                                        ?>

                                        <select id="stateCode" name="stateCode" class="form-select" value="">
                                            <option selected><?php echo $stateCode; ?></option>
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

                                    </div>
                                    <div class="col-3">

                                        <select id="townCode" name="townCode" class="form-select">
                                            <option selected><?php echo $townCode; ?></option>
                                        </select>

                                    </div>
                                    <div class="col-3">

                                        <select id="naing" name="naing" class="form-select" placeholder="N">
                                            <option selected><?php echo $naing; ?></option>
                                            <option value="N">N</option>
                                            <option value="P">P</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <div class="wrap-input100 validate-input m-b-23">
                                            <input type="text" name="nrcNumber" class="form-control" id="nrcNumber" value="<?php echo $nrcNumber; ?>">
                                        </div>
                                    </div>
                                </div></br>
                            </div><!-- NRC end -->

                            <div class="input-group">
                                <input class="input--style-4" type="text" name="mark" value="<?php echo $getmark; ?>">
                            </div>
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="year" value="<?php echo $getyear; ?>">
                            </div>
                            <div class="row">

                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" onclick="return alert('Update successful !');" type="submit" name="update_student">Update Student</button></a>

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
    //Father nrc
    document.getElementById('fstateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });

        selectedNRC.sort();

        var township = document.getElementById('ftownCode');

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
    //moter nrc
    document.getElementById('mstateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });

        selectedNRC.sort();

        var township = document.getElementById('mtownCode');

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
<!-- end document-->