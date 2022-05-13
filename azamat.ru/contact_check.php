<?php
    session_start();

    function redirect() {
        header("Location: index.php");
        exit;
    }

    $name = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = htmlspecialchars(trim($_POST['pass']));

    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email; 
    $_SESSION['pass'] = $pass; 

    if(strlen($name) <= 2) {
        $_SESSION['name_error'] = 'Введено неверное имя';
        redirect();
    }
    elseif(strlen($email) <= 3) {
        $_SESSION['email_error'] = 'Введён неверный email';
        redirect();
    }
    elseif(strlen($pass) < 10) {
        $_SESSION['password_error'] = 'Пароль должен содержать не меньше 10 символов';
        redirect();
    }
    else{
        $_SESSION['name_error'] = "";
        $_SESSION['email_error'] = "";
        $_SESSION['password_error'] = "";
    }




    