<?php
session_start();
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
<body>


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




<section class="about" id="about">

    <h1 class="heading"> <span> Про </span> Нас </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/3.mp4" loop autoplay muted></video>
            <h3>Найкращі тваринки для тебе</h3>
        </div>

        <div class="content">
            <h3>P E T S</h3>
            <p>Черкаський магазин з продажу породистих тварин. Ми намагаємося зробити так, щоб сім’ї отримували по-справжньому породистих і здорових членів родини. </p><br>
            <p>
                В наших руках знаходится близько 100 чистокровних тварин, які чекають на свого власника
            </p>
            <a href="tvarini" class="btn">Перейти</a>
        </div>

    </div>

</section>

<footer>
    <div class="textf">Nimchenko</div>
</footer>

</body>
</html>