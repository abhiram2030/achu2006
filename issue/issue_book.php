<?php
include '../db.php';

if (isset($_POST['submit'])) {
    $book_id = $_POST['book_id'];
    $member_id = $_POST['member_id'];

    $sql = "INSERT INTO issued_books (book_id, member_id) VALUES ('$book_id','$member_id')";
    if ($conn->query($sql) === TRUE) {
        echo "Book issued!";
    } else {
        echo "Error:". $conn->error;
    }
}

$books = $conn->query("SELECT * FROM books WHERE book_id NOT IN (SELECT book_id FROM issued_books)");

$members = $conn->query("SELECT * FROM members");
?>
<link rel="stylesheet" href="../css/style.css">

<h2>Issue Book</h2>
<form method="post">
    <label>Book:</label>
    <select name="book_id" required>
        <option value="">-- Select Book --</option>
        <?php while($b = $books->fetch_assoc()){ ?>
            <option value="<?= $b['book_id']; ?>"><?= $b['title']; ?> (<?= $b['author']; ?>)</option>
        <?php } ?>
    </select>
    <br><br>

    <label>Member:</label>
    <select name="member_id" required>
        <option value="">-- Select Member --</option>
        <?php while($m = $members->fetch_assoc()){ ?>
            <option value="<?= $m['member_id']; ?>"><?= $m['name']; ?> (<?= $m['email']; ?>)</option>
        <?php } ?>
    </select>
    <br><br>

    <button type="submit" name="submit">Issue</button>
</form>

<a href="../index.php">Home</a>