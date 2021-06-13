<?php include 'server.php' ?>
<?php include 'header.php'; ?>

  <!-- Login Form Starts here... -->
  <main class="login-form my-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
              <?php include 'error.php'; ?>
              <form action="register.php" method="POST">
                <div class="form-group row mb-2">
                  <label for="fullName" class="col-md-4 col-form-label text-md-right">Full Name</label>
                  <div class="col-md-6">
                    <input type="text" id="fullName" class="form-control" name="fullName" required>
                  </div>
                </div>
                <div class="form-group row mb-2">
                  <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-md-6">
                    <input type="email" id="email" class="form-control" name="email" required>
                  </div>
                </div>
                <div class="form-group row mb-2">
                  <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile</label>
                  <div class="col-md-6">
                    <input type="number" id="mobile" class="form-control" name="mobile" required>
                  </div>
                </div>
                <div class="form-group row mb-2">
                  <label for="checkNumber" class="col-md-4 col-form-label text-md-right">Check Number</label>
                  <div class="col-md-6">
                    <input type="number" id="checkNumber" class="form-control" name="checkNumber" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="schoolLevel" class="col-md-4 col-form-label text-md-right">Choose Level</label>
                  <div class="col-md-6">
                    <select id="schoolLevel" class="form-control" name="schoolLevel" required>
                      <option value="Secondary">Secondary School</option>
                      <option value="Primary">Primary School</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="transferFrom" class="col-md-4 col-form-label text-md-right">Transfer From</label>
                  <div class="col-md-6">
                    <select id="transferFrom" class="form-control" name="transferFrom" required>
                      <option value="Kibasila">Kibasila</option>
                      <option value="Mzumbe">Mzumbe</option>
                      <option value="Tambaza">Tambaza</option>
                      <option value="Pugu">Pugu</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="transferTo" class="col-md-4 col-form-label text-md-right">Transfer To</label>
                  <div class="col-md-6">
                    <select id="transferTo" class="form-control" name="transferTo" required>
                      <option value="Kibasila">Kibasila</option>
                      <option value="Mzumbe">Mzumbe</option>
                      <option value="Tambaza">Tambaza</option>
                      <option value="Pugu">Pugu</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>
                  <div class="col-md-6">
                    <select id="subject" class="form-control" name="subject" required>
                      <option value="English">English</option>
                      <option value="Mathematics">Mathematics</option>
                      <option value="Science">Science</option>
                      <option value="Kiswahili">Kiswahili</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                  </div>
                </div>
                <div class="form-group row mb-2">
                  <label for="confirmPassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                  <div class="col-md-6">
                    <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" required>
                  </div>
                </div>

                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary col-6 align-items-md-center" name="reg_user">
                    REGISTER
                  </button>
                  <p class="mt-2 text-center">Not a member? <a href="login.php">Login</a></p>
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