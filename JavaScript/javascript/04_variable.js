// console.log('안녕하세요.js파일입니다','하잉');

// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
//  변수
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// !var : 중복선언 가능, 재할당 가능 : 값을 바꿈, 함수 레벨 스코프
// var your_name = "홍길동";
// var your_name = "갑순이";
// your_name = "이름없음"; // 재할당
// console.log(your_name);


// !let : 중복선언 불가, 재할당 가능, 블록 레벨 스코프 
// 선언을 위에서 하고 밑에서 다시 선언할 수 있기 때문에 원하지 않는 값을 줄 수 있기 때문에 그것을 방지하기 위해서 
// let u_age = 20;
// u_age = 10;

// console.log(u_age);

// !const : 중복선언 불가, 재할당 불가, 블록 레벨 스코프, 상수 (한 번만 할당할 수 있는 변수)
// const gender = "남자";
// gender = "여자";


// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 스코프
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// !전역 스코프 ( 어디에서든 접근이 가능하기 때문에 조심해서 사용해야함)
let u_name = "홍길동";

function test(){
    console.log(u_name);
}

// !함수 레벨 스코프
function test_fnc(){
    let u_age = 30;
    console.log(u_name);
    console.log(u_age);
}

// !블록 레벨 스코프 
//  블록 레벨 : 중괄호 안에서 선언한 변수
//  블록 레벨 안에서 선언되면 그 안에서만 선언 가능  
function test_block(){
    console.log(u_name);
    let u_age = 30;
    console.log(u_age);
    if( true ){
        u_age = 20;
        console.log(u_age);
        var var1 = "var로 선언";
        let test1 = "함수 : test1";
    }
    
    // console.log(test1);
    console.log(var1);
}

//* 제일 위에 변수를 먼저 선언해주고 사용하는게 편함 



// ! ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ 
// ! 호이스팅 (hoisting)
// ! ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// : 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당하는 것을 의미
// ( 인터프리터 - 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올리는 것 
// console.log(hTest());
console.log(vTest);

function hTest(){
    return "함수 : hTest"; 
}
// var로 선언한 경우 호이스팅 하여 최상단으로 끌어올리고 값은 설정이 안되고 undefined로 나옴
var vTest = "변수 : vTest";

console.log(vTest);

// console.log(lTest);     // 최상단으로 끌어올리지만 값이 undefined으로 초기화 되지 않아서 찾을 수 없다고 뜸
// let lTest = "let 변수 : lTest";

console.log(cTest); // 최상단으로 끌어올리지만 값이 undefined으로 초기화 되지 않아서 찾을 수 없다고 뜸
const cTest = "const 변수 : cTest";



