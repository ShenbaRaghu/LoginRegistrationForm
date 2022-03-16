<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!---------CSS--------------->
    <link href="style.css" rel="stylesheet" />
    <title>Registration Form</title>
  </head>
  <body>
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6 col-xm-12">
          <h1 class="text-center">Sign Up</h1>
          <form action="signup.php" method="post">
            <div class="form-group my-3">
              <label for="username" class="userfont">Username</label>
              <input
                type="text"
                class="form-control"
                id="username"
                placeholder="Enter username"
                autocomplete="off"
                name="username"
              />
            </div>
            <div class="form-group my-3">
              <label for="password" class="userfont">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter password"
                autocomplete="off"
                name="password"
              />
            </div>
            <div class="form-group my-3">
              <label for="cpassword" class="userfont">Confirm Password</label>
              <input
                type="password"
                class="form-control"
                id="cpassword"
                placeholder="Enter confirm password"
                autocomplete="off"
                name="cpassword"
              />
            </div>

            <div class="d-grid w-50 mx-auto my-4">
              <button
                id="buttonfont"
                class="btn btn-success"
                name="signup"
                type="submit"
              >
                SignUp
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6 col-xm-12 my-5">
          <h1 class="text-center">Login</h1>
          <form action="login.php" method="post">
            <div class="form-group my-3">
              <label for="username" class="userfont">Username</label>
              <input
                type="text"
                class="form-control"
                id="username"
                placeholder="Enter username"
                autocomplete="off"
                name="username"
              />
            </div>
            <div class="form-group my-3">
              <label for="password" class="userfont">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter password"
                autocomplete="off"
                name="password"
              />
            </div>

            <div class="d-grid w-50 mx-auto my-4">
              <button
                id="buttonfont"
                class="btn btn-primary"
                name="login"
                type="submit"
              >
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
