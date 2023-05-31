@include('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/product-css.css')}}">
<main class="product">
    <p>Продукція</p>
    <ul class="prod">
        <a href="syrokopcheni/1">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(1)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(1)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/2">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(2)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(2)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/3">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(3)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(3)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/4">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(4)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(4)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/5">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(5)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(5)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
    <ul class="prod2">
        <a href="syrokopcheni/6">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(6)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(6)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/7">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(7)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(7)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/8">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(8)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(8)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/9">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(9)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(9)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/10">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(10)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(10)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
    <ul class="prod-phone1">
        <a href="syrokopcheni/1">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(1)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(1)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/2">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(2)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(2)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/3">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(3)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(3)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
    <ul class="prod-phone1">
        <a href="syrokopcheni/4">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(4)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(4)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/5">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(5)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(5)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/6">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(6)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(6)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
    <ul class="prod-phone1">
        <a href="syrokopcheni/7">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(7)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(7)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/8">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(8)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(8)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <a href="syrokopcheni/9">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(9)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(9)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
    <ul class="prod-phone1">
        <a href="syrokopcheni/10">
            <li>
                <div>
                    <img src="{{asset(\App\Models\TypeSausage::find(10)->image)}}">
                    <div>
                        <p>{{\App\Models\TypeSausage::find(10)->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/right.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
</main>
</div>
@include('layout.footer')

