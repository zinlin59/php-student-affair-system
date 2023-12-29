<?php
//if user click change password button
if (isset($_POST['change_password'])) {

    echo $password = mysqli_real_escape_string($con, $_POST['password']);
    echo $cpassword = mysqli_real_escape_string($con, $_POST['password2']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $id = $_SESSION['id'];
        //getting this email using session
        $encpass = $password;
        $update_pass = "UPDATE user_info SET password = '$encpass' WHERE id = '$id'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
