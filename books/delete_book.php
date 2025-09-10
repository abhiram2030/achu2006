<?php
include '../db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['book_id'];
    $conn->query("DELETE FROM books WHERE book_id='$id'");
    echo "Book deleted!";
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Delete Book</h2>
<form method="post">
    <input type="number" name="book_id" placeholder="Book ID" required>
    <button type="submit" name="submit">Delete</button>
</form>
<a href="../index.php">Home</a>