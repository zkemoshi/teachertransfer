<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- BootStrap CSS -->
  <link rel="stylesheet" href="../resources/css/bootstrap.css">

</head>

<body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand" href="#">T-Transfer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login Form Starts here... -->
  <main class="login-form my-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
              <form action="login.php" method="POST">
                <div class="form-group row mb-2">
                  <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-md-6">
                    <input type="email" id="email" class="form-control" name="email" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                  </div>
                </div>

                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary col-6 align-items-md-center" name="login_user">
                    LOGIN
                  </button>
                  <p class="mt-2 text-center">Not a member? <a href="register.php">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>


  <!-- Bootstrap JS -->
  <script src="../resources/js/bootstrap.js"></script>

  <div style="height: 1100px;"></div>
</body>

</html>