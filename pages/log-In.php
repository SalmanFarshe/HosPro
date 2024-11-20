<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In | HosPro</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
  </head>
  <body>
    <section class="logIn">
      <div class="logIn-wrap">
        <div class="login-inner-wrap bg-glass p-4 w-25">
          <h2 class="text-center">Log In</h2>
          <div class="">
            <form class="row g-3" action="log-in.php" method="post">
              <!-- Email/Username -->
              <div class="col-12">
                <label for="inputEmail4" class="form-label frm-label">Username</label>
                <input type="text" name="user_name" class="form-control frm-input" id="inputEmail4" required>
              </div>
              
              <!-- Password -->
              <div class="col-12">
                <label for="inputPassword4" class="form-label frm-label">Password</label>
                <input type="password" name="user_password" class="form-control frm-input" id="inputPassword4" required>
              </div>                
              <div class="col-12 d-flex justify-content-between">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label frm-label" for="gridCheck">
                    Remember me
                  </label>
                </div>
                <div class="form-check">
                  <a class="pswrdrst" href="password-reset.php">Reset Password</a>
                </div>
              </div>
              
              <!-- Submit Button -->
              <div class="col-12">
                <button type="submit" class="btn login-button w-100">Sign In</button>
              </div>
              
              <!-- Sign-Up & Go Back Links -->
              <div class="text-center">
                <p>
                  Don't have an account? 
                  <a href="sign-up.php" class="fw-bold" style="text-decoration: none;">
                    Sign up
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
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
$login = 0;
$invalid = 0;

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $connection = new mysqli("localhost", "root", "", "hosprodb");

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM `user_details` WHERE user_name='$user_name' and user_password='$user_password' ";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            session_start();
            $_SESSION['user_name'] = $user_name;
            header('location:user-dash.php');
            echo "connected";
        } else {

            $invalid = 1;
        }
    }
}
?>