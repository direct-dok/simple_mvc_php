<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div id="wrapper">
        <div id="header">
            <div class="header__logo-name-site">
                <div class="header__logo">
                    <a href="/">
                        <img src="/img/logo.png" alt="Логотип">
                    </a> 
                </div>
                <div class="header__name-site">
                    <p>Продажа автомобилей</p>
                    <p>Автомобили любых марок по самым лучшим ценам</p>
                </div>
            </div>
            <div class="header__contact">
                <p>+7 (495) 888-777-33-21</p>
            </div>
        </div>
        <div id="wraper__content">
            <div id="content">
                <?php include 'application/views/'.$viewContent ?>
            </div>
            <div id="sidebar">
                <ul class="sidebar__nav">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/product">Товары</a></li>
                    <li><a href="/contact">Контакты</a></li>
                </ul>
                
            </div>
        </div>
        <div id="footer">
            <p>Ещё несколько десятилетий назад замена ATF в процессе эксплуатации считалась обязательной операцией после пробега в 60-100 тысяч км. Сегодня некоторые производители объявляют свои жидкости ATF вечными, не требующими замены до конца жизни АКПП.</p>
        </div>
    </div>
</body>
</html>