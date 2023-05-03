// todo : 배열


// * 배열에 값 추가
let arr = [1,2,3,4,5];
arr.push(6); // arr=[1,2,3,4,5,6];

// * 배열의 값 삭제 
delete arr[5]; // arr=[1,2,3,4,5,empty]
// 값은 삭제되었지만 arr.length(배열의 길이)를 구해보면 삭제된 부분은 빈공간으로 남아있기 때문에
// 6이 됨

//* splice() : 배열의 요소를 삭제하거나 교체
// arr.splice(2,1);// arr=[1,2,4,5,empty]    // arr배열의 인덱스 2번에서 1개만큼 자른다. 
// arr.splice(2,0,3)// arr배열의 인덱스값2에서 0개 자르고 값3 추가
                     //arr = [1,2,3,3,4,5,empty]
//arr.splice(2,1,3)// arr[2]의 값을 삭제하고 3추가 
// arr=[1,2,3,4,5,empty]

// ? 배열의 맨 앞에 0 추가하는 방법
// arr.splice(0,0,0);
// *unshift() 함수 : 배열의 맨 앞에 값을 추가
// arr.unshift(0)

//? 배열의 맨 뒤에 값을 추가하는 방법
// arr.splice(arr.length,0,arr.length)  // arr.length : 배열의 길이를 알 수 있음 
// arr.splice(arr.length,0,10,11,12)    // 맨 뒤에서 매개변수부터 가변파라미터로 값을 추가

// * 값을 제거하는 함수
// pop() : 배열의 맨 끝 값을 제거 undefined(empty이기 때문에)
// shift() : 배열의 맨 앞 값을 제거 1


// * indexOf() 메소드
// * lastIndexOf() 메소드  
// 배열의 특정 요소를 찾는데 사용
// indexOf() : 배열에서 중복된 값이 있을 경우에 인덱스 값이 가장 먼저 있는 것을 가져옴
// lastIndexOf() : 배열에서 중복된 값이 있을 경우에 인덱스 값이 가장 나중에 있는 것을 가져옴 

// * slice() : 문자를 자르는 함수 
// * split() : 문자를 특정 문자로 잘라서 배열로 정리하는 함수

// * concat() : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환한다. 
// let arrCon = [1,2,3,4,5];
// let arrCon2 = [10,9,8,7,6];
// let resultCon = arrCon.concat(arrCon2);
// console.log(resultCon);

// * includes() 배열의 값중 특정 요소를 가지고 있는지 판별하는 함수
// boolean 값으로 나타남 

// * sort() : 배열의 요소를 아스키코드 정렬을 해준다. 
// 아스키코드 : 글자를 순차적으로 배열하는 것처럼, 맨 앞에 있는 숫자를 먼저 비교하고 그 다음 숫자를 비교하여 차례대로 나타냄
 
// 그럼 오름차순으로 정렬하기 위해서는 어떻게?
let arrSort=[10,2,500,3,66,54,9,1,2,0];
arrSort.sort(
    function(a,b){
        return a-b;
    }
)
// arrSort.sort((a,b)=>a-b);
// 앞에 있는 숫자와 뒤에 있는 숫자를 빼주면 양수일 경우 왼쪽에 있는 값이 더 크다는 말이기 때문에
// 숫자를 오른쪽으로 옮겨줌 
// php에서 배운 버블정렬 느낌

// 내림차순
arrSort.sort(
    function(a,b){
        return b-a;
    }
)
// arrSort.sort((a,b)=>b-a);
// 매개변수가 한개만 있을 경우에는 (a,b)에 괄호 안해도 됨

// * join() 메소드 : 배열의 모든 요소를 연결하여 하나의 문자열로 만들어 준다. 
arrJoin = ["반갑습니다","잘부탁드립니다."];
arrJoin.join();// 반갑습니다,잘부탁드립니다.
// 쉼표를 없애고 나타내려면 ''를 넣어주면 됨
arrJoin.join('');


// * every() 
// 배열의 모든 요소들이 함수의 조건을 '모두'통과하는지 판별
// 모두 통과해야 true, 하나라도 틀린 경우에 false
arrEvery=[1,2,3,4,5];
arrEvery.every((val)=>val%2===0);// false 

arrEvery2=[2,4];
arrEvery2.every((val)=>val%2===0);// true


// *some()
// 배열의 모든 요소들 중 하나라도 함수의 조건을 통과한다면 true, 모두 통과하지 않으면 false
arrSome=[1,2,3,4,5];
arrSome.some(val=>val<=1);// true(1이 충족하기 때문에)
// val가 의미하는게 배열의 값 하나하나를 의미함. 

arrSome.some(val=>val>5);   //false

// *filter() 메소드 : 주어진 함수의 조건을 통과하는 모든 요소를 모아서 새로운 배열로 만드는 메소드
let arrFilter = [1,2,3,4,5];
let resultFilter = arrFilter.filter(val=>val<=3); // resultFilter=[1,2,3]


let num = 100;
let result = [];

for(let i = 1; i<=num;i++)
{
    result.push(i);
}

// let even = function (val){
    
//     if(val/2 ===0){
//         return true;
//     }else{
//         return false
//     }
// }



function even(val){
    if(val%2 === 0){
        return true;
    }else{
        return false;
    }
}

let arrFilterEven = result.filter(val=>even(val) === true);

function oddNumber(val){
    if(val%2 !== 0){
        return true;
    }else{
        return false;
    }
}

let arrFilterOdd = result.filter(val=>oddNumber(val) === true);
// 여기서 val가 result 배열의 원소값이고 val가 조건에 일치 할 때 필터가 되는 거임. 



