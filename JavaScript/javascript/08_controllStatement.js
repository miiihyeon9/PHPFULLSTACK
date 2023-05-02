//! 제어문

//! 조건문
// * if
// let num = 1;
// let numC = 2;

// if( num > numC ) {
//     console.log(num + "은 "+ numC +"보다 크다");
// }else if( num < numC ) {
//     console.log(num + "은 "+ numC +"보다 작다");
// }else{
//     console.log("기타 등등");
// }


// * switch
// let uAge = 20;
// switch (uAge) {
//     case 20:
//         console.log(num + "은 20살 입니다.");
//         break;

//     default:
//         console.log(num + "은 20살이 아닙니다.");
//         break;
// }

//! 반복문 
// * while
// let numNum = 0;

// while ( numNum <= 3 ){
//     console.log(numNum);
//     numNum++;
// } 
// * do while
// let gugudan = 1;
// let dan = 2;
// do{
//     console.log(dan + " * " + gugudan + " = " + dan * gugudan);
//     gugudan++;
    
// }while(gugudan<=9);

// * for
// for(let i = 1; i <= 5 ; i++)
// {
//     console.log(dan + " * " + gugudan + " = " + dan * gugudan);
//     gugudan++;
// }


// * foreach : 배열만 루프 가능 
// (class안에 있는)메소드
// 배열에서만 돌릴 수 있음  
// let arr = [1,2,3,4];
// arr.forEach( function( val ){
//     console.log(val);
// });

// arr = {
//     uName : "홍길동"
//     ,uAge : 20
// }

// * for ... in : 모든 객체를 루프 가능 
// for( let i in arr){
//     console.log(i + " : " +arr[i]);
// }

// * for ... of : 
// iterator : php 인덱스 배열이랑 비슷, 반복 처리가 가능한 객체 
// 인덱스 배열만 출력 가능. 배열에 따로 추가해도 인덱스만 출력 가능....
arr = [5,4,3,2,0];
arr.num = 1;


for( let i of arr){
    console.log( i );
    // arr.num은 인덱스값이 "num" (문자열) 이기 때문에 안나옴
}