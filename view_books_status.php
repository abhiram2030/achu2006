<?php include 'db.php'; ?>
<link rel="stylesheet" href="css/style.css">

<h2>Available Books</h2>
<?php
$sql = "SELECT * FROM books WHERE book_id NOT IN (SELECT book_id FROM issued_books)";
$result = $conn->query($sql);
?>
<table>
<tr><th>ID</th><th>Title</th><th>Author</th></tr>
<?php while($row=$result->fetch_assoc()){ ?>
<tr>
<td><?= $row['book_id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['author']; ?></td>
</tr>
<?php } ?>
</table>

<h2>Issued Books</h2>
<?php
$sql2 = "SELECT ib.issue_id, b.title, b.author, m.name, ib.issue_date
         FROM issued_books ib
         JOIN books b ON ib.book_id=b.book_id
         JOIN members m ON ib.member_id=m.member_id";
$result2 = $conn->query($sql2);
?>
<table>
<tr><th>Issue ID</th><th>Book</th><th>Author</th><th>Member</th><th>Date</th></tr>
<?php while($row=$result2->fetch_assoc()){ ?>
<tr>
<td><?= $row['issue_id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['author']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['issue_date']; ?></td>
</tr>
<?php } ?>
</table>

<a href="index.php">Home</a>