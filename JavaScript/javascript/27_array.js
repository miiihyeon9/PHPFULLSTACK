let arr = [1, 2, 3, 4, 5];

//*  배열에 값 추가
// push 함수 이용
// arr.push(6);
// arr[12] = 11; 식으로 추가할 수 있지만 이럴 경우에 empty로 빈 공간이 생기기 때문에 권장x

//* 배열의 값 삭제
// delete arr[5];      // arr=[1, 2, 3, 4, 5, empty];
// arr.length하면 6임 인덱스는 남아있다. 

//* splice() : 배열의 요소를 삭제 하거나 교체함. 
// arr.splice(2,1) // arr[2]인 부분에서 1개만 자르기

// arr.splice(2,0,3) // arr[2]인 부분부터 0개 자르기, arr[2]에 3추가

// arr.splice(2,1,3) // arr[2]의 값을 3으로 변경

// 맨 앞에 0 추가하는 방법
// arr.splice(0,0,0);
// arr.unshift(0);     //unshift() : 배열의 맨 앞에 값을 추가



// arr.splice(arr.length,0,arr.length);    // 맨 뒤에 6 추가
// arr.splice(2,1 , 10,11,12,13); // 3번째 매개변수부터 가변파라미터로 모든 값 추가


// 값을 제거하는 함수
// pop() : 배열의 맨 끝 값을 제거
// shift() : 배열의 맨 앞 값을 제거 


// * indexOf() 메소드 
// 배열에서 특정 요소를 찾는데 사용
let arr2 = [1,2,3,4,5,3];
arr2.indexOf(3);     // 값이 3인 인덱스 값을 알려줌 중복될 경우 앞에 있는 인덱스를 알려줌
// 만약에 인덱스값이 존재하지 않는다면 -1로 나옴. 

arr2.lastIndexOf(3);    // 중복된 값이 있을 경우 인덱스 값이 마지막인 인덱스를 알려줌


// 예제

let fileName = 'javaScript.log.php';


// fileName.slice(0,10)+' '+fileName.slice(11,-4)+' '+fileName.slice(-3)

// fileName.split(".");
// fileName.indexOf("javascript")

// fileName.slice(fileName.indexOf("javaScript"),fileName.indexOf("log")-1)
// // 'javaScript'
// fileName.slice(fileName.indexOf("log"),fileName.indexOf("php")-1)
// // 'log'
// fileName.slice(fileName.indexOf("php"))
// // 'php'
let firstDot = fileName.indexOf('.');
let lastDot = fileName.lastIndexOf('.');





let first_str = fileName.slice(0,firstDot);
// 'javaScript'
let middle_str = fileName.slice(firstDot+1,lastDot);
// 'log'
let last_str = fileName.slice(lastDot+1);
// 'php'


console.log(first_str);
console.log(middle_str);
console.log(last_str);



let arrStr = fileName.split(".");
for(let i = 0; i<arrStr.length;i++)
{
    console.log(arrStr[i]);
}
// let firstArr = arrStr[0];
// let middleArr = arrStr[1];
// let lastArr = arrStr[2];

// console.log(firstArr);
// console.log(middleArr);
// console.log(lastArr);



// * concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
let arrCon1 = [1,2,3];
let arrCon2 = [10,20,30];
let arrCon4 = [100,200,300];

let arrCon3 = arrCon1.concat(arrCon2,arrCon4);
console.log(arrCon3);

// * includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별
let arrInc = [1,2,3,4];
console.log(arrInc.includes(7)); // boolean으로 요소가 있는지 없는지 알려줌


// * sort() 메소드 : 배열의 요소를 아스키코드 정렬을 해준다.
// sort가 문자열로 인식해서 정렬, 제일 앞에 있는 숫자를 비교하고 그다음 숫자를 비교 
const arrSort = [6,6,7,1,3,29,678,0]; 
// arrSort.sort(); // [0, 1, 29, 3, 6, 6, 678, 7]


// 오름차순
arrSort.sort(
    function( a, b ){
        return a - b;
    }// 버블정렬 느낌쓰
)  //[0, 1, 3, 6, 6, 7, 29, 678]

// =

arrSort.sort ( (a,b) => a - b); //오름차순



// 내림차순
arrSort.sort(
    function( a, b ){
        return b - a;
    }// 버블정렬 느낌쓰
)

arrSort.sort ( (a,b) => b - a); //내림차순


// * join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만들어줌. 
arrJoin = ["안녕","하세요"];
console.log(arrJoin.join(''));  // 매개변수로 ""로 주면 ,가 없어짐
console.log(arrJoin.join('/'));



// * every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는지 판별

const arrEvery = [1,2,3,4,5];
let result = arrEvery.every(function(val){
    return val<=5;
});  // 배열들의 모든 요소들이 조건을 만족하면 true / 만족하지 못할 경우에 false

console.log(result);

let resultR = arrEvery.every(function(val){
    return val%2 === 0;
})
let resultR2 =arrEvery.every((val)=>val%2===0)


console.log(resultR);
console.log(resultR2);

const arrEvery1 = [2,4];
let resultR3 =arrEvery1.every(val=>val%2===0)  // 한개일 때는 생략 가능, 두개 이상일 경우에는 생략못함
console.log(resultR3);

// * some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는 지 판별
const arrSome = [1,2,3,4,5];
let resultSome = arrSome.some(function(val){
    return val<=5;
});

resultSome = arrSome.some((val)=>val>=5) // true (하나라도 만족하기 때문에 )
let resultSomeH = arrSome.some((val)=>val>=6)
console.log(resultSome);
console.log(resultSomeH)

// * filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1,2,3,4,5];
let result3 = arrFilter.filter(val=>val>=3);
console.log(result3);

