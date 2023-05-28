<style>
    div{
        text-align: center;
        font-size: 40px;
        line-height: 40px;
    }
</style>
@if (is_numeric($text))
    @for($i=0;$i<=$text;$i++)
    <div>{{$i}}</div>
    @endfor
@else
    <div>Your text: {{$text}}</div>
@endif


