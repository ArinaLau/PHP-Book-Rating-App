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
            $conn = mysqli_connect('localhost', 'root', '', 'book_app') or die("Cannot connect to server.".mysqli_error($conn));

            $id = $_POST["id"];
            $title = $_POST["title"];
            $rating = $_POST["rating"];

            $sql_update = "UPDATE books SET title = '$title', rating = '$rating' where id = '$id'";

            $result = mysqli_query($conn, $sql_update) or die("Cannot execute sql. ");

            if($result){
                echo "<div class='pt-3'><div class='alert alert-success pt-3' role='alert'>Successfully updated the data to database</div></div>";
            }
            else{
                echo "<div class='pt-3'><div class='alert alert-danger pt-3' role='alert'>ERROR: " +  mysqli_error($conn) + "</div></div>";
            }

            header('Refresh: 2; URL=index.php');
        ?>
    </div>
</body>
</html>