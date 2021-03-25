<?php
include 'session.php';

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


<div>
    <div class="container-fluid">
        <form action="book_register_controller.php" method="post" autocomplete='off' class="m-2 p-2">
            <div class="row m-2 p-2">
                <div class="col-sm-12 col-md-12">
                    <label for="book_title" class="font-weight-bold">Book Title:</label><span
                        class="required">*</span>
                    <input type="text" class="form-control" id="book_title"
                           placeholder="Enter Book Title" name="book_title" required>
                </div>
            </div>
            <div class="row m-2 p-2">
                <div class="col-sm-6 col-md-6">
                    <label for="book_author" class="font-weight-bold">Book Author:</label><span
                        class="required">*</span>
                    <input type="text" class="form-control" id="book_author"
                           placeholder="Enter Book Author" name="book_author" required>
                </div>

                <div class="col-sm-6 col-md-6">
                    <label for="book_price" class="font-weight-bold">Book Price:</label><span
                        class="required">*</span>
                    <input type="number" class="form-control" id="book_price"
                           placeholder="Enter Book Quantity" name="book_price" required>
                </div>

            </div>
            <div class="row m-2 p-2 d-flex justify-content-center">
                <button type="submit" name="btn_reg" class="btn btn-info outline">Register Book</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
