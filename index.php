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
    <h2 class="pt-3">Book Rating App</h2>

        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'book_app') or die("Cannot connect to server.".mysqli_error($conn));
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);
        ?>

    <table class="table table-bordered table-hover table-condensed">
            
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <!-- <tr>
                    <td>The ABC Murders</td>
                    <td>4.9</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr> -->

            <?php 
                // $i=0;
                while($data=mysqli_fetch_array($result, MYSQLI_BOTH)){
                    $id = $data[0];
                    $title = $data[1];
                    $rating = $data[2];
                
                    echo "<tr> 
                            <td> $title </td>
                            <td> $rating </td>
                            <td>                           
                                <button class='btn btn-info' onClick=location.href='editBook.php?id=$id'>Edit</button>
                                <button class='btn btn-danger' onClick=location.href='deleteBookProcess.php?id=$id'>Delete</button>
                            </td>
                        </tr>";
                }
            ?>
            
            </tbody>
        </table>
        <button class="btn btn-info float-right" onClick="location.href='addBook.html'">Add New Book</button>
</body>
</html>
