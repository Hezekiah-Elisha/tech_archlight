<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Publish a Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../images/favicon1.png" type="image/gif" sizes="16x16">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
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
            echo "<li><a class='' href='../auth/profile.php'>Hi, ".$_SESSION['name']."</a></li>"."<li><a class='' href='../logout.php'>Log Out</a></li>";
          // header('Location : auth/login.html');
          // exit;
          }else{
            echo "<li><a class='' href='../auth/login.html'>Login</a></li>"."<li><a class='' href='../auth/register.html'>register</a></li>";
          }
        ?>
      </ul>
    </div>
  </header>

  <main>
    <article class="">
      <div class="blog-detail">
      <form class="login-form" action="blog.php" method="post"><br>
        <input type="text" name="title" placeholder="Title" value=""><br>
        <input type="text" name="description" value="" placeholder="description"><br>
        <textarea type="text" name="editor" placeholder="article" value="" id="editor"></textarea><br>
        <!-- <div id="editor" style="color:black;">

        </div> -->
        <input type="text" name="topic" value="" placeholder="topic"><br>
        <button type="submit" name="publish" class="btn btn-dark">Publish</button>
      </form>
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

    <script src="ck/ckeditor.js" charset="utf-8"></script>
    <script type="text/javascript">
      ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
          console.error(error)
        });

    </script>
  </body>
</html>
<?php
if(isset($_POST['publish'])){
  $host = 'localhost';
  $database_username = 'root';
  $database_password = '';
  $database = 'the_tech_archlight';

  $conn = mysqli_connect($host, $database_username, $database_password, $database);


    $title = $_POST['title'];
    $description = $_POST['description'];
    $article = $_POST['editor'];
    $topic = $_POST['topic'];
    $author = $_SESSION['name'];

    if(($title || $description || $article || $topic) != null){
      $sql = "INSERT INTO `content`(`username`, `title`, `description`, `article`, `topic`) VALUES ('$author','$title','$description','$article','$topic')";
      if(mysqli_query($conn,$sql)) {
        header("Location: index.php");
        // echo "added successfully".$article;
      }else{
        header("Location: blog.php");
        echo "no record added".$article;
      }
    }else{
      exit();
    }
}
 ?>
