  <?php include 'server.php'; ?>
  <?php include 'header.php'; ?>

  <?php 
  //Teacher Details on Transfer
  if ($_GET['userId']){
    $userId = $_GET['userId'];

    $query = "SELECT * FROM users  WHERE id='$userId'";
    $user_profile_result = mysqli_query($db, $query);
    $user_profile_array = mysqli_fetch_assoc($user_profile_result);

    $transfer_query = "SELECT * FROM transfers  WHERE userId='$userId'";
    $transfer_profile_result = mysqli_query($db, $transfer_query);
    $transfer_profile_array = mysqli_fetch_assoc($transfer_profile_result);
    
  }
  
  ?>

  <main class="login-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
              <h3>Transfer Details</h3>
              <table class="table">
                <tbody>
                  <tr>
                    <th>Full Name:</th>
                    <td>
                    <?php echo $user_profile_array['fullName']; ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td>
                    <?php echo $user_profile_array['email']; ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Phone:</th>
                    <td><?php echo $user_profile_array['mobile']; ?></td>
                  </tr>
                  <tr>
                    <th>Transfer From:</th>
                    <td><?php echo $transfer_profile_array['transferFrom']; ?></td>
                  </tr>
                  <tr>
                    <th>Transfer To:</th>
                    <td><?php echo $transfer_profile_array['transferTo']; ?></td>
                  </tr>
                  <tr>
                    <th>Teacher Subject:</th>
                    <td><?php echo $transfer_profile_array['subject']; ?></td>
                  </tr>
                </tbody>
              </table>
              <div>
                <a href="#" class="btn btn-primary">Confirm Request</a>
                <a href="#" class="btn btn-danger">Cancel Request</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php include 'footer.php'; ?>