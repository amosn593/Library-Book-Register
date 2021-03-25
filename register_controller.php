<?php

//Registering account
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_con = $_POST['pass_con'];

//    checking passwords match
    if ($pass === $pass_con) {
//      hash password and insert into database
        $pass = md5($pass);

        require_once 'connection.php';

        $insert = "INSERT INTO users (name, email, password) 
                    VALUES ('$name', '$email', '$pass');";

        $save = mysqli_query($conn, $insert);

        if (isset($save)) {
            header('Location: index.php');
        } else {
            echo "Account Registration unsuccessfully";

        }
    } else {
        echo "Two passwords did not match!!!";

    }

}

//Login account
if (isset($_POST['login'])) {

//    start session
    session_start();

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $pass = md5($pass);

    require_once 'connection.php';

    $select = "SELECT user_id FROM users WHERE name='$name' AND password='$pass' ";

    $result = mysqli_query($conn, $select);


//    checking passwords match
    if ($result) {
        $row = mysqli_num_rows($result);
        if($row == 1){
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];

            header('Location: home.php');
        }else{
            echo "Check your password or username, and try again!!!";

        }
//
    } else {
        echo "Check your password or username, and try again!!!";

    }

}
