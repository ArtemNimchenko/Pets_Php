<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);



    if (!($login && $email && $password) =='') {
    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
    header('Location: ../vhid');}
    else{
        $_SESSION['message'] = 'Введіть дані для реєстрації!';
        header('Location: ../reg');
    }


?>
