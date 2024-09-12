<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../assets/css/login.css">


  </head>
  <body>
    <section class="sign rounded-4 p-4">
        <h2 class="text-center py-3">Sign In</h2>
        <div class="d-flex justify-content-center">
            <form class="row g-3" style="max-width: 400px;">
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
                    <a class="text-dark" style="text-decoration: none;" href="#">Reset Password</a>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-dark w-100">Sign In</button>
                </div>
                <div class="text-center">
                    <p>
                        Don't have an account 
                        <a href="SignUp.html" class="text-dark fw-bold" style="text-decoration: none;">
                            Sign up
                        </a> here
                    </p>
                </div>


            </form>
        </div>
    </section>
  </body>
</html>



<!-- <div class="col-12">
    <button class="btn btn-outline-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Customer</a></li>
      <li><a class="dropdown-item" href="#">Admin</a></li>
    </ul>
</div> -->