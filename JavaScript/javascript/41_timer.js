// *타이머 함수

// setTimeout() / clearTimeout()

// setTimeout() : 일정 시간 뒤에 콜백함수를 가져옴
// timehandler : 콜백함수 넣으면 됨 / 초는 ms단위
// const timeOut = setTimeout(timer(),1000);
// // clearTimeout(timeOut);



// 2. 일정 시간마다 반복하는 시간 함수
// setInterval() / clearInterval()
// const myInterval = setInterval(()=>console.log('a'),1000);
// 브라우저 닫을 때 까지 계속 작동함 
// clearInterval(myInterval);


// console 에 1~9 까지 한번씩만
// function timer(){
//     for(let i = 1; i<=9 ; i++)
//     {
//         console.log(i);
//     }
// }
let i = 1;
setInterval(timer,1000);
function timer(){
    if(i<=5){console.log(i++)}
}

let j = 1;
const interval1 = setInterval(()=>{
    console.log(j);
    if(j++ === 5 ){
        clearInterval(interval1);
    }
},1000)


// setInterval(()=>console.log('끝났지롱'),1000);

