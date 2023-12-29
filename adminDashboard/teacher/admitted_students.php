<?php
require "studentController/admitted_student_controller.php";
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }

        .access_btn {
            background-color: red;
            color: #fff;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="/student_affair_system/adminDashboard/admin_dashboard.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">ACCOUNT MANAGEMENT</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Students </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="students_list.php">Students List</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="admitted_students.php">Admitted Students</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="graduated_student.php">Graduated Students</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Teacher</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Teachers List</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Pending Teachers</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Course</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">First Semener</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Second Semener</a></li>
                        </ul>
                    </li>

                    <!-- <li class="menu-title">Icons</li>
                   
                  

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font
                                    Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                </ul>-->
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <!--Menu bar left-->
            <div class="top-left">
                <div class="navbar-header">
                    <div class="row">
                        <div class="col-3 pt-2">
                            <a class="navbar-brand" href="./"><img src="images/ucspl_logo.jpg" alt="Logo" style="width: 45px;height: 45px;border-radius: 50;">
                            </a>
                        </div>
                        <div class="col-5 pt-3 text-success b">
                            <h4 class="text-success b" style=" color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px purple, 0 0 5px purple;">ADMIN
                        </div>
                        </h4>

                        <div class="col-4">
                            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Menu Bar right-->
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                    </div>



                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">


                <!-- Orders -->
                <div class="orders ">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="row">
                                    <div class="col-3">
                                        Admitted Students
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>

                                        <a href="csv_export.php" class="btn btn-otline-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z" />
                                            </svg> CSV</a>

                                        <!--<a href="csv_export.php" class="btn btn-success">export</a>-->
                                    </div>
                                    <div class="col-9 p-5px">
                                        <div class="row ">
                                            <div class="col-8">

                                                <form class="" action="/action_page.php">
                                                    <div class="row">
                                                        <div class="col-8">

                                                            <!-- <div class="dropdown">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                                    Dropdown button
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Link 1</a></li>
                                                                    <li><a class="dropdown-item" href="#">Link 2</a></li>
                                                                    <li><a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Link 3</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="#">Link 1</a></li>
                                                                            <li>
                                                                                <div class="dropdown-item" href="#">Link 2</div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
    -->
                                                        </div>
                                                    </div>

                                                    <!--search design
                                                        <div class="col-8 ">
                                                            <div class="input-group">
                                                                <div class="form-outline">
                                                                    <input type="search" id="form1" placeholder="Search ..." class="form-control" />
                                                                    <label class="form-label" for="form1"></label>
                                                                </div>
                                                                <button type="button" class="btn btn-primary" style="width: 60px; height: 38px;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                         -->
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-8">
                                            <a href="admitted_student_add.php"><button type="submit" class="btn btn-success f-right "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                    </svg>&nbsp; &nbsp; Add Students</button></a>
                                            <input id="myInput" type="text" placeholder="Search..">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div></br>
                    <div class="row " style="padding: 10px;">
                        <div class="">
                            <?php
                            require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

                            if ($stmt = $con->prepare('SELECT * FROM user_information ORDER BY id LIMIT ?,?')) {
                                // Calculate the page to get the results we need from our table.
                                $calc_page = ($page - 1) * $num_results_on_page;
                                $stmt->bind_param('ii', $calc_page, $num_results_on_page);
                                $stmt->execute();
                                // Get the results...
                                $result = $stmt->get_result(); ?>

                                <div class="card-body--">

                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>NRC</th>
                                                    <th>Mark</th>
                                                    <th>Year</th>
                                                    <th>Access</th>
                                                    <th>Position</th>
                                                    <th style="width: 250px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">

                                                <?php foreach ($teacher_result as $stu_res) { ?>
                                                    <tr>
                                                        <td><?php echo $stu_res['id']; ?></td>
                                                        <td><?php echo $stu_res['student_name']; ?></td>
                                                        <td><?php echo $stu_res['student_nrc']; ?></td>
                                                        <td><?php echo $stu_res['mark']; ?></td>
                                                        <td><?php echo $stu_res['admitted_year']; ?></td>
                                                        <td>
                                                            <!-- access btn php -->
                                                            <?php

                                                            if ($stu_res['access'] === "access") { ?>
                                                                <p>Enrollment </p>
                                                            <?php } else {
                                                            ?>
                                                                <a href="admitted_students.php?access_id=<?php echo $stu_res['id'] ?>" onclick="return confirm('Are you sure this student have enrolled ? ');" id='access_btn'><button type="submit" onclick="disble(this)" name="access" class="access_btn">Access</button> </a>
                                                            <?php   }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <!-- access btn php -->
                                                            <?php

                                                            if ($stu_res['role'] === "graduated") { ?>
                                                                <p>graduated </p>
                                                            <?php } else {
                                                            ?>
                                                                <a href="admitted_students.php?graduated_id=<?php echo $stu_res['id'] ?>" onclick="return confirm('Are you sure this student graduated ? ');" id='access_btn'><button type="submit" onclick="disble(this)" name="access_graduated" class="btn-success">student</button> </a>
                                                            <?php   }
                                                            ?>
                                                        </td>
                                                        <td><a href="edit_admitted_student.php?stuid=<?php echo $stu_res['id'] ?>">
                                                                <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                    </svg>&nbsp;&nbsp; Edit</button>
                                                            </a>
                                                            <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                                </svg>&nbsp;&nbsp; Delete</button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->

                                </div>
                                <script>
                                    let access_btn = document.querySelector('#access_btn');
                                    access_btn.addEventListener('click', () => access_btn.style.backgroundColor = '#337ab7');
                                </script>

                                <!-- Pagination buttom -->
                                <?php if (ceil($total_pages / $num_results_on_page) > 0) : ?>
                                    <ul class="pagination">
                                        <?php if ($page > 1) : ?>
                                            <li class="prev"><a href="students_list.php"><button class="btn-sm btn-primary">
                                                        << Prev</button> </a></li>
                                        <?php endif; ?>

                                        <?php if ($page > 3) : ?>
                                            <li class="start"><a href="students_list.php?page=1">1</a></li>
                                            <li class="dots">...</li>
                                        <?php endif; ?>

                                        <?php if ($page - 2 > 0) : ?><li class="page"><a href="students_list.php?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
                                        <?php if ($page - 1 > 0) : ?><li class="page"><a href="students_list.php?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

                                        <li class="currentpage"><a href="students_list.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

                                        <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1) : ?><li class="page"><a href="students_list.php?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
                                        <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 1) : ?><li class="page"><a href="students_list.php?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

                                        <?php if ($page < ceil($total_pages / $num_results_on_page) - 2) : ?>
                                            <li class="dots">...</li>
                                            <li class="end"><a href="students_list.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
                                        <?php endif; ?>

                                        <?php if ($page < ceil($total_pages / $num_results_on_page)) : ?>
                                            <li class="next"><a href="students_list.php?page=<?php echo $page + 1 ?>"><button class="btn-sm btn-primary">Next >></button></a></li>
                                        <?php endif; ?>
                                    </ul>
                                <?php endif; ?>


                        </div> <!-- /.col-lg-10 -->
                    </div>
                </div>

                <!-- /.orders -->


                <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                    label: "Desktop visits",
                    data: [
                        [1, 32]
                    ],
                    color: '#5c6bc0'
                },
                {
                    label: "Tab visits",
                    data: [
                        [1, 33]
                    ],
                    color: '#ef5350'
                },
                {
                    label: "Mobile visits",
                    data: [
                        [1, 35]
                    ],
                    color: '#66bb6a'
                }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                    label: "Direct Sell",
                    data: [
                        [1, 65]
                    ],
                    color: '#5b83de'
                },
                {
                    label: "Channel Sell",
                    data: [
                        [1, 35]
                    ],
                    color: '#00bfa5'
                }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 35000, 25000, 22000, 0],
                        [0, 33000, 15000, 20000, 15000, 300],
                        [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function(data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                                label: "Visit",
                                borderColor: "rgba(4, 73, 203,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(4, 73, 203,.5)",
                                data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                            },
                            {
                                label: "Bounce",
                                borderColor: "rgba(245, 23, 66, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(245, 23, 66,.5)",
                                pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                            },
                            {
                                label: "Targeted",
                                borderColor: "rgba(40, 169, 46, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(40, 169, 46, .5)",
                                pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [
                    [0, 18],
                    [2, 8],
                    [4, 5],
                    [6, 13],
                    [8, 5],
                    [10, 7],
                    [12, 4],
                    [14, 6],
                    [16, 15],
                    [18, 9],
                    [20, 17],
                    [22, 7],
                    [24, 4],
                    [26, 9],
                    [28, 11]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });

        function disble(x) {
            x.disabled = true;
        }
    </script>
</body>

</html>
<?php
                                $stmt->close();
                            }
