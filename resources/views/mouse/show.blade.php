<style>
    body{
        font-size: 25px;
        margin: 20px 20px;
        line-height: 100px;
    }

    div{
        text-align: center;
        font-size: 40px;
        line-height: 40px;
    }
</style>


<!DOCTYPE html>
<html>
<head>
    <title>{{ $arr['title'] }}</title>
</head>
<body>
{{ $arr['var1'] }}<br>
{{ $arr['var2'] }}

@for ($i = 0; $i < 10; $i++)
    <div>i: {{ $i }}</div>
@endfor
@foreach($arr as $key => $item)
    {{$loop->index.' key:'.$key.' item:'.$item}}<br>
@endforeach

</body>
</html>
