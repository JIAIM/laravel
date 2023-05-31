
@include('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/syrokopcheni-css.css')}}">
<main class="product">
    <div>
        <p class="zag">Ваш кошик:</p>
        @if(count(\App\Models\Basket::all())==0)
            <p>Кошик порожній</p>
        @else
        @foreach($baskets as $basket)
            <ul class="prod1">
                <a href="#"><li>
                        <div >
                            <img src="{{asset(\App\Models\Product::find($basket->product_id)->image)}}">
                            <div>
                                <p>{{\App\Models\Product::find($basket->product_id)->title}} кількість: {{$basket->amount}}</p>
                            </div>
                        </div>
                    </li>
                </a>
                <a href="/del/{{$basket->id}}"><p>видалити</p><a/>
            </ul>
        @endforeach
        @endif
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</main>
@include('layout.footer')
