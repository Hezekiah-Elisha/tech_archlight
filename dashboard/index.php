<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Publich a Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon1.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Russo+One&display=swap" rel="stylesheet">
    <style media="screen">
      #editor{
        /* color: #fff !important; */
      }
    </style>

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
                echo "<span>hi, ".$_SESSION['name']."</span>";

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

    <div class="dashboard">
      <div class="dash-main">

      </div>
      <div class="dash-details">

      </div>
    </div>


  </body>
</html>
