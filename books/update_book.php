<?php
include '../db.php';

// Update when form submitted
if (isset($_POST['submit'])) {
    $id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql = "UPDATE books SET title='$title', author='$author' WHERE book_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Book updated!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
<link rel="stylesheet" href="../css/style.css">

<h2>Update Book</h2>
<form method="post">
    <input type="number" name="book_id" placeholder="Book ID" required>
    <input type="text" name="title" placeholder="New Title" required>
    <input type="text" name="author" placeholder="New Author" required>
    <button type="submit" name="submit">Update</button>
</form>

<a href="../index.php">Home</a>