
<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost',$user, $pass, $db) or die("unable to connect");

        if (isset($_GET['id'])){
            $id=$_GET['id'];
         // Delete data in mysql from row that has this id 
         $sql="DELETE FROM books WHERE book_id=$id";
         if(mysqli_query($db, $sql)){
             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong> GREAT </strong> BOOK DELETED SUCCESSFULLY.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>';
         }
        else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($db); 
           }
          // if successfully deleted 
        }   
?>