<?php

    session_start();
    session_status();

    $host = 'localhost';
  	$database_username = 'root';
  	$database_password = '';
  	$database = 'the_tech_archlight';

  	$conn = mysqli_connect($host,$database_username,$database_password,$database);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0f2026">
  <title>The Tech Archlight :: Home</title>
  <link rel="icon" href="images/favicon1.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Russo+One&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/7d4c5ce44e.js"></script>
</head>
<body>
  <header class="navbar">
    <div class="brand">
      <span>The Tech Archlight</span>
    </div>
    <div id="bars" onclick="openLinks()" >
      &#9776;
    </div>
    <div class="links" id="links" onblur="closeLinks()">
      <ul>
        <li><a href="index.php"><i class="fa fa-home"></i>  Home</a></li>

        <?php
          if(isset($_SESSION['loggedin'])){
            echo "<li><a class='' href='auth/profile.php'><i class='fa fa-id-badge'></i> Hi, ".$_SESSION['name']."</a></li>"."<li><a class='' href='logout.php'>Log Out</a></li>";
          // header('Location : auth/login.html');
          // exit;
          }else{
            echo "<li><a class='' href='auth/login.php'>Login  <i class='fa fa-sign-in'></i></a></li>"."<li><a class='' href='auth/register.php'>register  <i class='fa fa-book'></i></a></li>";
          }
        ?>
      </ul>
    </div>
  </header>
  <main>
    <article class="">
      <h1>Welcome to the Tech Archlight</h1>
      <h2><em>Where learning meets reality</em></h2>
      <p>Tech archlight is a website designed to help programming newbies to keep up with the current trends and to unblock them from common challenges or bugs that are faced by many techno-savvy users accross the programming community. At tech archlight, we also help any request placed by any user to help them get unblocked making the website more interactive and efficient as intended. Check out the developer's portfolio...<a href="https://hezekiah-elisha.github.io/portfolio/" target="_blank">Read More...</a></p>
      <p>"It is only when they go wrong that machines remind you how powerful they are.” a quote from Clive James' book, <em>The Crystal bucket</em>. The quote has and will always show the need for a technologist of any age to always keep track of the current trand of fixing errors in one way of the other. In many ways during the commence of my career I have had the challenge of finding out how to fix simple bugs in my computer and to my codes too.
      The process of solving these challenges had quite fatal effects to my results. </p>

      <div class="blogs">
        <?php
        $query = "SELECT `title`, `description`, `article`, `topic`, `time_published` FROM `content`";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)>0){

          while($row = mysqli_fetch_assoc($result)){
            echo "<div class='blog-card'><span class='title'>".$row['title']."</span>"
              ."<br>Description: ".$row['description']
              ."<br>Article: ".$row['article']
              ."<br>Topic: ".$row['topic']
              ."<br>Day Published: ".$row['time_published']."</div>";
          }
        }
         ?>
      </div>
    </article>
    <aside class="">
      <form class="" action="index.php" method="post">
        <p>Looking for anything? Search it here:</p>
        <input type="text" name="" value="" placeholder="search">
        <button type="button" name="tafuta">search</button>
        <div class="">
          <?php
            $queryS1 = "SELECT * FROM `content` WHERE `username`";
            $queryS3 = "SELECT * FROM `content` WHERE `description`";
            $queryS2 = "SELECT * FROM `content` WHERE `title`";
            $queryS4 = "SELECT * FROM `content` WHERE `article`";
            $queryS5 = "SELECT * FROM `content` WHERE `topic`";
            $fom = mysqli_query($conn, $queryS1);

            if(mysqli_num_rows($fom)>0){

              while($rows = mysqli_fetch_assoc($fom)){
                echo "<div class='blog-card'><span class='title'>".$rows['title']."</span>"
                  ."<br>Description: ".$rows['description']
                  ."<br>Article: ".$rows['article']
                  ."<br>Topic: ".$rows['topic']
                  ."<br>Day Published: ".$rows['time_published']."</div>";
              }
            }else{
              echo "nothing to display";
            }
           ?>
        </div>

      </form>
      <div class="topics">
        <h2>Available topics</h2>
        <?php
        $queryA = "SELECT `topic` FROM `content`";
        $result = mysqli_query($conn, $queryA);

        if(mysqli_num_rows($result)>0){
          echo "<ul>";

          while($row1 = mysqli_fetch_assoc($result)){
            echo"<li>"
            .$row1['topic']
            ."</li>";
          }
          echo "</ul>";

        }else{
            echo "No authors here";
        }
         ?>
      </div>
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
        <p>Mail us at:</p>
        <a href="mailto:admin@thetecharchlight.com">admin@thetecharchlight.com</a>
      </div>
      <hr>
    </div>
    <div class="last">
      <p><span>&copy;</span>2021 The Tech Archlight. All rights served</p>
    </div>


  </footer>


  <!--bootstrap js-->
  <script src="js/script.js" charset="utf-8"></script>

</body>
</html>
