<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="view_style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <script src="validation.js"></script> 
    <title>E-Library</title>
</head>
<?php require 'nav_bar.php'; ?>
<body style="background-color:#f1f1f1">
<br>
<!-- prefilling the form with old data -->
<?php

$book_id = $_GET['book_id'];

try{

	$pdo = new PDO('mysql:host=127.0.0.1; dbname=testdb','root', '');
}catch(PDOException $e) {
	die($e->getMessage());
}

$statement= $pdo->prepare('select * from books where book_id =('.$book_id.')');
if($statement->execute()){

    echo " ";
}
$result = $statement->fetchAll(PDO::FETCH_OBJ); 
?>

<div class="centre">
<h2 class="display-5"> EDIT BOOK DETAILS</h2>
<form name="registrationForm" action="view_editbook.php" method="post">
  <div class="mb-3 justify-content-md-center">
    <label for="book_title" class="form-label center">Edit Book Title(<span style="color:red">*</span>)</label>
    <input type="text"  name="title" class="form-control" id="validationCustom01"  value="<?=$result[0]->title;?>" >
    <div class="invalid-feedback">
      Please provide a Title
    </div>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label"> Edit Author of the book(<span style="color:red">*</span>)</label>
    <input type="text" name="author" class="form-control" id="validationCustom02"  value="<?=$result[0]->author;?>"  >
    <div class="invalid-feedback">
      Please provide a author
    </div>
  </div>
  <div class="mb-3">
  <label for="image_url" class="form-label">Edit book image url</label>
  <input class="form-control" type="text" name="image_url1" id="validationCustom04"  value="<?=$result[0]->image_url;?>">
  <input class="form-control" type="file" name="image_url" id="image_url">
   </div>
   <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description of the book</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"><?=$result[0]->description;?></textarea>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Book pdf url</label>
  <input type="text" name="book_pdf" class="form-control" id="validationCustom03"  value="<?=$result[0]->book_pdf;?>">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"></label>
  <input type="hidden" name="book_id" class="form-control" id="validationCustom03"  value="<?=$result[0]->book_id;?>">
  </div>
  <button type="submit" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal" onclick="return validate()">SUBMIT</button>
  <button type="reset"  class="btn btn-danger btn-lg">RESET</button>

</form>
</div>

</body>


</html>