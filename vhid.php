<?php
session_start();

if ($_SESSION['user']) {
    header('Location: home');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>

    <link rel="stylesheet" href="css/main.min.css">

</head>


<header>
    <input type="checkbox" name="" id="knop">
    <label for="knop"> <img src="images/menu.png" id="phmenu"></label>
    <a href="home" class="nazva">P E T S</a>
    <nav class="navbar">
        <a href="home">Головна</a>
        <a href="pro_nas">Про нас</a>
        <a href="tvarini">Тварини</a>
    </nav>

    <div >
    <?php
if(isset($_SESSION['user'])):
?>
 <a href="systems/logout.php" class="btn">Вийти</a>
<?php else: ?>
    <a href="vhid" class="btn">Ввійти</a>
<?php endif; ?>
    </div>
</header>
<body>

<div class="ar">

    <form action="systems/signin.php" method="post">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit">Ввійти</button>
        <p>
            У вас немає акаунту? - <a href="reg">зареєструйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</div>
<footer>
    <div class="textf">Nimchenko</div>
</footer>


</body>
</html>