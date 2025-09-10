<?php
include '../db.php';

if (isset($_POST['submit'])) {
    $issue_id = $_POST['issue_id'];
    $conn->query("DELETE FROM issued_books WHERE issue_id='$issue_id'");
    echo "Book returned!";
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Return Book</h2>
<form method="post">
    <input type="number" name="issue_id" placeholder="Issue ID" required>
    <button type="submit" name="submit">Return</button>
</form>
<a href="../index.php">Home</a>