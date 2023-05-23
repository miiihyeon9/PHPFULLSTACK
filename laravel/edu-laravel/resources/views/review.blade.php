{{--  @extends => 부모를 상속한다.  --}}

{{-- 자식의 위치는 상관없이 부모의 위치에 따라 위치 정해짐 --}}
@extends('layout.reviewLayout')

{{-- 부모타이틀의 key('title')가 동일하기 때문에 title에 key가 나옴
    만약에 @section('key','key')라면 부모와 키가 동일하지 않기 때문에
    부모의 contents인 '부모 타이틀'이 헤드에 작성됨.  --}}
@section('title','key')
{{-- 템플릿 위치 상관 없는듯요 --}}



{{-- 부모에도 내용이 있는데 자식에서 바꾸고 싶을 때  --}}
@section('store')
    <form action="{{route('review.in')}}" method="get">
    @csrf
    <input type="text" placeholder="안농">
    <button type="submit">제출</button>
    </form>
@endsection



{{-- 부모에는 내용이 없는데 자식에서 내용을 추가하고 싶을 때  --}}
@section('con')
<h1>반갑습니다요~</h1>
@endsection


@section('if')
    <br>
    <hr>
    <br>
    @if($info['name']==='김미현')
    <div>이름은 {{$info['name']}} 입니다.</div>
    @endif
@endsection 

@section('for')
    <br>
    <hr>
    @for($i=0;$i<5 ; $i++)
    <span> {{$i}} </span>
    @endfor
@endsection 

@section('foreach')
    <br>
    <hr>
    @foreach($info as $key=>$val)
    <div> {{$key}}는 {{$val}}입니다 </div>
    @endforeach
@endsection

@section('forelse')
    <br>
    <hr>
    @forelse($arr2 as $key => $value)
    <div>배열이 비어있지 않으면 이게 뜰꺼야</div>
    @empty
        <dir>배열이 비어있다면 이게 뜰거야</dir>
    @endforelse

@endsection
{{-- foreach와 forelse에는 $loop라는 변수가 자동으로 생성이 되는데 
    그 변수는 반복문에서 유용한 정보에 접근할 수 있음 --}}

@section('info')
    <br>
    <hr>
    @foreach($info as $key =>$val)
        @if($loop->first)
        <div>나의 첫 번째 정보입니다.</div>
        @endif
        <div>{{$key." : ".$val}}</div>
    @endforeach
@endsection