<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Головна</title>
    <link rel="icon" type="image/png" href="{{asset('css/photo/logo4.png')}}">
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
            <img src="{{asset('css/photo/menu.svg')}}" class="phon-menu">
        </a>
    </header>
