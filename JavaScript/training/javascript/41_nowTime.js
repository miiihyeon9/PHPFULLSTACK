
const clock = document.querySelector(".clock");
const stopButton = document.querySelector("#stop");
const restartButton = document.querySelector("#restart");
function getClock(){
    const today = new Date();
    const nowTime = '현재 시각';
    let afternoon = '오후';
    // padStart(2,"0") : 두자리수, 숫자가 한자리 수 일경우 앞에 0 채워줌 
    const hour = String(today.getHours()).padStart(2,"0");
    const minute = String(today.getMinutes()).padStart(2,"0");
    const second = String(today.getSeconds()).padStart(2,"0");
    let afterHour = today.getHours();
    if(today.getHours()<12){
        afternoon = '오전';
        afterHour = hour;
    }else{
        afternoon = '오후';
        afterHour = String(today.getHours()-12).padStart(2,"0");
    }
    clock.innerHTML = nowTime +' '+ afternoon +' '+ afterHour + ' : ' + minute + ' : ' + second;

}

getClock(); //맨처음에 한번 실행
let timer = setInterval(getClock, 1000); 

stopButton.addEventListener('click',stop);
restartButton.addEventListener('click',restart);


function stop(){
        timer = clearInterval(timer);
}

function restart(){
        if(!timer){
        timer = setInterval(getClock, 1000);
        }
    
    }

// 콜백함수 
// 함수뒤에 ()를 붙이면 그 함수를 실행하겠다. 
// 그래서 소괄호를 붙이지 않으면 함수의 주소값을 받아서 실행 
// 함수를 실행시킨다 => 괄호 붙임



