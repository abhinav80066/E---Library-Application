<html>
<head>
<title>E-Library</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg py-4 navbar-light bg-light">
<span class="navbar-brand mb-0 h1"> WELCOME TO THE LIBRARY </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">HOME <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addbook.php">ADD BOOK</a>
      </li>
    </ul>
  </div>
</nav>

<?php  require 'database.php'; ?>
<?php  require 'delete.php'; ?>

<body style="background-color:#f1f1f1">
<br>
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 g-4">
    <?php foreach($results as $result) : ?>
    <div class ="col md-3">
        <div class="card text-center bg-light.bg-gradient mb-3" style="max-width: 430px;" >
            <div class="row g-0;">
                <div class="col-md-4">
                    <img  src= "<?= $result->image_url;?>"  alt="No Image Available"  height="240px" width="170px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $result->title; ?></h5>
                        <p class="card-text"><?= $result->author; ?>.</p>
                        <p class="card-text"><small class="text-muted"><br></small></p>
                        <a href="view_details.php?id=<?= $result->book_id ?>" class="card-link">MORE DETAILS</a>
                    </div>  
                </div>
            </div>      
        </div>
    </div>    
<?php endforeach; ?> 
</div>
</div>
<footer> @copyright ColoredCow </footer>
</body>
</html>   