<?php

    session_start();
    session_status();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0f2026">
  <title>The Tech Archlight :: Home</title>
  <link rel="icon" href="images/favicon1.png" type="image/gif" sizes="16x16">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Testing</a></li>
        <?php
          if(isset($_SESSION['loggedin'])){
            echo "<li><a class='nav-link' href='auth/profile.php'>Hi, ".$_SESSION['name']."</a></li>"."<li><a class='nav-link' href='logout.php'>Log Out</a></li>";
          // header('Location : auth/login.html');
          // exit;
          }else{
            echo "<li><a class='nav-link' href='auth/login.html'>Login</a></li>"."<li><a class='nav-link' href='auth/register.html'>register</a></li>";
          }
        ?>
      </ul>
    </div>
  </header>
  <main>
    <article class="">
      <h1>Where learning meets reality</h1>
      <p>Tech archlight is a website designed to help programming newbies to keep up with the current trends and to unblock them from common challenges or bugs that are faced by many users accross the programming community. At tech archlight, we also help any request placed by any user to help them get unblocked making the website more interactive and efficient as intended. Check out the developer's portfolio...<a href="https://hezekiah-elisha.github.io/portfolio/" target="_blank">Read More...</a></p>
      <p>"It is only when they go wrong that machines remind you how powerful they are.” a quote from Clive James' book, <em>The Crystal bucket</em>. The quote has and will always show the need for a technologist of any age to always keep track of the current trand of fixing errors in one way of the other. In many ways during the commence of my career I have had the challenge of finding out how to fix simple bugs in my computer and to my codes too.
      The process of solving these challenges had quite fatal effects to my results. </p>
    </article>
    <aside class="">
      <form class="" action="index.html" method="post">
        <p>search here:</p>
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

    <!-- <div class="message col-lg-4 col-md-6 col-sm-12 col-xs-12">
      <p>Welcome to <span>The Tech Archlight</span></p>

    </div> -->
    <!-- <p><span>Photo by <a href="https://unsplash.com/@alexkixa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Alexandre Debiève</a> on <a href="https://unsplash.com/s/photos/technology?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span></p>
  </div>

  <div id="main-content" class="container-1">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="d-none d-lg-block aside text-center">
              <h2>About Tech Archlight</h2>
              <img src="images/secondImage.jpg" id="dev" class="img-fluid" alt="">
              <span id="aside-img">Photo by <a href="https://unsplash.com/@florianolv?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Florian Olivo</a> on <a href="/t/technology?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></span>

                <p>Tech archlight is a website designed to help programming newbies to keep up with the current trends and to unblock them from common challenges or bugs that are faced by many users accross the programming community. At tech archlight, we also help any request placed by any user to help them get unblocked making the website more interactive and efficient as intended. Check out the developer's portfolio...<a href="https://hezekiah-elisha.github.io/portfolio/" target="_blank">Read More...</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">

          <article class="">
            <p>"It is only when they go wrong that machines remind you how powerful they are.” a quote from Clive James' book, <em>The Crystal bucket</em>. The quote has and will always show the need for a technologist of any age to always keep track of the current trand of fixing errors in one way of the other. In many ways during the commence of my career I have had the challenge of finding out how to fix simple bugs in my computer and to my codes too.
            The process of solving these challenges had quite fatal effects to my results. </p>
              <!-- <div class="code-snip">
                <code id="codeCopy">Here is a sample, I dont know why I cant see it. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code><br>
                <button type="button" name="button" class="btn btn-outline" onclick="copy()">Copy to clipboard</button>
              </div>


            </ul>
          </article>
        </div>

        <div class="col-lg-3 col-md-12">
          <div class="aside">
            <h2>Top Stories</h2>
            <div class="aside-item text-center"><a href="#" class="aside-item-link">Android</a></div><br>
            <div class="aside-item text-center"><a href="#" class="aside-item-link">Kotlin</a></div><br>
            <div class="aside-item text-center"><a href="#" class="aside-item-link">Java</a></div><br>
            <div class="aside-item text-center"><a href="#" class="aside-item-link">HTML</a></div><br>
            <div class="aside-item text-center"><a href="#" class="aside-item-link">CSS</a></div><br>
            <div class="aside-item text-center"><a href="#" class="aside-item-link">Music</a></div>
          </div>
            <div class="d-none d-lg-block aside">
              <label for="">Give us your feedback through our social media accounts: </label>
              <a href="#" class="" target="_blank"><img src="images/facebook.svg" class="icon" alt=""></a>
              <a href="#" class="" target="_blank"><img src="images/youtube.svg" class="icon" alt=""></a>
              <a href="#" class="" target="_blank"><img src="images/github.svg" class="icon" alt=""></a>
              <a href="#" class="" target="_blank"><img src="images/twitter.svg" class="icon" alt=""></a>
              <a href="#" class="" target="_blank"><img src="images/instagram.svg" class="icon" alt=""></a>
              <a href="#" class="" target="_blank"><img src="images/linkedin.svg" class="icon" alt=""></a>
              <a href="#" class="" target="_blank"><img src="images/pinterest.svg" class="icon" alt=""></a>
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
