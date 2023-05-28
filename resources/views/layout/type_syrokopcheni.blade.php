<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('name')</title>
    <link rel="icon" type="image/png" href="../../../../css/photo/logo4.png">
    <link rel="stylesheet" type="text/css" href="../../../../css/type_syrokopcheni-css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <a href="#">
        <img src="../../../../css/photo/logo4.png" class="logo">
    </a>
    <nav>
        <ul class="menu">
            <li><a href="../index">ГОЛОВНА</a></li>
            <li><a href="../product">ПРОДУКЦІЯ</a></li>
            <li><a href="../contact.html">КОНТАКТИ</a></li>
            <li><a href="../about_us.html">ПРО НАС</a></li>
        </ul>
    </nav>
    <nav>
        <ul class="messangers">
            <li><a href="../basket.html"><img src="../../../../css/photo/shopping-basket-svgrepo-com.svg"></a></li>
            <li><a href="#"><img src="../../../../css/photo/viber.svg"></a></li>
            <li><a href="#"><img src="../../../../css/photo/telega.svg"></a></li>
            <li><a href="#"><img src="../../../../css/photo/insta.svg"></a></li>
        </ul>
    </nav>
    <a href="../phone-menu.html">
        <img src="../../../../css/photo/menu.svg" class="phone-menu">
    </a>
</header>
<main class="product">
    <div>
        <div>
            <p class="zag">@yield('name')</p>
            <a href="#" class="zamov">
                <div>
                    <p>В кошик</p>
                </div>
            </a>
        </div>
        <img src="../../../../css/photo/syrokopcheni/@yield('num').jpg">
    </div>
    <p class="txt1">Склад: грудоребрана частина з шийними та спинними хрящами з міжреберним м'ясом свинячих напівтуш без шкіри, натуральні спеції. 100 г продукту містить: білки – 5,5 г, жири – 45,0 г. Енергетична цінність – 427,0 ккал. Термін зберігання при температурі t від 0 до +6 °С та відносній вологості повітря 70-80% - 8 діб. Ціна - 130грн</p>
</main>
<footer class="footer">
    <a href="#">
        <img src="../../../../css/photo/logo4.png" class="logo2">
    </a>
    <ul class="fot">
        <li>
            <ul>
                <li><p>Coціальні мережі</p></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Telegram</a></li>
                <li><a href="#">Viber</a></li>
            </ul>
        </li>
        <li>
            <ul>
                <li><p>Місцезнаходження</p></li>
                <li>вул. Миру, буд. 100,</li>
                <li>смт.Куликівка, Чернігівський р-н,</li>
                <li>Чернігівська обл.,</li>
                <li>16300, Україна </li>
            </ul>
        </li>
        <li>
            <ul>
                <li><p>Контакти</p></li>
                <li>тел. (04643) 2-22-63</li>
                <li>моб. (067) 460-13-12</li>
                <li>ratibor2010@ukr.net</li>
            </ul>
        </li>
    </ul>
    <img src="../../../../css/photo/footer.png" class="for-img">
    <ul class="messangers-phone">
        <li><a href="#"><img src="../../../../css/photo/viber.svg"></a></li>
        <li><a href="#"><img src="../../../../css/photo/telega.svg"></a></li>
        <li><a href="#"><img src="../../../../css/photo/insta.svg"></a></li>
    </ul>
</footer>
</body>
</html>
