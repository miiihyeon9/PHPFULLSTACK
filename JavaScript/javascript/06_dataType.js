//! 데이터타입 
// typeof() 함수로 확인 
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 기본 데이터 타입
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ

// * 숫자 (number)
// ! 스코프 레벨이 다르면 같은 변수 명으로도 사용 가능
let num = 1;
function test(){
    let num =2;
    console.log("함수 : " + num);
}

console.log("전역 : "  + num);

// * 문자열 (string)
let str = "하이";

// * boolean
let bool = true;

// * null
let test1 = null;


// * undefined
let test2;

// * symbol
// 유일한 값을 가짐
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");
// S_CONST1 !== S_CONST2;
// ?값이 같지만 다른곳에 사용할 때 사용?

// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 객체 타입 ( JSON )
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
let obj1 = {
    u_name : "홍길동"
    ,u_age : 20
    ,u_gender : "남자"
    ,u_fnc : function(){
        console.log("함수입니다");
    }
    ,addr :{
        addr1 : "대구"
        ,addr2 : "중구"
    }
}

// * 배열 (Array)
let arr = [ "Mon", "Tue","Wed", "Thu", "Fri", "Sat", "Sun" ];

// * Date


// * Object


