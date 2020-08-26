<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Book Rating App</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    
      <?php

      // Connect to a database
      $conn = mysqli_connect('localhost', 'root', '', 'book_app') or die("Cannot connect to server.".mysqli_error($conn));

      // Check for POST variable
      $title = $_POST['title'];
      $rating = $_POST['rating'];      

      $query = "INSERT INTO books(title, rating) VALUES('$title', '$rating')";

      if(mysqli_query($conn, $query)){
        echo "<div class='pt-3'><div class='alert alert-success pt-3' role='alert'>New Book Successfully Added</div></div>";
        // echo 'New Book Added...';

      } else {
        echo "<div class='pt-3'><div class='alert alert-danger pt-3' role='alert'>ERROR: " +  mysqli_error($conn) + "</div></div>";
        // echo 'ERROR: '. mysqli_error($conn);
      }
        header('Refresh: 2; URL=addBook.html');

      ?>

    </div>
  </body>
</html>