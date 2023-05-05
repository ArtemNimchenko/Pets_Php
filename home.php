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

<section class="home" id="home">

    <div class="content">
        <h3>Породисті тварини</h3>
        <p>Можете придбати для себе представника чистої породи</p>
        <a href="tvarini" class="btn">Перейти</a>
    </div>
    
</section>


<section class="tvarinki">

    <h1 class="heading"> Тварини </h1>

    <div class="box-container">

        <div class="box">
            <a href="tvarini">
            <div class="image">
                <img src="images/pet1.webp" alt="">
            </div></a>
            <div class="content">
                <h3>Доберман</h3>
                <div class="vik"> 2 місяці </div>
            </div>
        </div>


        <div class="box">
            <a href="tvarini">
            <div class="image">
                <img src="images/pet2.webp" alt="">
            </div></a>
            <div class="content">
                <h3>Мопс</h3>
                <div class="vik"> 3 місяці </div>
            </div>
        </div>


        <div class="box">
            <a href="tvarini">
            <div class="image">
                <img src="images/pet3.webp" alt="">
            </div></a>
            <div class="content">
                <h3>Сфінкс</h3>
                <div class="vik"> Півроку </div>
            </div>
        </div>


        <div class="box">
            <a href="tvarini">
            <div class="image">
                <img src="images/pet4.jpg" alt="">
            </div></a>
            <div class="content">
                <h3>Британська кішка</h3>
                <div class="vik"> 1 місяць
                     </div>
            </div>
        </div>

    </div>

</section>


<footer>
    <div class="textf">Nimchenko</div>
</footer>

  
</body>
</html>
