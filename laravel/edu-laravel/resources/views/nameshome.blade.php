<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names index</title>
</head>
<body>
    {{-- href="/names" --}}
    <a href="/names">names</a>  
    <br>
    {{-- 라라벨에서 제공하는 헬퍼함수를 통해 주소 작성됨
    url(name)
    href="http://localhost/names" --}}

    <a href="{{url('/names');}}">names</a>
    <br>

    {{-- 네임설정 (권장) 
    나중에 유지관리하기도 편하기 때문에 제일 많이 사용
    href="http://localhost/names --}}
    <a href="{{route('names.index');}}" >dddd</a>
</body>
</html>