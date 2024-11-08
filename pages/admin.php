<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Log In | HosPro</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
  </head>
  <body>
    <section class="logIn">
      <div class="logIn-wrap">
        <div class="login-inner-wrap bg-glass p-4 w-25">
          <h2 class="text-center">Login</h2>
          <div class="">
            <form class="row g-3" action="admin.php" method="get">
              <div class="col-12">
                <label for="selectRole" class="form-label frm-label">Select Role</label>
                <select id="selectRole" class="form-select" name="admin_role" required>
                  <option value="" disabled selected>Choose Role</option>
                  <option value="admin">Admin</option>
                  <option value="receptionist">Receptionist</option>
                  <option value="manager">Manager</option>
                </select>
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label frm-label">Password</label>
                <input type="password" name="admin_pass" class="form-control frm-input" id="inputPassword4" required>
              </div>
              <div class="col-12">
                <button type="submit" name="admin_login" class="btn login-button w-100">Let's Go!</button>
              </div>
              <div class="text-center">
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
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
  if(isset($_GET["admin_login"]))
  {
    require_once("../backend/config/config.php");
    $admin_pass = $_GET['admin_pass'];
    $admin_role = $_GET['admin_role'];
    $sql = "select * from admin_details where admin_password = '$admin_pass'";
    $data =  mysqli_query($connection,$sql);
    $total = mysqli_num_rows($data);

    if($total > 0)
    {
      session_start();
      $_SESSION['admin_mood'] = $_GET['admin_pass'];
      header('location:dashboard.php');
    }
  }
?>