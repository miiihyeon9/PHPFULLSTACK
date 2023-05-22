<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// get : get방식으로 가져오겠다 
// ('/') : 경로 (현재는 root) 
// function(){} => closer (익명함수)
//web.php는 브라우저에 접속하는 모든걸 작성하고
// api.php는 api 사용할 때 

Route::get('/', function () {
    // resources에 welcome.blade.php 를 보여준다. 
    return view('welcome');
});

// !Route 정의 
//* 문자열 return
// Route::get('/hi',function(){
//     return '안녕하세요';
// });

//* view return(뷰 파일이 없으면 에러발생, 디버그 모드 설정이 false면 500에러, true면 에러의 상세정보 출력  (디버그 모드 설정 확인 => .env))

// Route::get('/myview',function(){
//     return view('myview');
// });


// !HTTP 메소드 대응하는 라우터
// 라우트의 정의된 순서에 따라 달라지는데 여러 라우터에 해당될 경우 가장 마지막에 정의된 것이 실행된다. 
Route::get('/home',function(){
    return view('home');
});
// * GET요청에 대한 처리
// 리소스를 요청한다. 
// Route::get('/method',function(){
//     return "Get Method !";
// });

// * POST요청에 대한 처리
// 리소스를 생성한다.
Route::post('/method',function(){
    return "Post Method !";
});

// PUT과 DELETE는 api를 가져올 때 많이 사용
// *PUT요청에 대한 처리
// 기존에 있던 리소스를 덮어쓴다

Route::put('/method',function(){
    return 'Put Method';
});

// *DELETE요청에 대한 처리 
// 기존에 있던 리소스를 삭제한다. 
Route::delete('/method',function(){
    return 'DELETE Method';
});

//* 모든 요청에 대한 처리
// 어떠한 요청을 해도 any로 실행됨 
// 만약에 any를 위에서 실행하고 밑에 post나 다른 요청을 하면 다른 요청이 실행됨. 
// Route::any('/method',function(){
//     return 'Any Method';
// });

// * 특정 URL에서 어떤 HTTP메서드가 허용되는지 확인
// 배열에는 어떤 메서드를 허용하는지 
Route::match(['get','post'],'/method',function(){
    // get이나 post요청은 Match Method로 실행됨?
    return 'Match Method';
});

// 세그먼트 : 서브 디렉토리 
//! 라우트에서 파라미터 제어
//* 쿼리 스트링으로 파라미터 획득
                            // 타입 힌트 : 클래스 또는 인터페이스의 이름을 메서드의 변수 앞에 표시하는 방식

                            // 전달받는 변수가 Request 타입의 클래스나 인터페이스(뼈대(인터페이스 안에 정의된 ))여야함. 
                            // $request에 Request라는 객체를 넣겠다. 
Route::get('/query',function(Request $request){
    // get, post, put , delete 상관없이 데이터를 다 가져옴
    return $request->id." , ".$request->name;
});

//* URL에 세그먼트로 지정해서 지정 파라미터 획득
// {}하고 해당하는 키 입력. 
// api가 이런 형식으로 많이 넘어옴 

Route::get('/segment/{id}',function($id){
    // 세그먼트로 지정했을 경우 해당 파라미터를 반드시 적어줘야 함.
    return 'segment id : '.$id;
});


//* URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
// api 사용할 때 많이 사용 ex)페이징 
Route::get('/segment2/{id?}',function($id = 'base'){
    return 'segment2 ID : '.$id;
});


// Request로도 세그먼트 파라미터 획득 가능, 세그먼트 파라미터가 없어도 404에러 발생 안함
// Route::get('/segment2/{id?}',function(Request $request){
//     return 'segment2 ID : '.$request->id;
// });

//! 라우트의 이름 지정 
Route::get('/names/home',function(){
    return view('nameshome');
});
Route::get('/names',function(){
    return 'name.index !!!';
    // name() => 헬퍼 함수 
})->name('names.index');

// 사용하는 이유 : 컨트롤러나 뷰에서 라우트를 사용할 때 달라짐

// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// ! 라우트 매칭 실패 시 대체 라우트 정의
// 항상 최하단에 작성해야함 : 보통 에러 처리를 마지막에 정의

Route::fallback(function(){
    return '잘못된 경로로 접속하셨습니다.';
});


//!라우트의 그룹 및 공통 경로 설정
// 공통 경로
// prefix() : 접두사 (그룹 이름 설정)
// group() : 여러개의 라우트를 하나의 그룹으로 묶어줌. 
// 공통된 특수한 미들웨어 처리가 있을 경우 공통으로 묶음
                // 미들웨어 : 경로에 지정된 처리의 실행 전후에 임의의 처리를 실행
                // Request나 Response에 포함 된 값의 갱신이나, 암호화, 세션실행, 인증처리 등 
Route::middleware('auth')->prefix('users')->group(function(){

    Route::get('/login',function(){
        return 'Login!!';
    })->name('users.login');

    Route::get('/logout',function(){
        return 'Logout!!';
    })->name('users.logout');

    Route::get('/registration',function(){
        return 'registration!!';
    })->name('users.registration');

});

//! 서명 라우터 
// 메일에 인증링크를 보내서 클릭했을 경우 인증 완료


use Illuminate\Support\Facades\URL;
Route::get('/makesign',function(){
    // 일반적인 url 링크 생성하기 
    // $baseUrl = route('invitations',['invitation'=>5816, 'group'=>678]);
    $baseUrl = route('sign');

    // 서명된 URL 링크 생성하기 
    // $signUrl = URL::signedRoute('invitations',['invitation'=>5816, 'group'=>678]);
    $signUrl = URL::signedRoute('sign');

    
    // !!유효기간이 있는 서명된 URL 링크 생성하기 // 해당 라우터의 main , 언제까지 이 인증이 유효한지 
                                                            // 분은 addMinutes
    $limitSignUrl = URL::temporarySignedRoute('sign',now()->addSecond(10));

    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

// Route::get('/invitations/{invitation}/{group}', function(){
Route::get('/sign',function(){
    return "Sign !!";
})->name('sign')->middleware('signed');

