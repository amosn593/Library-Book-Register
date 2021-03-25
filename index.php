<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container d-flex justify-content-center">
    <form action="register_controller.php" method="post" class="form mt-5 w-50">
        User Name: <input type="text" required class="form-control" name="name"> <br>
        Password: <input type="password" required class="form-control" name="pass"> <br>
        <div class="d-flex">
        <button type="submit" class="btn btn-info" name="login">Login</button>
        <p class="text-muted ml-5 mr-1">Don't have an account?</p>
        <a href="register.php">Register here</a>
        </div>
    </form>

</div>

</body>
</html>
