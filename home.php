<?php
include 'session.php';
require_once 'connection.php';

$select = "select * from books order by book_id desc ";
$books = mysqli_query($conn, $select);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="d-flex justify-content-between mb-3" style="background-color: #1e7e34; margin-top: -25px;">
    <h2 class=" m-3 p-3">Book Register</h2>
    <a class=" m-3 p-3" href="logout.php">Log Out</a>
</div>

<div class="container">
    <div class="mb-2">
        <a href="register_book.php">
            <button type="submit" class="btn btn-primary ml-3 p-2">Register New Book</button>
        </a>

    </div>

    <div class="">
        <table class="table w-100">
            <thead class="thead-dark">
            <tr>
                <td>Book Title</td>
                <td>Book Author</td>
                <td>Book Price</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            <?php while ($rows = mysqli_fetch_assoc($books)): ?>
                <tr>
                    <td><?= $rows['title']; ?></td>
                    <td><?= $rows['author']; ?></td>
                    <td>Ksh.<?= $rows['price']; ?></td>
                    <td><a href="update_book.php?update&info=<?= $rows['book_id']; ?>">Update</a></td>
                    <td><a href="delete_book.php?delete&info=<?= $rows['book_id']; ?>">Delete</a></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
