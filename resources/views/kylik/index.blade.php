@include('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/index-css.css')}}">
<div class="phon1">
    <div>
        <p class="txt1">Куликівські ковбаси<br>Ратибор II</p>
        <p class="txt2" style="margin-top: 0">Ковбаси українського виробника</p>
        <form action="/product" method="get">
            <button type="submit" class="zamov">Замовити</button>
        </form>
    </div>
</div>
<div class="why">
    <p>Чому Куликівські ковбаси?</p>
    <ul class="log">
        <li>
            <div>
                <img src="{{asset('css/photo/guarantee-svgrepo-com (1).svg')}}">
                <p>Головна</p>
                <p style="margin-top: 30px">20+ років</p>
                <p style="margin-top: 5px; font-size: 32px">компанія створює м’ясну продукцію</p>
            </div>
        </li>
        <li>
            <div>
                <img src="{{asset('css/photo/sausage-svgrepo-com.svg')}}">
                <p>Вибір</p>
                <p style="margin-top: 30px">250+ видів</p>
                <p style="margin-top: 5px; font-size: 32px">м’яса та різних ковбасних виробів</p>
            </div>
        </li>
        <li>
            <div>
                <img src="{{asset('css/photo/delivery-transport-svgrepo-com.svg')}}">
                <p>Доставка</p>
                <p style="margin-top: 0px">50+ магазинів</p>
                <p style="margin-top: 5px; font-size: 32px">по всій території України</p>
            </div>
        </li>
    </ul>
    <ul class="log-phone">
        <li>
            <div>
                <img src="{{asset('css/photo/guarantee-svgrepo-com (1).svg')}}">
                <p>Головна</p>
                <p style="margin-top: 4px">20+ років</p>
                <p style="margin-top: 2px; font-size: 9px">компанія створює м’ясну продукцію</p>
            </div>
        </li>
        <li>
            <div>
                <img src="{{asset('css/photo/sausage-svgrepo-com.svg')}}">
                <p>Вибір</p>
                <p style="margin-top: 4px">250+ видів</p>
                <p style="margin-top: 2px; font-size: 9px">м’яса та різних ковбасних виробів</p>
            </div>
        </li>
        <li>
            <div>
                <img src="{{asset('css/photo/delivery-transport-svgrepo-com.svg')}}">
                <p>Доставка</p>
                <p style="margin-top: 0px">50+ магазинів</p>
                <p style="margin-top: 2px; font-size: 9px">по всій території України</p>
            </div>
        </li>
    </ul>
</div>
<div class="product">
    <p>Продукція</p>
    <ul class="prod">
        <a href="/syrokopcheni/1">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/syrokopchena_kovbaca.jpg')}}">
                    <div>
                        <p>Сирокопчені ковбаси</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/syrokopcheni/2">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/shynka.jpg')}}">
                    <div>
                        <p>Шинки</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/syrokopcheni/3">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/varena_kovbaca.jpg')}}">
                    <div>
                        <p>Варені ковбаси</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/syrokopcheni/4">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/sosyska.jpg')}}">
                    <div>
                        <p>Сосиски Сардельки</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/syrokopcheni/5">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/syrokopcheni_prodyktu.jpg')}}">
                    <div>
                        <p>Сирокопчені продукти</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
    <ul class="prod-phone">
        <a href="/syrokopcheni/1">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/syrokopchena_kovbaca.jpg')}}">
                    <div>
                        <p>Сирокопчені ковбаси</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/syrokopcheni/2">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/shynka.jpg')}}">
                    <div>
                        <p>Шинки</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="/syrokopcheni/3">
            <li>
                <div>
                    <img src="{{asset('css/photo/index-product/varena_kovbaca.jpg')}}">
                    <div>
                        <p>Варені ковбаси</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
</div>
<!--<div class="message">
    <p>Надіслати повідомлення</p>
    <ul class="mes">
        <li>
            <p>Ваше ім’я :</p>
        </li>
        <li>
            <p>Ваш телефон :</p>
        </li>
        <li>
            <p>Ваша почта :</p>
        </li>
        <li style="height: 240px;">
            <p style="margin-bottom: 150px">Повідомлення :</p>
        </li>
    </ul>
    <ul class="mes-phone">
        <li>
            <p>Ваше ім’я :</p>
        </li>
        <li>
            <p>Ваш телефон :</p>
        </li>
        <li>
            <p>Ваша почта :</p>
        </li>
        <li style="height: 45px;">
            <p style="margin-bottom: 32px">Повідомлення :</p>
        </li>
    </ul>
    <a href="#">
        <div class="nadislaty">
            Надіслати
        </div>
    </a>
</div>-->
@include('layout.footer')
