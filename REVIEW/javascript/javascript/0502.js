// let star='';

// for(let i = 1; i<=5 ; i++){
//     for(let j = 1; j<=5-i;j++){
//         star += " ";
//     }
//     for (let z = 1; z<= 2*z-1 ; z++)
//     {
//         star +='*';
//     }
//     star +='\n';
// }

// console.log(star);


//todo : 오늘 배운 것 복습 
// ! 변수 ( var , let, const )

// * var ( 함수 레벨 스코프 )
// var는 중복으로 선언이 가능하고, 재할당 가능 : 값을 바꿈
// var vdeclare = "var변수";
// console.log(vdeclare);
// var vdeclare = "var변수 중복 선언";
// console.log(vdeclare);
// vdeclare = "var변수 값 재할당";
// console.log(vdeclare);

// * let ( 블록 레벨 스코프 )
// let은 중복으로 선언이 불가능하고, 재할당이 가능하다. 
// var는 선언을 위에서 하고 밑에서 다시 선언할 수 있기 때문에 원하지 않는 값을 
// 줄 수 있기 때문에 그것을 방지하기 위해서 let 사용
// let ldeclare = "let 변수";
// console.log(ldeclare);
// // let ldeclare = "let 변수 중복 선언"     // 안됨.
// ldeclare ="let 변수 재할당";
// console.log(ldeclare);

// * const (블록 레벨 스코프)
// 중복선언이 불가능하고, 재할당이 불가능하고 , 상수 
// 상수 : 변하지 않는 값. 

const conVar = "const 변수";
// const conVar = "const 변수 중복 선언"    // 불가능
// conVar = "const 재할당"      // 불가능. 에러 발생
// console.log(conVar);


//! 스코프
// * 전역 스코프 
// 어디서든 접근할 수 있기 때문에 조심히 사용해야 한다. 
let myName = "김미현";

function bringName(){
    console.log(myName);
}

// bringName() // 김미현 

// * 함수 레벨 스코프 
// 함수의 코드 블록만을 지역 스코프로 인정. 

function fncScope(){
    console.log(myName);
    let fncVar = "함수 레벨 스코프";
    console.log(fncVar);
}
// console.log(fncVar); // not defined
fncScope(); // myName변수는 전역 변수이기 때문에 함수 내에서도 사용 가능


// * 블록 레벨 스코프 
// 블록레벨은 중괄호 안에서 선언한 변수로 
// 블록레벨 안에서 선언이 되면 그 안에서만 선언이 가능하다. 
if(true){
    let blockScope = "블록 레벨 스코프";
    console.log(blockScope);
}

// console.log(blockScope);     // not defined
// 제일 위에 변수를 먼저 선언을 해주고 사용하는게 편함

// ! 호이스팅 (hoisting)
// 호이스팅이란 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당하는 것이다. 
// (인터프리터 - 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올리는 것.

console.log(fncHoist());    // 함수가 console.log 보다 아래에 있는데에도 호출할 수 있음

function fncHoist(){
    return "함수 : 호이스팅";
}



// var로 선언한 경우 호이스팅 하여 최상단으로 끌어올리고 값은 설정이 되지않고 초기화 됨(undefined)
console.log(varHoist);  // 값이 설정이 되지 않고 초기화 되었기 때문에 undefined로 뜸
var varHoist = "변수var 호이스팅";
console.log(varHoist);


// const,와 let은 최상단으로 끌어올리지만, 값이 undefined로 초기화되지 않기 때문에 에러가 발생함. 

// console.log(conHoist);  // cannot access 'conHoist' before initialization
const conHoist = "변수const 호이스팅";
console.log(conHoist);

// console.log(letHoist);      // cannot access 'conHoist' before initialization
let letHoist = "변수let 호이스팅";
console.log(letHoist);

//! 데이터타입
//! 데이터타입 확인은 typeof()로 확인 
//* 원시타입
// number, string, boolean, null, undefined, symbol
// symbol 외에는 리터럴(변수를 선언하는 동시에 값을 지정)을 통해 생성. 


//? symbol
// symbol타입은 변경 불가능한 원시 타입의 값이다. 
// 심벌 값은 다른 값과 중복되지 않는 유일무이한 값이다. 
// 주로 이름이 충돌할 위험이 없는 객체의 유일한 프로퍼티 키를 만들기 위해 사용
// symbol은 symbol함수를 호출해서 생성. 이때 생성된 symbol값은 외부에 노출되지 않고, 절대 중복되지 않음. 
let sym = Symbol('sym');



//* 객체타입
// json
let obj = {
    name : "김미현"
    , age : 26
    , gender : "여자"
}

// 배열
let arr =[1,2,3,4];

// date, object 등 어어엄청 많음 

//! 문자열 병합. 
// PHP에서는 문자열을 병합할 때 .을 사용하지만. 
// javascript는 문자열을 병합할 때 +를 사용함. 
// 그렇기 때문에 더하기 연산을 할 때 주의해야함. 
// 2+"2"를 하면 자바스크립트는 22가 뜸
// 빼기는 상관 없음. 



// ! 함수
// * 함수 선언문
function add(a,b)
{
    return a + b;
}
console.log(add("안녕","하세요"));

// * 함수 표현식
// 함수에 이름이 없기 때문에 익명함수라고 한다. 
let fnc = function (a,b){
    return a+b;
}
console.log(fnc(1,2));

// * 화살표 함수 : 리턴값만 있을 때 한줄로 표현이 가능함. 
let fncTest2 = () =>"하이";
// 이것은 
function fncTest1(){
    return "하이";
}
// 와 같음 

let multi = (a,b) =>"a*b" ;
console.log(multi(1,2));

// * Function 생성자 함수
let addFnc = Function('a','b','return a+b;');
console.log(addFnc(10,0));



//! 반복문 이해 안되는 거

let arrFor = [10,9,8,7,6];

// * for 이용해서 배열 가져오기 
for(let i = 0; i<arrFor.length ; i++)
{
    console.log(arrFor[i]);
}


// * foreach : 배열을 가져오기 위해 사용되지만 함수를 사용해서 가져옴.
// forEach는 매개변수와 함께 배열의 각 요소에 적용하게될 콜백 함수를 전달. 
// forEach 메서드를 사용해 배열을 순회하기 위해서는 콜백함수 또는 익명함수가 필요
let arrEach = [100,99,98,97];

arrEach.forEach(function(ar){
    console.log(ar)
})

arrEach.forEach((ar,index,array)=>{
    console.log(array);
});

// 화살표 함수 표현 
arrEach.forEach(ar=>console.log(ar));

// * for ...in : 모든 객체 루프 가능 
arrIn = { 
    name : "김미현"
    ,age : 26
    , gender : "여자"
}


// val = arrIn객체의 키값. 
for( let val in arrIn)
{
    // arrIn[val] : arrIn[val]의 밸류값
    console.log(val + " : " + arrIn[val]);
}


// * for ... of
// 인덱스 배열만 출력이 가능 . 배열에 따로 추가해도 인덱스만 출력이 된다. 
arrof=[1,2,3,4,5];

for(let o of arrof){
    console.log(o);
}