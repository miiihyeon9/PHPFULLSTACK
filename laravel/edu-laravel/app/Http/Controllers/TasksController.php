<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "tasks.index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //! resource 생성을 위한 입력 폼페이지
    public function create()
    {
        return "tasks.create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //! 리소스 생성 처리
    public function store(Request $request )
    {
        // $arrOnly = $request->only(['id','pw']); 
        return "ID : ".$request->id."<br> PW : ".$request->pw;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 리소스 조회 
    public function show($id)
    {
        return "tasks.show".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 리소스 수정 페이지
    public function edit($id)
    {
        return "tasks.edit".$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 리소스 수정 처리
    public function update(Request $request, $id)
    {
        var_dump($request);     // Request객체의 모든 정보가 나옴 
        $arrAll = $request->all();// 사용자가 전달하는 모든 데이터 획득(배열) (모든 정보를 획득한 거랑 달라용~)
                                    //(all();  form 안에 있는 정보 가져옴)
        $arrOnly = $request->only(['id','name']);       // 배열 안에 우리가 뽑고싶은 데이터만 작성함
                                                        //-> 사용자가 전달한 데이터 중 해당하는 데이터만 획득하게 됨(배열)
        $oneGet = $request->get('pw');  // 사용자가 전달한 데이터 중에 해당하는 데이터의 "값"만 획득 (배열X) 
        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);
        return "tasks.update ID : ".$id ;       // $id => 세그먼트 id 가져옴 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 리소스 삭제
    public function destroy($id)
    {
        return "tasks.destroy".$id;
    }
}
