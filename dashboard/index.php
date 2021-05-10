<?php
  session_start();
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard :: Tech Archlight</title>
    <link rel="icon" href="../images/favicon1.png" type="image/gif" sizes="16x16">
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
    <header class="navbar">
    <div class="brand">
      <span>The Tech Archlight</span>
    </div>
    <div class="links">
      <ul>
        <li><a href="../index.php">Home</a></li>

        <?php
          if(isset($_SESSION['loggedin'])){
            echo "<li><a class='' href='../auth/profile.php'>Hi, ".$_SESSION['name']."</a></li>"."<li><a class='' href='../logout.php'>Log Out</a></li>";
          // header('Location : auth/login.html');
          // exit;
          }else{
            echo "<li><a class='nav-link' href='../auth/login.html'>Login</a></li>"."<li><a class='nav-link' href='../auth/register.html'>register</a></li>";
          }
        ?>
      </ul>
    </div>
  </header>
  <main>
    <article class="">
      <h2>Available Blogs</h2>
      <?php
        $query = "SELECT `username`, `title`, `description`, `article`, `topic`, `time_published` FROM `content`";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)>0){
          echo "<div class='blog-detail'>";
          while($row = mysqli_fetch_assoc($result)){
            echo"<div class='blog-item'><br>Author: ".$row['username']
            ."<br>Blog title: ".$row['title']
            ."<br>Description: ".$row['description']
            ."<br>Article: ".$row['article']
            ."<br>Topic: ".$row['topic']
            ."<br>Day Published: ".$row['time_published']."</div>";
          }
          echo "<button name='delete' >Delete</button>";
          echo "</div>";
        }else{
            echo "no content yet";
            echo "";
        }

       ?>
    </article>

    <aside class="">
      <div class="topics">
        <h3>Want to publish a blog? Click here:</h3>
        <ul>
          <li><a href='blog.php' target='_blank'>BLOG</a></li>
        </ul>
      </div>
      <h3>Available Bloggers</h3>
      <div class="topics">
      <?php
      $queryA = "SELECT `username` FROM `accounts`";
      $result = mysqli_query($conn, $queryA);

      if(mysqli_num_rows($result)>0){
        echo "<ul>";

        while($row1 = mysqli_fetch_assoc($result)){
          echo"<li>"
          .$row1['username']
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
