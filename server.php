<?php
ob_start();
session_start();
include 'db.php';

// initializing variables
$fullName = "";
$email    = "";
$mobile    = "";
$checkNumber    = "";
$errors = [];


// REGISTER TEACHER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
  $checkNumber = mysqli_real_escape_string($db, $_POST['checkNumber']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $schoolLevel = mysqli_real_escape_string($db, $_POST['schoolLevel']);
  $transferFrom = mysqli_real_escape_string($db, $_POST['transferFrom']);
  $transferTo = mysqli_real_escape_string($db, $_POST['transferTo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  echo 'here2..';
  // Password Match Validation
  if ($password != $confirmPassword) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a teacher does not already exist with the same checkno
  $teacher_check_query = "SELECT * FROM users WHERE checkNumber='$checkNumber' OR email='$email' LIMIT 1";

  $result = mysqli_query($db, $teacher_check_query);

  $teacher = mysqli_fetch_assoc($result);

  if ($teacher) { // if user exists
      array_push($errors, "Check Number or Email already exists");
      return;
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database

    $query = "INSERT INTO users (fullName,email,mobile,checkNumber, password) VALUES('$fullName','$email','$mobile','$checkNumber','$password')";
    $insert_user = mysqli_query($db, $query);

    // Insert into Teachers Table..

    //Getting User Id
    $user_id_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";

    $user_id_result = mysqli_query($db, $user_id_query);
    $user_id_array = mysqli_fetch_assoc($user_id_result);
    $user_id = $user_id_array['id'];

    $_SESSION['fullName'] = $fullName;
    $_SESSION['user_id'] = $user_id;


    //INSERT INTO TRANSFER INFO TABLE

  
    $transfer_insert_query = "INSERT INTO transfers (transferFrom, transferTo,subject,userId) VALUES('$transferFrom','$transferTo','$subject','$user_id')";

    mysqli_query($db, $transfer_insert_query);

    header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // Encrpt password to look same as table password
  $password = md5($password);


  // first check the database to make sure 
  // a teacher exist with the same password

  $user_check_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);

  $user = mysqli_fetch_assoc($result);

  if (!$user) { // if user exists
    array_push($errors, "Wrong password/Username");
  } else {
    $user_id = $user['id'];
    $_SESSION['user_id'] = $user_id;
    $_SESSION['fullName'] = $user['fullName'];


    //Login for a Teacher
    if ($user['role'] == 2) {
      header('location: index.php');
    }

    //Login for HOS
    if ($user['role'] === 3) {
      echo 'Head of School';
      // content goes here...
    }

    //Login for DSEO
    if ($user['role'] === 4) {
      echo 'Head of DSEO';
      // content goes here...
    }

    //Login for DED
    if ($user['role'] === 5) {
      echo 'Head of DED';
      // content goes here...
    }
  }
}

//LOGOUT USER
if ($_GET['logout']) {
  unset($_SESSION['user_id']);
  unset($_SESSION['fullname']);
  header("location: login.php");
}



// ... 
