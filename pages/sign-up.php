<?php

$connection = mysqli_connect("localhost", "root", "", "thehosprodb2");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HosPro | Create Account</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
  <section class="logIn">
    <div class="logIn-wrap">
      <div class="login-inner-wrap bg-glass p-4 w-50">
        <h2 class="text-center">Create New Account</h2>
        <div class="">
          <form class="row g-3" action="log-in.php" method="post">
            <div class="col-6 form-left-part">
              <div class="col-12">
                <label for="frstnm" class="form-label frm-label">Full Name</label>
                <input type="text" class="form-control frm-input" name="user_full_name" id="frstnm" required>
              </div>
              <div class="col-12">
                <label for="lstnm" class="form-label frm-label">Email</label>
                <input type="email" class="form-control frm-input" name="user_email" id="lstnm" required>
              </div>
              <div class="col-12">
                <label for="usrnm" class="form-label frm-label">User Name</label>
                <input type="text" class="form-control frm-input" name="user_name" id="usrnm" required>
              </div>
              <div class="col-12">
                <label for="pswrd" class="form-label frm-label">Password</label>
                <input type="password" class="form-control frm-input" name="user_password" id="pswrd" required>
              </div>
            </div>
            <div class="col-6 form-right-part">
              <div class="col-12">
                <label for="dob" class="form-label frm-label">Date Of Birth</label>
                <input type="date" class="form-control frm-input" name="user_dob" id="dob" required>
              </div>
              <div class="col-12">
                <label for="nidnum" class="form-label frm-label">NID Number</label>
                <input type="number" class="form-control frm-input" name="user_nid" id="nidnum" required>
              </div>
              <div class="col-12">
                <label for="phnnum" class="form-label frm-label">Phone Number</label>
                <input type="number" class="form-control frm-input" name="user_phn" id="phnnum" required>
              </div>
              <div class="col-12">
                <label for="addrs" class="form-label frm-label">Address</label>
                <input type="" class="form-control frm-input" name="user_address" id="addrs" required>
              </div>

            </div>
            <div class="col-12">
              <button type="submit" class="btn login-button w-100" name="submitCreateAccount">Create Account</button>
            </div>
            <div class="text-center">
              <p>
                Already have an account
                <a href="log-in.php" class="fw-bold" style="text-decoration: none;">
                  Log in
                </a> here
              </p>
              <p>
                <a href="/01.HosPro" class="fw-bold" style="text-decoration: none;">
                  Go Back
                </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
// require_once('../backend/config/config.php');
$connection = mysqli_connect("localhost", "root", "", "thehosprodb2");

if (isset($_POST['submitCreateAccount'])) {
  $user_full_name = $_POST['user_full_name'];
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  $user_dob = $_POST['user_dob'];
  $user_nid = $_POST['user_nid'];
  $user_phn = $_POST['user_phn'];
  $user_address = $_POST['user_address'];


  $signup = "INSERT INTO `user_details` (`user_name`,	`user_password`,	`user_email`,	`user_address`,	`user_nid`,	`user_full_name`,	`user_dob`,	`user_phn`, `user_reg_date`) values('$user_name', '$user_password', '$user_email', '$user_address', '$user_nid', '$user_full_name', '$user_dob', '$user_phn')";
  mysqli_query($connection, $signup);
}
?>