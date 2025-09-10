<?php
include '../db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['member_id'];
    $conn->query("DELETE FROM members WHERE member_id='$id'");
    echo "Member deleted!";
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Delete Member</h2>
<form method="post">
    <input type="number" name="member_id" placeholder="Member ID" required>
    <button type="submit" name="submit">Delete</button>
</form>
<a href="../index.php">Home</a>