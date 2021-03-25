<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container d-flex justify-content-center">
    <form action="register_controller.php" method="post" class="form mt-5 w-50">
        User Name: <input type="text" required class="form-control" name="name"> <br>
        Email: <input type="email" required class="form-control" name="email"> <br>
        Password: <input type="password" required class="form-control" name="pass"> <br>
        Confirm Password: <input type="password" required class="form-control" name="pass_con"> <br>
        <div class="d-flex">
            <button type="submit" class="btn btn-info" name="register">Register</button>
            <p class="text-muted ml-5 mr-1">Already have an account?</p>
            <a href="index.php">Login here</a>
        </div>
    </form>

</div>

</body>
</html>
