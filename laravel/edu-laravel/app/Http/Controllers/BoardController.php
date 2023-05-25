<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Board;
class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
        // 쿼리 빌더
        //ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
        
        // !select
        // $result = DB::select('select * from categories');
        // $no = '5';
        // // 특정 조건을 주어서 검색                                          :뺌
        // $result = DB::select('select * from categories where no = :no',[ 'no' => $no ]);
                                                                // prepared statement로 작성하지 않고 변수명을 그대로 작성해도되지만 sql injection이 일어날 수 있음
                                                                // 걍 prepared statement 쓰3

        // $result = DB::select('select * from categories where no = ? or no = ?',[$no,7]);

        $input = ['4','7','8'];
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해주세요.(게시글 번호로 오름차순 정렬 후 상위 5개만)
        // $result = DB::select('select bo.bno, bo.btitle, ca.name
        //                         from boards bo
        //                         inner join categories ca
        //                         on bo.bcategory = ca.no
        //                         where ca.no = ? or ca.no = ? or ca.no = ?
        //                         order by bo.bno ASC 
        //                         limit 5
        //                         ',$input);
        
        // $result = DB::select('select bo.bno, bo.btitle, ca.name
        // from boards bo
        // inner join categories ca
        // on bo.bcategory = ca.no
        // where ca.no in(?,?,?)
        // order by bo.bno ASC 
        // limit 5
        // ',$input);

        //!한번씩 속도가 느려질 때 있음....
        // $result = DB::select('select bo.bno, bo.btitle, ca.name
        // from boards bo
        // inner join categories ca
        // on bo.bcategory = ca.no
        // where ca.no in(:no1,:no2,:no3)
        // order by bo.bno ASC
        // limit 5',['no1' => $input[0], 'no2' =>$input[1],'no3' =>$input[2]]);
        // var_dump($result);

        // $result = DB::select('select bo.bno, bo.btitle, ca.name
        // from boards bo, categories ca
        // where ca.no = bo.bcategory and (ca.no = ? or ca.no = ? or ca.no = ?)
        // limit 5',$input);

        //! insert
        // $result = DB::insert('
        //     insert into boards (
        //         bcategory
        //         ,btitle
        //         ,bcontent
        //         ,created_at
        //         ,updated_at
        //     )values(
        //         ?,?,?,?,?
        //     )',['1','안녕','반갑습니다',now(),now()]);


            // $result = DB::insert('
            // insert into boards (
            //     bcategory
            //     ,btitle
            //     ,bcontent
            //     ,created_at
            //     ,updated_at
            // )values(
            //     :bcategory
            //     ,:btitle
            //     ,:bcontent
            //     ,:created_at
            //     ,:updated_at
            // )',['bcategory'=>'1','btitle'=>'안녕','bcontent'=>'반갑습니다','created_at' => now(), 'updated_at' => now()]);

        // $result = DB::update('
        // update boards
        // set btitle = :btitle, bcontent = :bcontent , updated_at = now()
        // where bno = :bno
        // ',['btitle'=>'test','bcontent'=>'testtest','bno' => 22]);
        // 영향받은 행의 개수가 넘어옴 
        

        // $result = DB::delete('delete from boards where bno = ? ', [21]);

        // return var_dump($result);
                // return var_dump($result);

        
        // $result = DB::table('boards')->where('bcategory','=','9')->get();
        $no1='5';
        $no2='8';
        //* where에서 부등호를 생략하면 자동으로 = 로 생각함
        // select * from categories where no = ? or no =?
        // $result = DB::table('categories')->where('no',$no1)->orWhere('no',$no2)->dd();    //todo : dd는 개발할 때 사용 사용하고 삭제해주어야 함
        // where 절에 AND하고싶으면 그냥 where절로 하면 됨 
        // $result = DB::table('boards')->where('bcategory','=','9')->where('bcategory','5')->get();
        // select 

        

        
        
        // ! 잘 사용은 안함 (느려서)
        // $result = DB::table('categories')->whereIn('no',[$no1,$no2])->dd();
        // $result = DB::table('categories')->whereNotIn('no',[$no1,$no2])->dd();

        // $result = DB::table('categories')->where('no',$no1)->Where('no',$no2)->dd(); 

        
        // $result = DB::table('categories')
        //             ->select('id','no','name')
        // ->where('no',$no1)
        //             ->dd();
        
        // $result = DB::table('categories')
        // ->select('id','no','name')
        // ->orderBy('name','desc')
        // ->dd();
        

        //! 주의해서 사용해야함(걍 사용하지 마!!!!!!!!!!!!!!!!!!!!!!!!!!!!)
        //* whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);
        
        //*all() 도 get()과 마찬가지로 값을 가져오는 건데 모든 값을 가져오기 때문에 차라리 사용 안하는게 좋음 
        //!ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
        //pluck()=> 컬럼명을 지정하면 그 컬럼의 값들만 가져옴
        //두 번째 인수를 입력하여 결과 컬렉션이 키로 사용하는 컬럼을 지정
        // $result = DB::table('categories')->pluck('name','no')->dd();




        //* first() : limit 1 과 비슷한 느낌 . 정렬해서 가장 첫번째 데이터 가져옴 . 실패 시 false가 리턴된다. 
        // $result = DB::table('boards')->orderBy('bno','desc')->first();

        //* firstOrFail() : first() 와 같은 동작을 하지만, 실패시 결과가 예외 발생 . (404 페이지 이동)
                            // 엘로퀀트 모델 객체에서만 사용가능 
        // $result = DB::table('boards')->orderBy('bno','desc')->firstOrFail();
        // $result = Board::firstOrFail();          //(Board 모델)
        // $result = DB::table('boards')->count();     // count() => 결과의 레코드 수를 반환
        // $result = DB::table('boards')->min('bno');  // min(), max() => 해당하는 컬럼의 최소 최대치 반환 

        // transaction 시작
        // DB::beginTransaction();
        
        

        // 롤백 및 커밋
        // DB::rollback();
        // DB::commit();

        $result = DB::table('categories')
        ->join('boards','categories.no','=','boards.bcategory')
        // ->select(DB::raw('categories.no,categories.name,count(categories.no)'))
        // ->select('categories.no','categories.name',DB::raw('count(categories.no)'))
        ->select('categories.no','categories.name',DB::raw('count(*)'))

                // ->selectRaw('count(categories.no)')
        // ->selectRaw('categories.no, categories.name, count(categories.no)')
        // ->count('categories.no')
        ->where('categories.active_flg','=','1')
        ->groupBy('categories.no','categories.name')
        ->get();
        var_dump($result);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
