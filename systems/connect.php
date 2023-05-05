<?php
    $connect = mysqli_connect('ART', 'root', '', 'bd');

    if (!$connect) {
        die('Помилка!');
    }