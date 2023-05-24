<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <br>
    <br>
    <br>
    <br>
    <form action="/method" method="POST">
         {{-- form안에 @csrf를 꼭 써줘야함 
        @csrf : 웹 어플리케이션 취약점 중 하나로 인터넷 사용자(희생자)가 자신의 의지와는 무관하게 공격자가 의도한 행위(수정, 삭제, 등록 등)를 특정 웹사이트에 요청하게 만드는 공격 --}}
        @csrf
        <button type="submit">Post</button>
    </form>

    <form action="/method" method="POST">
         {{-- form안에 @csrf를 꼭 써줘야함  --}}
        {{-- @csrf : 웹 어플리케이션 취약점 중 하나로 인터넷 사용자(희생자)가 자신의 의지와는 무관하게 공격자가 의도한 행위(수정, 삭제, 등록 등)를 특정 웹사이트에 요청하게 만드는 공격 --}}
        @csrf
        @method('PUT')
        <button type="submit">Put</button>
    </form>

    <form action="/method" method="POST">
         {{-- form안에 @csrf를 꼭 써줘야함  --}}
        {{-- @csrf : 웹 어플리케이션 취약점 중 하나로 인터넷 사용자(희생자)가 자신의 의지와는 무관하게 공격자가 의도한 행위(수정, 삭제, 등록 등)를 특정 웹사이트에 요청하게 만드는 공격--> --}}
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>