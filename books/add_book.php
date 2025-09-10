<?php
include '../db.php';
if(isset($_POST['submit'])) {
	$title = $_POST['title'];
    	$author = $_POST['author'];
    	$sql="insert into books(title, author) values('$title','$author')";
	$res=mysqli_query($conn,$sql);
	if($res) {
		echo "Book added successfully! <a href='list_books.php'>View Books</a>";
	}
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Add Book</h2>
<form method="POST">
    Title: <input type="text" name="title" required><br>
    Author: <input type="text" name="author" required><br>
    <button type="submit" name="submit">Add Book</button>
</form>
<a href="../index.php">Home</a>