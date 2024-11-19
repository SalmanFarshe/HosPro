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
                <form class="row g-3" action="" method="post">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="frstnm" class="form-label">Name</label>
                            <input type="text" class="form-control" name="firstname" id="frstnm" required>
                        </div>
                        <div class="mb-3">
                            <label for="usrEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="usrEmail" id="usrEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="usrnm" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="usrnm" required>
                        </div>
                        <div class="mb-3">
                            <label for="pswrd" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="pswrd" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" required>
                        </div>
                        <div class="mb-3">
                            <label for="nidnumber" class="form-label">NID Number</label>
                            <input type="number" class="form-control" name="nidnumber" id="nidnumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phonenumber" id="phonenumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100" name="submitCreateAccount">Create Account</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>
                            Already have an account? 
                            <a href="log-in.php">Log in</a>
                        </p>
                        <p>
                            <a href="/01.HosPro">Go Back</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php
      // Check if the form is submitted
      if (isset($_POST['submitCreateAccount'])) {
          // Validate required fields
          $firstname = $_POST['firstname'] ?? null;
          $usrEmail = $_POST['usrEmail'] ?? null;
          $username = $_POST['username'] ?? null;
          $password = $_POST['password'] ?? null;
          $dob = $_POST['dob'] ?? null;
          $nidnumber = $_POST['nidnumber'] ?? null;
          $phonenumber = $_POST['phonenumber'] ?? null;
          $address = $_POST['address'] ?? null;

          // Check if any required field is missing
          if (!$firstname || !$usrEmail || !$username || !$password || !$dob || !$nidnumber || !$phonenumber || !$address) {
              die("Please fill in all the fields.");
          }

          // Include database connection
          require_once('../backend/config/config.php');

          // Generate custom user_id
          $sql_last_id = "SELECT user_id FROM user_details ORDER BY user_reg_date DESC LIMIT 1";
          $result = mysqli_query($connection, $sql_last_id);
          $new_id = "USR-01"; // Default ID if no entries exist

          if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              $last_id = intval(substr($row['user_id'], 4)); // Extract numeric part
              $new_id = "USR-" . str_pad($last_id + 1, 2, "0", STR_PAD_LEFT);
          }

          // Insert data
          $sql = "INSERT INTO user_details (user_id, user_name, user_password, user_email, user_address, user_nid, user_full_name, user_dob, user_phn)
                  VALUES ('$new_id', '$username', '$password', '$usrEmail', '$address', '$nidnumber', '$firstname', '$dob', '$phonenumber')";

          if (mysqli_query($connection, $sql)) {
            header('location:log-in.php');
          } else {
              echo "Error: " . mysqli_error($connection);
          }
      }
    ?>
</body>
</html>
