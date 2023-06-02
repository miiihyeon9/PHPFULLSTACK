<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = ['name'=>'김미현'
                ,'age' =>'26'
                ,'gender'=>'여자'
                ,'birth'=>'19980809'];
        $arr2 = [];

        // 값을 체이닝해서 보내줌. 
        return view('review')->with('info',$arr)->with('arr2',$arr2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "ID는 ".$request->id."입니까?<br>PW는 ".$request->pw."일까요?";


        //! 유효성 검사 . 
        // 유효성 검사 규칙을 통과하면 코드가 정삭적으로 실행이 되고, 검사를 실패할 경우 
        // Illuminate\Validation\validationException예외가 발생하고 오류응답이 자동으로 사용자에게 다시 전송 
        // 기존에 HTTP요청 중에 유효성 검사가 실패하면 이전 URL에 대한 리다이렉션 응답이 생성. 
        // 
        $validated = $request->validate([
            //유효성 검사 규칙이 $vadlidate 메서드로 전달되어 $validated 변수에 저장
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);
        // 유효성 검사가 통과되면 컨트롤러가 계속 실행 
        // 구분자 | 대신 배열도 사용 가능 
        // $validated = $request->validate([
        // 유효성 검사 규칙이 $vadlidate 메서드로 전달되어 $validated 변수에 저장
        //     'title' => ['required','unique:posts','max:255'],
        //     'content' => ['required']
        // ]);

        //! 유효성 검사 에러표시하기 
        // 유효성 검사 규칙을 통과하지 못할 경우에 자동으로 사용자를 이전 위치로 리다이렉션 
        // + 모든 유효성 검사 오류와 입력 요청은 자동으로 세션으로 플래시(이럴때는 flash 메소드를 사용하면 됩니다. 이 메소드을 사용하여 세션에 저장된 데이터는 즉시 및 후속 HTTP 요청에서만 사용할 수 있고 후속 HTTP 요청이 완료 후 시 된 데이터는 삭제됩니다.)
        // $errors변수는  Illuminate\View\Middleware\ShareErrorsFromSession 미들웨어에 의해 모든 애플리케이션의 뷰와 공유 . 
        // $errors변수는 항상 뷰에서 사용이 가능하기 때문에 $errors변수가 항상 정의되어 있음 
        // 뷰에서 foreach 이용해서 foreach($errors->all() as $error){{$error}}해서  에러가 발생할 경우 뷰에 나타나게 함

        //! form 채우기 
        // 라라벨이 유효성 검사 오류로 인해서 리디렉션 응답을 생성하면 세션에 대한 모든 요청을 플래시 
        // 이전 요청에서 플래시 입력을 검색하려면 old() 메서드 호출 
        // old() 세션에서 이전에 플래시된 입력 데이터를 가져옴
        // $title = $request->old('title');
        // old()는 전역 헬퍼이기 때문에 blade템플릿에서 이전 입력을 표시하는 경우 old헬퍼 사용하여 입력.
        // 이전 입력값이 없을 경우 null

        //! validator 수동 생성
        // request의 validate메소드를 사용하고 싶지 않을 경우, validator 파사드를 사용하여 
        // validator 인스턴스를 수동으로 생성 
        // 파사트에 make메소드를 사용하면 새로운 validator 인스턴스가 생성 
        // use Illuminate\Support\Facades\Validator;

        // make()의 첫번째 인수인 $request->all() 은 유효성 검사중인 데이터. 
        //          두번째 인수는 데이터에 적용해야 하는 유효성 검사 규칙의 배열 
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        // 검사가 실패했는지 확인.
        if($validator->fails()){
            // withErrors(): 세션에 에러 메시지를 플래시
            //              errors 변수는 리디렉션후 뷰와 자동으로 공유되기 때문에 사용자에게 쉽게 다시 표시가능(old())
            // withInput() :  유효성 검사기, messageBag 또는 PHParray 허용
            return redirect()->route()->withErrors($validator)->withInput();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
