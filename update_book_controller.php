<?php
include 'session.php';

include 'connection.php';

if(isset($_POST['btn_update'])){
    $id = $_POST['book_id'];
    $title = $_POST['book_title'];
    $author = $_POST['book_author'];
    $price = $_POST['book_price'];

//    $id = (int)$id;

    $insert = "UPDATE books SET title= '$title' ,author= '$author' ,price= '$price'
                    WHERE book_id = '$id';";

    $save = mysqli_query($conn, $insert);

    if (isset($save)){
        header('Location: home.php' );
    }else{
        echo "Book update unsuccessfully";

    }
}
