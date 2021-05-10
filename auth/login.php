<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0f2026">
    <title>Tech Archlight :: Log In</title>
    <link rel="icon" href="../images/favicon.png" type="image/gif" sizes="16x16">
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
            echo "<li><a class='' href='auth/profile.php'>Hi, ".$_SESSION['name']."</a></li>"."<li><a class='' href='../logout.php'>Log Out</a></li>";
          }else{
            echo "<li><a class='' href='register.php'>register</a></li>";
          }
        ?>
      </ul>
    </div>
  </header>

  <main>
    <article class="login">
      <div class="form-l">
        <form class="login-form" action="authentication.php" method="post">
          Log IN
          <input type="text" name="username" id="username" placeholder="Username" value="" required><br>
          <input type="password" name="password" id="password" placeholder="Password" value="" required><br><br>
          <input type="submit" class="" name="" value="submit">
        </form>
        A new member? <a href="register.php">Register here</a>
      </div>
    </article>
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
