<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/home') {
    include 'home.php';

} elseif ($url == '/tvarini') {
    include 'tvarini.php';

} elseif ($url == '/pro_nas') {
    include 'pro_nas.php';

} elseif ($url == '/reg') {
    include 'register.php';

} elseif ($url == '/vhid') {
    include 'vhid.php';

}  

 ?>
