<?php
session_start();
if (!isset($_SESSION['user_array'])) {
	header("location: /student_affair_system/index.php");
}
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

if (isset($_POST['change_password'])) {
	$old_password = mysqli_real_escape_string($con, $_POST['old_password']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['password2']);

	if ($password !== $cpassword) {
		$errors['password'] = "Confirm password not matched!";
	} elseif ($password == $cpassword) {
		$id = $_SESSION['user_array']['id'];
		//getting this email using session
		$encpass = $password;
		$update_pass = $con->query(
			"UPDATE user_information SET password = '$encpass' WHERE id = '$id' AND password='$old_password'"
		);
	} else {
		$errors['password'] = "Confirm password not matched!";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
	<!--  All snippets are MIT license http://bootdey.com/license -->
	<title>gray profile - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<div class="container bootstrap snippets bootdey">
		<div class="row">
			<div class="main-content">
				<!-- NAV TABS -->
				<ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
					<li class="active"><a href="#profile-tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-user"></i> Profile</a></li>
					<li class=""><a href="#settings-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-gear"></i> Settings</a></li>
				</ul>
				<!-- END NAV TABS -->
				<div class="tab-content profile-page">
					<!-- PROFILE TAB CONTENT -->
					<div class="tab-pane profile active" id="profile-tab">
						<div class="row">
							<div class="col-md-3">
								<div class="user-info-left">
									<img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture">
									<h2><?php echo $_SESSION['user_array']['student_name'] ?><i class="fa fa-circle green-font online-icon"></i><sup class="sr-only">online</sup></h2>

								</div>
							</div>
							<div class="col-md-9">
								<div class="user-info-right">
									<div class="basic-info">
										<h3><i class="fa fa-square"></i> Basic Information</h3>
										<p class="data-row">
											<span class="data-name">Username</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['student_name'] ?></span>
										</p>
										<p class="data-row">
											<span class="data-name">Birth Date</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['student_birthday'] ?></span>
										</p>
										<p class="data-row">
											<span class="data-name">Gender</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['gender'] ?></span>
										</p>
										<p class="data-row">
											<span class="data-name">NRC</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['student_nrc'] ?></span>
										</p>

									</div>
									<div class="contact_info">
										<h3><i class="fa fa-square"></i> Contact Information</h3>
										<p class="data-row">
											<span class="data-name">Email</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['student_mail'] ?></span>
										</p>
										<p class="data-row">
											<span class="data-name">Phone</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['student_phone_no'] ?></span>
										</p>
										<p class="data-row">
											<span class="data-name">Address</span>
											<span class="data-value"><?php echo $_SESSION['user_array']['student_address'] ?></span>
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE TAB CONTENT -->

					<!-- SETTINGS TAB CONTENT -->
					<div class="tab-pane settings" id="settings-tab">
						<form class="form-horizontal" role="form" method="POST">
							<fieldset>
								<h3><i class="fa fa-square"></i> Change Password</h3>
								<div class="form-group">
									<label for="old-password" class="col-sm-3 control-label">Old Password</label>
									<div class="col-sm-4">
										<input type="password" id="old-password" name="old_password" class="form-control">
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label for="password" class="col-sm-3 control-label">New Password</label>
									<div class="col-sm-4">
										<input type="password" id="password" name="password" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="password2" class="col-sm-3 control-label">Repeat Password</label>
									<div class="col-sm-4">
										<input type="password" id="password2" name="password2" class="form-control">
									</div>
								</div>
							</fieldset>
							<fieldset>

							</fieldset>
							<fieldset>

							</fieldset>

							<p class="text-center"> <button type="submit" class="btn btn-primary" name="change_password"><i class="fa fa-floppy-o"></i>Save Changes</button>
								</a></p>
						</form>
					</div>
					<!-- END SETTINGS TAB CONTENT -->
				</div>
			</div>



		</div>
	</div>


	<style type="text/css">
		body {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 13px;
			color: #555;
			background: #ececec;
			margin-top: 20px;
		}

		.nav.nav-tabs-custom-colored>li.active>a,
		.nav.nav-tabs-custom-colored>li.active>a:hover,
		.nav.nav-tabs-custom-colored>li.active>a:focus {
			background-color: #296EAA;
			color: #fff;
			cursor: pointer;
		}

		.tab-content.profile-page {
			padding: 35px 15px;
		}

		.profile .user-info-left {
			text-align: center;
		}

		.profile .user-info-left,
		.profile .user-info-right {
			padding: 10px 0;
		}

		.profile .user-info-left img {
			border: 3px solid #fff;
		}

		.profile .user-info-left h2 {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.3em;
			margin-bottom: 20px;
		}

		.user-info-left .btn {
			border-radius: 0px;
		}

		.profile .user-info-left ul.social a {
			font-size: 20px;
			color: #b9b9b9;
		}

		.profile .user-info-right {
			border-left: 1px solid #ddd;
			padding-left: 30px;
		}

		.profile h3,
		.activity h3,
		.settings h3 {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.2em;
			margin-top: 0;
			margin-bottom: 20px;
		}

		.data-row .data-name,
		.data-row .data-value {
			display: inline-block;
			vertical-align: middle;
			padding: 5px;
		}

		.data-row .data-name {
			width: 12em;
			color: #fff;
			background-color: #5cb85c;
			border-color: #4cae4c;
			font-size: 0.9em;
			vertical-align: top;
		}

		ul.activity-list>li:not(:last-child) {
			border-bottom: 1px solid #ddd;
		}

		ul.activity-list>li {
			padding: 15px;
		}

		ul.activity-list>li .activity-icon {
			display: inline-block;
			vertical-align: middle;
			-moz-border-radius: 30px;
			-webkit-border-radius: 30px;
			border-radius: 30px;
			width: 34px;
			height: 34px;
			background-color: #e4e4e4;
			font-size: 16px;
			color: #656565;
			line-height: 34px;
			text-align: center;
			margin-right: 10px;
		}

		fieldset {
			margin-bottom: 40px;
		}

		hr {
			border-top-color: #ddd;
		}

		.form-horizontal .control-label {
			text-align: left;
		}

		.form-control,
		.input-group .form-control {
			-moz-border-radius: 0;
			-webkit-border-radius: 0;
			border-radius: 0;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;
		}
	</style>

	<script type="text/javascript">

	</script>
</body>

</html>