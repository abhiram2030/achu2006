<?php
include '../db.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $conn->query("DELETE FROM members WHERE member_id='$id'");
    echo "Member deleted!";
}

$result = $conn->query("SELECT * FROM members");
?>
<link rel="stylesheet" href="../css/style.css">

<h2>Members List</h2>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php while($row=$result->fetch_assoc()){ ?>
<tr>
    <td><?= $row['member_id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['phone']; ?></td>
    <td><?= $row['email']; ?></td>
    <td>
        <a href="update_member.php?id=<?= $row['member_id']; ?>">Edit</a> | 
        <a href="?delete_id=<?= $row['member_id']; ?>" onclick="return confirm('Delete this member?');">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

<a href="../index.php">Home</a>