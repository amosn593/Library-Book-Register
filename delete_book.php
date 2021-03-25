<?php
include 'session.php';
require_once 'connection.php';

$id = $_GET['info'];


$delete = "DELETE FROM books WHERE book_id = '$id';";

$save = mysqli_query($conn, $delete);

if (isset($save)){
    header('Location: home.php' );
}else{
    echo "Book deletion unsuccessfully";

}
