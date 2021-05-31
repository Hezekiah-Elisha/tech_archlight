<?php
  session_start();
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
      <article class="">
        <h1><?php
          $subject = $_GET['subject'];
           echo $subject;
        ?></h1>
        <p><?php
          $web = $_GET['web'];
          echo "Please click back to try again<a href=".$web.">Back</a>";
        ?></p>
      </article>
    </main>

  </body>
  </html>
