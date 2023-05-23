<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>test.index</h1>
    <h5>{{$name}}</h5>

    <hr>
    <a href="{{route('tasks.index')}}">dddd</a>
    
    <br>
    <hr>
    {{-- task.show controller 이동 , show의 $id는 13이 됨.--}}
    <a href="{{route('tasks.show',['task' => 13])}}">Tasks.show</a>
    <br>
    <hr>
    <form action="{{route('tasks.update',['task' => 1 ])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value ="php506" >
        <input type="hidden" name="pw" value ="506" >
        <input type="hidden" name="name" value ="admin" >
        <button type="submit">update 제출</button>
    </form>
    <br>
    <hr>
    {{-- 1. edit 구현 --}}
    
    <a href="{{route('tasks.edit',[ 'task' => 999 ])}}">edit</a>
    {{-- 2. task.store --}}
    <br>
    <hr>
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        {{-- @method('POST') --}}
        <input type="text" name="id"  placeholder="ID" >
        <input type="password" name="pw" placeholder="PASSWORD">
        <button type="submit">제출</button>
    </form>
</body>
</html>