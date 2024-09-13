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
        <div class="login-inner-wrap w-25">
          <h2 class="text-center">Log In</h2>
          <div class="">
            <form class="row g-3">
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Email / Username</label>
                <input type="email" class="form-control" id="inputEmail4" required>
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" required>
              </div>                
              <div class="col-12 d-flex justify-content-between">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Remember me
                  </label>
                </div>
                <div class="form-check">
                  <a class="pswrdrst" href="password-reset.php">Reset Password</a>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn login-button w-100">Sign In</button>
              </div>
              <div class="text-center">
                  <p>
                      Don't have an account 
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