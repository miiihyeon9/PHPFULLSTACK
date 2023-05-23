<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','부모 타이틀')</title>
        {{-- @yield('key','title') --}}
        {{-- 자식 템플릿에 해당하는 section자리에 양도한다. 
            만약에 자식 템플릿에 해당하는 section이 없으면 부모 타이틀이 대신하게 됨. --}}
</head>
<body>
{{-- @include : 다른 템플릿을 포함하는 방법 
    view가 어디에 위치해 있는지 작성하면 되는데 /대신 . 작성해야함.--}}
    @include('layout.inc.header')
    {{-- 주어진 섹션의 컨텐츠를 표시  --}}

    @yield('con')
    {{-- STORE --}}

    @section('store')
        <form action="{{route('review.st')}}" method="POST">
        @csrf
        <input type="text" name="id" placeholder="ID">
        <input type="password" name="pw" placeholder="PASSWORD">
        <button type="submit">Login</button>
        </form>
    @show

    @yield('if')

    @section('foreach')
    <br>
    <hr>
    @for($i=0;$i<5 ; $i++)
    <span> {{$i}} </span>
    @endfor
    @show 
    
    @yield('info')
    
    @yield('forelse')

    @yield('for')
    @include('layout.inc.footer',['key1' => '푸터입니다.'])
</body>
</html>