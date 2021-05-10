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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="icon" href="../images/favicon1.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Russo+One&display=swap" rel="stylesheet">

  </head>
  <body>
    <header class="navbar">
      <div class="brand">
        <span>The Tech Archlight</span>
      </div>
      <div class="links">
        <ul>
          <li><a href="../index.php">Home</a></li>

          <?php
            if(isset($_SESSION['loggedin'])){
              echo "<li>Hi, ".$_SESSION['name']."</li>"."<li><a class='' href='../logout.php'>Log Out</a></li>";
            // header('Location : auth/login.html');
            // exit;
            }else{
              echo "<li><a class='' href='auth/login.html'>Login</a></li>"."<li><a class='nav-link' href='auth/register.html'>register</a></li>";
            }
          ?>
        </ul>
      </div>
    </header>

    <main>
      <article class="form-l">
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
      </article>
      <aside class="topics">
        <ul>
          <li><a href="../dashboard/">Dashbord</a></li>
        </ul>
      </aside>
    </main>

    <footer>
      <div class="parts">
        <div class="parta">
          <p class="">This is a website,<em>Managed and Maintained by Hezekiah Elisha</em>, dedicated to share technology knowledge whenever
            required or acquired. Our main goal is to improve technology use in any
            field covered</p>
        </div>
        <hr>
        <div class="partb">
          <p>Find us on social media:</p>
        </div>
        <hr>
      </div>
      <div class="last">
        <p><span>&copy;</span>2021 The Tech Archlight. All rights served</p>
      </div>
    </footer>

  </body>
</html>
