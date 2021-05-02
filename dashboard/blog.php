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

    <form class="login-form" action="index.php" method="post"><br>
      <input type="text" name="title" placeholder="Title" value=""><br>
      <input type="text" name="description" value="" placeholder="description"><br>
      <textarea type="text" name="editor" placeholder="article" value="" id="editor"></textarea><br>
      <!-- <div id="editor" style="color:black;">

      </div> -->
      <input type="text" name="topic" value="" placeholder="topic"><br>
      <button type="submit" name="publish" class="btn btn-dark">Publish</button>
    </form>

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
        header("Refresh : 3; url= dashboard/index.php");
        // echo "added successfully".$article;
      }else{
        header("Refresh : 3; url= index.php?emptyFields");
        echo "no record added".$article;
      }
    }else{
      exit();
    }
}
 ?>
