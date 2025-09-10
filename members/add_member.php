<?php
include '../db.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("INSERT INTO members (name,email,phone) VALUES ('$name','$email','$phone')");
    echo "Member added! <a href='list_members.php'>View Members</a>";
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Add Member</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    <button type="submit" name="submit">Add Member</button>
</form>
<a href="../index.php">Home</a>