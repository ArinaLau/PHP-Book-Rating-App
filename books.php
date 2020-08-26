<?php 
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'book_app');

$query = 'SELECT * FROM books';

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($books);