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
                <label for="emailOrUsername" class="form-label frm-label">Email / Username</label>
                <input 
                  type="text" 
                  class="form-control frm-input" 
                  id="emailOrUsername" 
                  name="emailOrUsername" 
                  required>
              </div>
              
              <!-- Password -->
              <div class="col-12">
                <label for="password" class="form-label frm-label">Password</label>
                <input 
                  type="password" 
                  class="form-control frm-input" 
                  id="password" 
                  name="password" 
                  required>
              </div>
              
              <!-- Remember Me & Reset Password -->
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
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Include database connection
      require_once('../backend/config/config.php');

      // Get user input
      $emailOrUsername = mysqli_real_escape_string($connection, $_POST['emailOrUsername']);
      $password = mysqli_real_escape_string($connection, $_POST['password']);

      // Check if the email/username exists
      $query = "SELECT * FROM user_details 
                WHERE (user_email = '$emailOrUsername' OR user_name = '$emailOrUsername') 
                AND user_password = '$password'";
      $result = mysqli_query($connection, $query);

      if ($result && mysqli_num_rows($result) > 0) {
          session_start();
  
          // Fetch user details
          $user = mysqli_fetch_assoc($result);
          
          // Store user details in session
          $_SESSION['user_id'] = $user['user_id'];
          $_SESSION['user_name'] = $user['user_name'];
          $_SESSION['user_email'] = $user['user_email'];
          $_SESSION['user_mood'] = $user['user_password'];

          // Redirect to dashboard or home
          header("Location: user-dash.php");
          exit();
      } else {
          // Invalid credentials
          $error = "Invalid Email/Username or Password!";
      }
  }
?>
