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




<section class="section1 section-catalog">
    <div class="container1">
        <h2 class="page-title page-title--accent">Тварини</h2>
        <nav class="catalog-nav">
          <ul class="catalog-nav__wrapper">
            <li class="catalog-nav__item">
              <button class="catalog-nav__btn is-active" type="button" data-filter="all">Всі</button>
            </li>
            <li class="catalog-nav__item">
              <button class="catalog-nav__btn" type="button" data-filter="cats">Коти</button>
            </li>
            <li class="catalog-nav__item">
              <button class="catalog-nav__btn" type="button" data-filter="dogs">Собаки</button>
            </li>
            <li class="catalog-nav__item">
              <button class="catalog-nav__btn" type="button" data-filter="papugs">Папуги</button>
            </li>
          </ul>
        </nav >
  
     
   



      <div class="catalog">
  
        <div class="catalog__item" data-category="cats">
          <div class="tvarina catalog__tvarina">
            <img src="images/cat1.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Регдолл</h3>
              <p class="tvarina__description">Велика і велична кішка з характерним забарвленням. Перші кошенята породи регдол народилися в Каліфорнії в 1960-х роках. Ймовірно, вони з'явилися внаслідок схрещування білої самки перської кішки та бірманського самця.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">4500</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>

        <div class="catalog__item" data-category="cats">
          <div class="tvarina catalog__tvarina">
            <img src="images/cat2.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Сфінкс</h3>
              <p class="tvarina__description">Безшерста кішка з поведінкою та характером собаки. Представники породи належать до класу компаньйонів. Тому потребують уваги і зовсім несхожі на незалежних кішок, які прагнуть триматися від людини на відстані.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">6500</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>

        <div class="catalog__item" data-category="cats">
          <div class="tvarina catalog__tvarina">
            <img src="images/cat3.jpg" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Британська короткошерста</h3>
              <p class="tvarina__description">Одна з найстаріших порід кішок. Британська короткошерста є однією з найдавніших порід, хоча племінні книги, куди заносяться найкращі плідники, ведуться всього близько 100 років. Кішки британської породи невибагливі, мають чудове здоров'я. Активні, рухливі, легко звикають до людей.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">5000</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>








        <div class="catalog__item" data-category="dogs">
          <div class="tvarina catalog__tvarina">
            <img src="images/dog1.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Доберман</h3>
              <p class="tvarina__description">Порода короткошерстих службових собак, виведена в Німеччині, Тюрінгії, у місті Апольда наприкінці XIX століття Карлом Фрідріхом Луїсом Доберманом, названа на честь свого творця.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">5200</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>


        <div class="catalog__item" data-category="dogs">
          <div class="tvarina catalog__tvarina">
            <img src="images/dog2.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Мопс</h3>
              <p class="tvarina__description">Порода декоративних собак, були привезені з Китаю до Європи у XVI столітті та були популярні у Західній Європі та Нідерландах.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">4000</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>


        <div class="catalog__item" data-category="dogs">
          <div class="tvarina catalog__tvarina">
            <img src="images/dog3.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Бігль</h3>
              <p class="tvarina__description">Порода собак малого та середнього розміру. Належить до Групи гончаків, та має вигляд, схожий на фоксхаунд, але менший за розміром, з коротшими лапами та довшими і м'якшими вухами.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">6550</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>




        <div class="catalog__item" data-category="papugs">
          <div class="tvarina catalog__tvarina">
            <img src="images/papuga.jpg" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Корела</h3>
              <p class="tvarina__description">Птах родини какаду. Єдиний вид роду. Вони швидко приручаються і можуть вивчати окремі слова, а також мелодії, щоправда, голос у них надокучливий і одноманітний. Виведено кілька колірних варіацій корел — чисто білі, перлинні, строкаті та інші. Тривалість життя до 60-65 років.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">3000</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>


        <div class="catalog__item" data-category="papugs">
          <div class="tvarina catalog__tvarina">
            <img src="images/papuga2.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Жако</h3>
              <p class="tvarina__description">Жако вважається найбільш здатним видом серед цих птахів. У нього спокійний характер, він швидко звикає до людей і навчається розмовам. При цьому жако не просто розмовляє, а прив’язує свої слова до реальних дій. Якщо він захоче їсти, то так і скаже. Він вважає себе повноцінним членом сім’ї, тому вимагає до себе відповідного ставлення.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">3000</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>


        <div class="catalog__item" data-category="papugs">
          <div class="tvarina catalog__tvarina">
            <img src="images/papuga3.webp" alt="" class="tvarina__img">
            <div class="tvarina__content">
              <h3 class="tvarina__title">Нерозлучники</h3>
              <p class="tvarina__description">Маленькі пташки з красивим забарвленням і веселою вдачею. Але кращим вибором їх назвати складно. Вони погано піддаються дресируванню, не розмовляють, мають міцний дзьоб і дуже голосно кричать. Також даний вид – не найкращий вибір в сім’ю з дітьми. Але якщо вам потрібні красиві птахи, то такі вихованці будуть найкращим варіантом.</p>
            </div>
            <footer class="tvarina__footer">
 
              <div class="tvarina__bottom">
                <div class="tvarina__price">
                  <span class="tvarina__price-value">4500</span>
                  <span class="tvarina__currency">&#8372;</span>
                </div>
                <button class="btn tvarina__btn" type="button">Купити</button>
              </div>
            </footer>
          </div>
        </div>
       
      </div>


    </div>
  </section>

  <footer>
    <div class="textf">Nimchenko</div>
</footer>


<script src="js/myLib.js"></script>
<script src="js/catalog.js"></script>

    
</body>
</html>