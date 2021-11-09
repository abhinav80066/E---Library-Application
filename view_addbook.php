<!DOCTYPE html> 
<html> 
  
<head> 
    <title>view book</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="view_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<?php require 'nav_bar.php'; ?>
<body style="background-color:#f1f1f1">
<div class="container-fluid">
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times</span> 
    <strong>BOOK ADDED SUCCESSFULLY </strong> 
  </div>
  <br>
  <h2 class="display-5"> BOOK DETAILS </h2>
  <br>
  <div class="row no-gutters">
    <div class ="col-12 col-md-8 order-md-first">
      <table class="table table-info table-borderless table responsive">
        <tr> 
          <td>BOOK TITLE: </td>
          <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              if(empty($_POST['title'])){
                  header('Location: addbook.php?error=Title+is+missing');
                  exit();
              }

              else if(empty($_POST['author'])){
                  header('Location: addbook.php?error=author+missing');
                  exit();

              } 
            }


          ?> 
          <?php

            $user = 'root';
            $pass = '';
            $db = 'testdb';

            $db = new mysqli('localhost',$user, $pass, $db) or die("unable to connect");

            //echo"Great work!!!";
            $title = $_REQUEST['title']; 
            $author =  $_REQUEST['author'];  
            $image_url = $_REQUEST['image_url'];  
            $description = $_REQUEST['description']; 
            $book_pdf = $_REQUEST['book_pdf']; 
              
            // Performing insert query execution
            $sql = "INSERT INTO books VALUES ('$title','$author',' ','$image_url','$description','$book_pdf')"; 

            if(mysqli_query($db, $sql)){ 
                echo " ";  }
            else{ 
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($db); 
              }
            $id=mysqli_insert_id($db);
            // Close connection 
            mysqli_close($db); 

          ?>
    
          <td><?=$title;?></td>
          </tr>
          <tr>
          <td>AUTHOR:</td>
          <td><?=$author;?></td>
          </tr>
          <tr>
          <td>DESCRIPTION:</td>
          <td><?=$description?></td>
        </tr>
      </table>
    </div>
    <div class="col-12 col-md-4">
      <img  src= "<?=$image_url;?>" alt="No Image Available"  width="100%" height="auto">
    </div>
  </div>
</div>
<div class="button-container">
  <a class="btn btn-info btn-lg" href="<?=$book_pdf ?>" >READ THIS BOOK </a></button>
</div>
<div class="button-container">
  <a class="btn btn-secondary btn-lg" href="editbook.php?book_id=<?=$id; ?>" role="button">EDIT BOOK DETAILS</a></button>
</div>
<div class="button-container">
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
  DELETE THIS BOOK
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      ARE YOU SURE TO DELETE THIS BOOK
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
        <a href="homepage.php?id=<?=$id; ?>" role="button" class="btn btn-danger popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">YES</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>

  
