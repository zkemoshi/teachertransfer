<?php include 'server.php' ?>
<?php include 'header.php'; ?>
<?php 
    $user_id = $_SESSION['user_id'];
    $teacher_request_query = "SELECT * FROM transfers WHERE userId='$user_id'";

    $teacher_request_result = mysqli_query($db, $teacher_request_query);
    $teacher_request_array = mysqli_fetch_assoc($teacher_request_result);

    $transferFrom = $teacher_request_array['transferFrom'];
    $transferTo = $teacher_request_array['transferTo'];
    $subject = $teacher_request_array['subject'];


    //Search for Matches..
    $teacher_match_query = "SELECT * FROM transfers WHERE transferFrom='$transferTo' && transferTo='$transferFrom' && subject='$subject'";

    $teacher_match_result = mysqli_query($db, $teacher_match_query);
    
    
    

?>

  <!-- Login Form Starts here... -->
  <main class="login-form my-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Welcome, <span class='text-danger'><?php echo $_SESSION['fullName'] ?></span> </div>
            <div class="card-body">
              <h3>Current Transfer Options</h3>
              <hr>
              
              <table class="table mt-5">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $num=0;
                while($row = mysqli_fetch_assoc($teacher_match_result)){ 
                $num+=1;  
                ?>
                  <tr>
                    <td><?php echo $num; ?></td>
                    <td>
                    <?php 
                      $id= $row['userId'];
                      $teacher_name_query = "SELECT * FROM users WHERE id='$id'";

                      $teacher_name_result = mysqli_query($db, $teacher_name_query);
                      $teacher_name_array = mysqli_fetch_assoc($teacher_name_result);
                      echo $teacher_name_array['fullName'];
                  
                    ?>
                    </td>
                    <td>
                      <a href="transfer.php?userId=<?php echo $id ?>">View More</a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>


<?php include 'footer.php'; ?>