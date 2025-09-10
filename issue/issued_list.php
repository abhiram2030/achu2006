<?php
include '../db.php';

$sql = "SELECT ib.issue_id, b.title, m.name, ib.issue_date 
        FROM issued_books ib
        JOIN books b ON ib.book_id=b.book_id
        JOIN members m ON ib.member_id=m.member_id";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Issued Books</h2>
<table>
<tr><th>Issue ID</th><th>Book</th><th>Member</th><th>Date</th></tr>
<?php while($row=$result->fetch_assoc()){ ?>
<tr>
<td><?= $row['issue_id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['issue_date']; ?></td>
</tr>
<?php } ?>
</table>
<a href="../index.php">Home</a>