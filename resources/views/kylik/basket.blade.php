
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
                <li>
                        <div >
                            <img src="{{asset(\App\Models\Product::find($basket->product_id)->image)}}">
                            <div>
                                <p>{{\App\Models\Product::find($basket->product_id)->title}} кількість: {{$basket->amount}}</p>
                                <a href="/del/{{$basket->id}}"><div>
                                    <img src="{{asset('css/photo/minus-svgrepo-com.svg')}}">
                                    </div></a>
                            </div>
                        </div>
                    </li>
            </ul>
                <ul class="prod-phone1">
                    <a href="#"><li>
                            <div >
                                <img src="{{asset(\App\Models\Product::find($basket->product_id)->image)}}">
                                <div>
                                    <p>{{\App\Models\Product::find($basket->product_id)->title}} кількість: {{$basket->amount}}</p>
                                    <div>
                                        <a href="/del/{{$basket->id}}"><img src="{{asset('css/photo/minus-svgrepo-com.svg')}}"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>
                </ul>
        @endforeach
        @endif
    </div>
    @if(count(\App\Models\Basket::all())!==0)
    <a href="/complete"  class="zamov">
        <div>
            <p>Замовити</p>
        </div>
    </a>
    @endif
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</main>
@include('layout.footer')
