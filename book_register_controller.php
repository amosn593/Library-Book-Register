<?php
include 'session.php';
require_once 'connection.php';

if(isset($_POST['btn_reg'])){
    $title = $_POST['book_title'];
    $author = $_POST['book_author'];
    $price = $_POST['book_price'];

    $insert = "INSERT INTO `books`(`title`, `author`, `price`) 
            VALUES ('$title','$author','$price')";

    $save = mysqli_query($conn, $insert);

    if (isset($save)){
        header('Location: home.php' );
    }else{
        echo "Book Register unsuccessfully";

    }
}