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
    
// 동일한 URL을 공유하는 여러개의 라우트를 정의해야할때는 any,match,redirect보다 다른 것들을 먼저 정의해야
// 의도대로 올바른 라우트가 일치하는지 확인

//! web 라우트 파일 안에 정의된 POST, PUT, PATCH 또는 DELETE 를 가리키는 라우트들은 모두 'CSRF 토큰 필드'를 포함
// CSRF(크로스-사이트 위조 공격):사이트 간 요청 위조는 인증된 사용자를 대신해서 승인되지 않은 커맨드를 악의적으로 활용하는 것
// 리다이렉트 라우트
// : 다른 URL로 리다이렉트 
// Route::redirect('/here','/there');




// 세그먼트 : 서브 디렉토리 
//! 라우트에서 파라미터 제어
//* 쿼리 스트링으로 파라미터 획득
                            // 타입 힌트 : 클래스 또는 인터페이스의 이름을 메서드의 변수 앞에 표시하는 방식

                            // 전달받는 변수가 Request 타입의 클래스나 인터페이스(뼈대(인터페이스 안에 정의된 ))여야함. 
                            // $request에 Request라는 객체를 넣겠다. 
Route::get('/query',function(Request $request){
                            // 현재 HTTP 요청객체를 라우트 클로저에 자동으로 전달
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
// 서명 라우트는 보통 controller에 들어감
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




//! 뷰 라우트
// 첫 번째 인자 :URL, 두번째 인자 뷰 파일 이름, 세번째 인자로 view에 제공할 데이터들의 배열을 제공
// Route::view('/welcome','welcome', ['name'=>'Taylor'] );
// 뷰-View 라우트에서 라우트 파라미터를 사용할 떼에는 사용할 수 없는 매개변수명이 있습니다. 
// 라라벨에 의해서 예약된 view, data, status, headers 라는 이름은 사용할 수 없습니다.


// ! 라우트 리스트
// php artisan route:list    (애플리케이션에 정의되어 있는 모든 라우트의 목록 조회)
// php artisan route:list -v  (미들웨어 표시 가능)
// php artisan route:list --except-vendor    (애플리케이션 고유의 라우트가 아닌 써드파티를 통해서 정의된 라우트를 표시 하지 않을 수 있습니다.)



// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 컨트롤러
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 컨트롤러 생성 : php artisan make:controller TestController
use App\Http\Controllers\TestController;
Route::get('/test',[TestController::class,'index'])->name('tests.index');

// 커맨드로 컨트롤러 생성
// php  artisan make:controller TasksController --resource

use App\Http\Controllers\TasksController;

Route::resource('/tasks', TasksController::class);

// GET|HEAD        tasks ...................... tasks.index › TasksController@index  
//   POST            tasks ...................... tasks.store › TasksController@store  
//   GET|HEAD        tasks/create ............. tasks.create › TasksController@create  
//   GET|HEAD        tasks/{task} ................. tasks.show › TasksController@show  
//   PUT|PATCH       tasks/{task} ............. tasks.update › TasksController@update
//   DELETE          tasks/{task} ........... tasks.destroy › TasksController@destroy
//   GET|HEAD        tasks/{task}/edit ............ tasks.edit › TasksController@edit



use App\Http\Controllers\BladeController;
Route::get('/blade',[BladeController::class,'index'])->name('blade.index');

// use App\Http\Controllers\ReviewController;
// //  resource를 네이밍 하는 방법은 names() 헬퍼함수를 통해 바꿀 수 있음 .
// Route::resource('/review',ReviewController::class)->names([
//     'index'     => 'review.in'
//     ,'store'    => 'review.st'
//     ,'create'   => 'review.cr'
//     ,'show'     => 'review.sh'
//     // 모델을 찾을 수 없는 경우 동작 missing (review.in으로 리다이렉트 )
// ])->missing(function(Request $request){
//     return Redirect::route('review.in');
// });

use App\Http\Controllers\BoardController;

Route::resource('/board',BoardController::class);