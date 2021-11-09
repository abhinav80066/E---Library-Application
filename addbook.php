  <!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="style.css">
<script src="validation.js"></script> 
      <title>E-Library</title>  
</head>
<div class="container-fluid">

<nav class="navbar navbar-expand-lg py-4 navbar-light bg-light">
<span class="navbar-brand mb-0 h1">THE LIBRARY </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="homepage.php">HOME <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">ADD BOOK</a>
      </li>
    </ul>
  </div>
</nav>
<body style="background-color:#f1f1f1">
<br>
<div class="centre">
<h2 class="display-5"> ADD A BOOK</h2>

  <form name="registrationForm" action="view_addbook.php" method="post" class="needs-validation" >
    <div class="mb-3 justify-content-md-center">
      <label for="book_title" class="form-label ">Enter Book Title(<span style="color:red">*</span>)</label>
      <input type="text"  name="title" class="form-control" id="myrequired" >
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Author of the book(<span style="color:red">*</span>)</label>
      <input type="text" name="author" class="form-control" id="validationCustom02" >
      <div class="invalid-feedback">
        Please provide a Author.
      </div>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload book cover picture</label>
      <input class="form-control" type="file" name="image_url" id="formFile">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Description of the book</label>
      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">pdf Url of the book</label>
      <textarea class="form-control" name="book_pdf" id="exampleFormControlTextarea1"></textarea>
    </div>
    <button type="submit" class="btn btn-success btn-lg" onclick="return validate()">SUBMIT</button>
    <button type="reset"  class="btn btn-danger btn-lg">RESET</button>
  </form>
  </div>
</div> 

</body>
</html>