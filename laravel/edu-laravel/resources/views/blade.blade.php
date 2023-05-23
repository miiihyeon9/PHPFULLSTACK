{{-- layout파일을 상속 --}}
@extends('layout.layout')


{{-- 부모 템플릿에 해당하는 yield 부분에 자리를 차지한다. --}}
{{-- 부모와 자식의 키가 동일할 경우 자식이 상속 받아서 자식 타이틀이 되고
    키가 다른 경우에는 부모 타이틀이 작성됨.--}}
@section('title','자식 타이틀')


{{-- 처리해야 하는 코드가 많을 경우 @section  ~  @endsection에 소스코드를 기재 --}}

@section('test')
        <h2>자식의 섹션입니다.</h2>
        <p>잉</p>
        <p>끝아닌뎅?ㅎ</p>
@endsection

@section('contents')
    <h2>콘텐츠 섹션입니다.</h2>
    <p>아아아아</p>
    <p>콘텐츠 끝</p>
@endsection
{{-- 섹션으로 안묶여져있기 때문에 자식한테 있는게 먼저 실행이 되고 다음에 부모 템플릿에 있는게 실행이 됨 --}}

{{-- 조건문 --}}
@section('if')
    <hr>
    @if($data['gender'] === '남자')
    <span>남자남자</span>
    @elseif($data['addr'] === '대구')
    <span>대구대구</span>
    @else
    <span>모든 조건 탈락</span>
    @endif
@endsection

@section('for')
    @for($i = 0;$i<5;$i++)
    <div>{{$i}}</div>
    @endfor
@endsection
{{--  foreach와 forelse의 경우, $loop라는 변수가 자동으로 생성이 되고 사용 가능--}}
{{-- $loop 변수는 현재 반복문의 인덱스와 반복문이 첫 번째 마지막인지 알 수 있는 것 등 유용한 정보에 엑세스 --}}
@section('foreach')
    @foreach($data as $person => $val)
    {{-- count : 루프안에 총 몇개인지 
        iteration : 반복문이 총 몇번째 반복되는 건지 
        --}}
        @if($loop->odd)
            <div>홀수번째요</div>
        @elseif($loop->even)
            <div>26226226 짝수번째요</div>
        @endif
    <span>{{$loop->count.' >> '.$loop->iteration}}</span>
    <li>{{$person ."   :    ".$val}}</li>
    @endforeach
@endsection

@section('forelse')
    <hr>
    <h5>forelse</h5>
    @forelse($data2 as $key => $val)
        <sapn>{{$key.' : '.$val}}</sapn>
    @empty
        <sapn>빈 배열</sapn>
    @endforelse
@endsection