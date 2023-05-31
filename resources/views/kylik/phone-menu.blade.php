@include('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/phone-menu-css.css')}}">
<nav class="phon">
    <a href="index">
        <img src="{{asset('css/photo/x.svg')}}" class="x">
    </a>
    <ul class="menu">
        <li><a href="index">ГОЛОВНА</a></li>
        <li><a href="product">ПРОДУКЦІЯ</a></li>
        <li><a href="contact">КОНТАКТИ</a></li>
        <li><a href="about_us">ПРО НАС</a></li>
    </ul>
    <ul class="messangers-phone">
        <li><a href="basket"><img src="{{asset('css/photo/shopping-basket-svgrepo-com.svg')}}"></a></li>
        <li><a href="#"><img src="{{asset('css/photo/viber.svg')}}"></a></li>
        <li><a href="#"><img src="{{asset('css/photo/telega.svg')}}"></a></li>
        <li><a href="#"><img src="{{asset('css/photo/insta.svg')}}"></a></li>
    </ul>
</nav>
@include('layout.footer')
