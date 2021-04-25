<?php

session_start();

if(!isset($_SESSION['loggedin'])){
  header('Location : index.php');
  exit;
}

$host = 'localhost';
$database_username = 'root';
$database_password = '';
$database = 'the_tech_archlight';

$conn = mysqli_connect($host, $database_username, $database_password, $database);

if(mysqli_connect_errno()){
  //if there is any error with the connection, stop the script and display the error...
  exit('Failed to connect to MySQL: '. mysqli_connect_errno());
}

// fetch from database info
$stmt = $conn -> prepare('SELECT password, email FROM accounts WHERE id = ?');

$stmt -> bind_param('i', $_SESSION['id']);
$stmt -> execute();
$stmt -> bind_result($password, $email);
$stmt -> fetch();
$stmt -> close();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="icon" href="images/favicon1.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Russo+One&display=swap" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">The Tech Archlight</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <!-- <li class="nav-item left">
              <a class="nav-link disabled" href="login.html">login</a>
            </li> -->
          </ul>
          <span>
            <?php
              if($_SESSION['loggedin']){
                echo "hi, ".$_SESSION['name'];

              }
             ?>
          </span>
          <span>
            <a class="nav-link" href="../logout.php">Logout</a>
          </span>
          <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
    <h2>Profile Page</h2>
    <div class="">
      <p>Your Account details are below:</p>
      <table>
        <tr>
          <th>UserName: </th>
          <td><?=$_SESSION['name']  ?></td>
        </tr>
        <tr>
          <th>Password :</th>
          <td><?=$password ?></td>
        </tr>
        <tr>
          <th>Email :</th>
          <td><?=$email ?></td>
        </tr>
      </table>
    </div>


  </body>
</html>
