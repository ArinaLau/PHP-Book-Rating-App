<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Book Rating App</title>
</head>
<body>
        <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'book_app') or die("Cannot connect to server.".mysqli_error($conn));

                $id = $_GET["id"];

                $sql = "SELECT * FROM books where id='$id'";

                $result=mysqli_query($conn,$sql) or die("Cannot execute sql.");

                $row=mysqli_fetch_array($result,MYSQLI_BOTH);

                $title = $row[1];
                $rating = $row[2];
            
        ?>

        <div class="container">
            
        <h2 class="pt-3">Edit Book</h2>
            
            <form method="POST" action="editBookProcess.php">
            
                <div class="form-group">
                    <label for="title">Book Title: </label>
                    <input type="text" class="form-control" name="title" placeholder="Book Title..." value=<?php echo "$title"?>>
                </div>
                
                <div class="form-group">
                    <label for="rating">Book Rating: </label>
                    <input type="text"  class="form-control" name="rating" placeholder="Book Rating..."value=<?php echo "$rating"?>>
                </div>
                            
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-info float-right" onClick="location.href='index.php'">Cancel</button>
            </form>

        </div>
</body>
</html>