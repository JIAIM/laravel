@include('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/syrokopcheni-css.css')}}">
<main class="product">
    @foreach($sausages as $sausage)
    <p>{{\App\Models\TypeSausage::find($sausage->type_sausage_id)->title}}</p>
        @break('exit')
    @endforeach
    @foreach($sausages as $sausage)
    <ul class="prod1">
        <a href="/layout/type_syrokopcheni.blade.php/{{$sausage->title}}/{{$sausage->id}}/"><li>
                <div >
                    <img src="{{asset($sausage->image)}}">
                    <div>
                        <p>{{$sausage->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <!--<a href="layout/type_syrokopcheni.blade.php/Сервелат/2/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/2.jpg')}}">
                    <div>
                        <p>Сервелат</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Суджук/3/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/3.jpg')}}">
                    <div>
                        <p>Суджук</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
    </ul>
    <ul class="prod1">
        <a href="layout/type_syrokopcheni.blade.php/Салямі Іспанська/4/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/4.jpg')}}">
                    <div>
                        <p>Салямі Іспанська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Імперська/5/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/5.jpg')}}">
                    <div>
                        <p>Імперська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Феліно/6/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/6.jpg')}}">
                    <div>
                        <p>Феліно</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
    </ul>
    <ul class="prod1">
        <a href="layout/type_syrokopcheni.blade.php/Брауншвейгська/7/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/7.jpg')}}">
                    <div>
                        <p>Брауншвейгська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Кнут/8/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/8.jpg')}}">
                    <div>
                        <p>Кнут</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Московська/9/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/9.jpg')}}">
                    <div>
                        <p>Московська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>-->
    </ul>
    <ul class="prod-phone1">
        <a href="layout/type_syrokopcheni.blade.php/{{$sausage->title}}/{{$sausage->id}}/"><li>
                <div >
                    <img src="{{asset($sausage->image)}}">
                    <div>
                        <p>{{$sausage->title}}</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <!--<a href="layout/type_syrokopcheni.blade.php/Сервелат/2/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/2.jpg')}}">
                    <div>
                        <p>Сервелат</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
    </ul>
    <ul class="prod-phone1">
        <a href="layout/type_syrokopcheni.blade.php/Суджук/3/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/3.jpg')}}">
                    <div>
                        <p>Суджук</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Салямі Іспанська/4/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/4.jpg')}}">
                    <div>
                        <p>Салямі Іспанська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
    </ul>
    <ul class="prod-phone1">
        <a href="layout/type_syrokopcheni.blade.php/Імперська/5/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/5.jpg')}}">
                    <div>
                        <p>Імперська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Феліно/6/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/6.jpg')}}">
                    <div>
                        <p>Феліно</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
    </ul>
    <ul class="prod-phone1">
        <a href="layout/type_syrokopcheni.blade.php/Брауншвейгська/7/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/7.jpg')}}">
                    <div>
                        <p>Брауншвейгська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
        <a href="layout/type_syrokopcheni.blade.php/Кнут/8/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/8.jpg')}}">
                    <div>
                        <p>Кнут</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>
    </ul>
    <ul class="prod-phone1">
        <a href="layout/type_syrokopcheni.blade.php/Московська/9/"><li>
                <div >
                    <img src="{{asset('css/photo/syrokopcheni/9.jpg')}}">
                    <div>
                        <p>Московська</p>
                        <div>
                            <img src="{{asset('css/photo/more-filled-svgrepo-com.svg')}}">
                        </div>
                    </div>
                </div>
            </li></a>-->
    </ul>
        @endforeach
        <br><br><br>
</main>
@include('layout.footer')
