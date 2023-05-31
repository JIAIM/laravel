<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('name')</title>
    <link rel="icon" type="image/png" href="{{asset('css/photo/logo4.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/type_syrokopcheni-css.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <a href="#">
        <img src="{{asset('css/photo/logo4.png')}}" class="logo">
    </a>
    <nav>
        <ul class="menu">
            <li><a href="/index">ГОЛОВНА</a></li>
            <li><a href="/product">ПРОДУКЦІЯ</a></li>
            <li><a href="/contact">КОНТАКТИ</a></li>
            <li><a href="/about_us">ПРО НАС</a></li>
        </ul>
    </nav>
    <nav>
        <ul class="messangers">
            <li><a href="/basket"><img src="{{asset('css/photo/shopping-basket-svgrepo-com.svg')}}"></a></li>
            <li><a href="#"><img src="{{asset('css/photo/viber.svg')}}"></a></li>
            <li><a href="#"><img src="{{asset('css/photo/telega.svg')}}"></a></li>
            <li><a href="#"><img src="{{asset('css/photo/insta.svg')}}"></a></li>
        </ul>
    </nav>
    <a href="/phone-menu">
        <img src="{{asset('css/photo/menu.svg')}}" class="phone-menu">
    </a>
</header>
<main class="product">
    <div>
        <div>
            <p class="zag">@yield('name')</p>
            <a href="/add/@yield('name')/@yield('num')" methods="post" class="zamov">
                <div>
                    <p>В кошик</p>
                </div>
            </a>
        </div>
        <img src="../../../../../css/photo/syrokopcheni/@yield('num').jpg">
    </div>
    <p class="txt1">Склад: грудоребрана частина з шийними та спинними хрящами з міжреберним м'ясом свинячих напівтуш без шкіри, натуральні спеції. 100 г продукту містить: білки – 5,5 г, жири – 45,0 г. Енергетична цінність – 427,0 ккал. Термін зберігання при температурі t від 0 до +6 °С та відносній вологості повітря 70-80% - 8 діб. Ціна - 130грн</p>
</main>
@include('layout.footer')
