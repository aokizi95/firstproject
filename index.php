<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">


    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tobesi">
        
    <div class="menu">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="register">
        <button type="submit" onclick="modalOpen()">Register</button>
    </div>
    </div>

    <div class="modal-main">
             <h1>Sign In</h1>
             <form action="reg.php" method="POST">
                 <input type="text" name="email" placeholder="Почта или телефон">
                 <input type="text" name="full_name" placeholder="Полное имя">
                 <input type="text" name="nickname" placeholder="Nickname">
                 <input type="password" name="password" placeholder="Введите пароль">
                 <input type="password" name="password2" placeholder="Подтвердить пароль">

                 <?php
                 if(isset($_GET['error']) && $_GET['error'] == 1){
                    ?>
                    <h2 class="text-danger">Толық енгіз!</h2>
                    <?php
                 } 
                 else if (isset($_GET['error']) && $_GET['error'] == 2){
                 ?>
                 <h2 class="text-danger">Пароль қате!</h2>
                 <?php
                 }
                 else if (isset($_GET['error']) && $_GET['error'] == 3){
                    ?>
                    <h2 class="text-danger">Тіркелген аккаунт!</h2>
                    <?php
                    }
                ?>
                 <button type="submit">Sign In</button>
                 <p>Dont have an account?</p>
                 <a href="">Sign Up</a>
             </form>
        </div>
        
    <div class="basty">
        <div class="text">
            <p>ЧТО МЫ ДЕЛАЕМ</p>
            <h1>Мы занимаемся <br>бизнесом,
                 а не<br> только<br> маркетингом</h1>
            <div class="p2">
            <p>Статья, очевидно, прибыла экспресс-высочайшим<br>
                мужчиной, сделавшим мальчика.Хозяйка разумная,<br> 
                вполне разумная. Быстрый может оправдать надежды <br>
                на умные деньги. Утешение произвести мужу мальчика <br>
                у нее был слух. Закон чужой принят,но пожелания. <br>
                Вы день действительно меньше, пока дорогой читать.<br>
                Считал использование посланным меланхоликом сочувствующим<br>
                благоразумию. О чувствую,если до пока нравится. Он вещь <br>
                быстрая этим после хождения нарисованной или.</p></div>
                <a>+7 (705) 455-8558</a>
        </div>
    <div class="image">
        <img src="aeo.png">
    </div>
    </div>
    <div class="bet2">
        <div class="textt">
        <p> О НАС</p>
        <h1>Мы готовы поделится</h1>
        <h1>советом и опытом</h1>
    </div>
    <div class="blok">
        <div class="blok1">
            <h1>Инвестиций</h1>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
        <div class="blok1">
            <h1>Финансовое планирование</h1>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
        <div class="blok1">
            <h1>Долговая помощь
            </h1>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
    </div>
    </div>

    <div class="modal">

        <a class="x" href="" onclick="modalClose()">X</a>
     </div>
 
     <script src="index.js"></script>
    
</body>
</html>