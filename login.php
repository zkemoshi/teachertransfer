  <?php include 'header.php'; ?>

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


  <?php include 'footer.php'; ?>