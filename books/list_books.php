<?php
include '../db.php';
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $conn->query("DELETE FROM books WHERE book_id='$id'");
    echo "Book deleted!";
}

$result = $conn->query("SELECT * FROM books");
?>
<link rel="stylesheet" href="../css/style.css">

<h2>Books List</h2>
<table>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Action</th>
</tr>
<?php while($row=$result->fetch_assoc()){ ?>
<tr>
    <td><?= $row['book_id']; ?></td>
    <td><?= $row['title']; ?></td>
    <td><?= $row['author']; ?></td>
    <td>
        <a href="update_book.php?id=<?= $row['book_id']; ?>">Edit</a> | 
        <a href="?delete_id=<?= $row['book_id']; ?>" onclick="return confirm('Delete this book?');">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

<a href="../index.php">Home</a>