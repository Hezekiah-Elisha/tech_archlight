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
</head>
<body>
  <header class="navbar">
    <div class="brand">
      <span>The Tech Archlight</span>
    </div>
    <div class="links">
      <ul>
        <li><a href="index.php">Home</a></li>

        <?php
          if(isset($_SESSION['loggedin'])){
            echo "<li><a class='' href='auth/profile.php'>Hi, ".$_SESSION['name']."</a></li>"."<li><a class='' href='logout.php'>Log Out</a></li>";
          // header('Location : auth/login.html');
          // exit;
          }else{
            echo "<li><a class='' href='auth/login.php'>Login</a></li>"."<li><a class='' href='auth/register.php'>register</a></li>";
          }
        ?>
      </ul>
    </div>
  </header>
  <main>
    <article class="">
      <h1>Welcome to the Tech Archlight</h1>
      <h2><em>Where learning meets reality</em></h2>
      <p>Tech archlight is a website designed to help programming newbies to keep up with the current trends and to unblock them from common challenges or bugs that are faced by many users accross the programming community. At tech archlight, we also help any request placed by any user to help them get unblocked making the website more interactive and efficient as intended. Check out the developer's portfolio...<a href="https://hezekiah-elisha.github.io/portfolio/" target="_blank">Read More...</a></p>
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
      <form class="" action="index.html" method="post">
        <p>Looking for anything? Search it here:</p>
        <input type="text" name="" value="" placeholder="search">
      </form>
      <div class="topics">
        <h2>Available topics</h2>
        <ul>
          <li>html</li>
          <li>care</li>
          <li>Lorem</li>
          <li>Ipsum</li>
        </ul>
      </div>
    </aside>
  </main>
  <footer>
    <div class="parts">
      <div class="parta">
        <p class="text-lg-left text-sm-center text-md-right">This is a website,<em>Managed and Maintained by Hezekiah Elisha</em>, dedicated to share technology knowledge whenever
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




              <!-- <form class="" action="index.html" method="post">
                <label for="">Give us your feedback: </label>
                <input type="email" name="mail" value="" class="form-control" placeholder="E-Mail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <input type="text" name="" value="" class="form-control" placeholder="type here..."><br>
                <input type="checkbox" name="spam" value="" id="spam">
                <label class="form-check-label" for="spam">Receive our updates</label> <br>
                <button type="button" class="btn btn-primary" name="button">submit</button>
                <br><br>
              </form>
            </div>
        </div>
      </div>
  </div>

    <!-- footer
    <div class="footer">
      <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 d-lg-none">
          <div class="">
            <label for="">Give us your feedback through our social media accounts: </label>
            <a href="#" class="" target="_blank"><img src="images/facebook.svg" class="icon" alt=""></a>
            <a href="#" class="" target="_blank"><img src="images/youtube.svg" class="icon" alt=""></a>
            <a href="#" class="" target="_blank"><img src="images/github.svg" class="icon" alt=""></a>
            <a href="#" class="" target="_blank"><img src="images/twitter.svg" class="icon" alt=""></a>
            <a href="#" class="" target="_blank"><img src="images/instagram.svg" class="icon" alt=""></a>
            <a href="#" class="" target="_blank"><img src="images/linkedin.svg" class="icon" alt=""></a>
            <a href="#" class="" target="_blank"><img src="images/pinterest.svg" class="icon" alt=""></a>
          </div>


        <hr class="d-sm-block d-md-none d-lg-none d-xl-none">

        <div class="col-lg-6 col-md-6 col-sm-12 footer-med d-block">
          <p class="text-lg-left text-sm-center text-md-right">This is a website,<em>Managed and Maintained by Hezekiah Elisha</em>, dedicated to share technology knowledge whenever
            required or acquired. Our main goal is to improve technology use in any
            field covered</p>
        </div>
        <hr class="d-sm-block d-md-none d-lg-none d-xl-none">
      </div>
    </div>
    <center>
      <p><span>&copy;</span>2021 The Tech Archlight. All rights served</p>
    </center>
  </div>
-->


  <!--bootstrap js-->
  <!-- <script src="js/bootstrap.min.js" charset="utf-8"></script> -->
  <!-- <script src="js/ajax-utils.js" charset="utf-8"></script> -->
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
