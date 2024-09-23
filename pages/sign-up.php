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
            <form class="row g-3">
              <div class="col-6 form-left-part">
                <div class="col-12">
                  <label for="frstnm" class="form-label frm-label">First Name</label>
                  <input type="text" class="form-control frm-input" id="frstnm" required>
                </div>
                <div class="col-12">
                  <label for="lstnm" class="form-label frm-label">Last Name</label>
                  <input type="text" class="form-control frm-input" id="lstnm" required>
                </div>
                <div class="col-12">
                  <label for="usrnm" class="form-label frm-label">User Name</label>
                  <input type="text" class="form-control frm-input" id="usrnm" required>
                </div>
                <div class="col-12">
                  <label for="pswrd" class="form-label frm-label">Password</label>
                  <input type="password" class="form-control frm-input" id="pswrd" required>
                </div>
              </div>
              <div class="col-6 form-right-part">
                <div class="col-12">
                  <label for="dob" class="form-label frm-label">Date Of Birth</label>
                  <input type="date" class="form-control frm-input" id="dob" required>
                </div>
                <div class="col-12">
                  <label for="nidnum" class="form-label frm-label">NID Number</label>
                  <input type="number" class="form-control frm-input" id="nidnum" required>
                </div>
                <div class="col-12">
                    <label for="phnnum" class="form-label frm-label">Phone Number</label>
                    <input type="number" class="form-control frm-input" id="phnnum" required>
                </div>  
                <div class="col-12">
                    <label for="addrs" class="form-label frm-label">Address</label>
                    <input type="" class="form-control frm-input" id="addrs" required>
                </div>  

              </div>                
              <div class="col-12">
                <button type="submit" class="btn login-button w-100">Create Account</button>
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