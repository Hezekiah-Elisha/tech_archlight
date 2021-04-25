<?php

  session_start();

  // change this to your connection info
  $host = 'localhost';
  $database_username = 'root';
  $database_password = '';
  $database = "the_tech_archlight";

  $conn = mysqli_connect($host, $database_username, $database_password, $database);

  if(mysqli_connect_errno()){
    exit('failed to connect to MySQL: '.mysqli_connect_errno());
  }

  //checking if data was submitted
  if(!isset($_POST['username'], $_POST['password'])){
    exit('Please fill both the username and pasword fields!');
  }

  // prepare our sql, preparing the sql statement will prevent sql injection
  if($stmt = $conn -> prepare('SELECT id, password FROM accounts WHERE username = ?')){
    // bind parameters
    $stmt -> bind_param('s', $_POST['username']);
    $stmt -> execute();
    // store_result so we can check if the account exists
    $stmt -> store_result();

    if($stmt -> num_rows > 0){
      $stmt -> bind_result($id, $password);
      $stmt -> fetch();

      // account exists, now we verify the password
      if(password_verify($_POST['password'], $password)){
        //verification successful!
        //create sessions so we know the user is logged in
        session_regenerate_id();

        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;

        header('Location: ../index.php');
        // echo "login successfull";

      }else{
        // insorrect password
        echo "incorrect password";
      }

    }else{
      echo "Incorrect username or password";
    }

    $stmt -> close();
  }

 ?>
