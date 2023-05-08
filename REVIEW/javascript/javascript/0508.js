//todo : 타이머

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
    if(today.getHours()<=12){
        afternoon = '오전';
        afterHour = hour;
    }else{
        afternoon = '오후';
        afterHour = String(today.getHours()-12);
    }
    clock.innerText = nowTime +' '+ afternoon +' '+ afterHour + ' : ' + minute + ' : ' + second;
}

getClock(); //맨처음에 한번 실행
let timer = setInterval(getClock, 1000); //1초 주기로 새로실행
let stopAction = true ;
let restartAction = true ;

// stopButton.addEventListener('click',stop);
stopButton.addEventListener('click',function(){
    if(stopAction){
        clearInterval(timer);
        restartAction = false;
    }else{
        restartButton.removeEventListener('click',restart);
        clearInterval(timer);
    }
    stopAction=!stopAction;
});
restartButton.addEventListener('click',function(){
    restartAction =!restartAction;
    stopAction = false;
    if(restartAction){
        restart();
    }else{stop()};
});

function stop(){
        clearInterval(timer);
}

function restart(){
        stopButton.removeEventListener('click',stop);
        setInterval(getClock, 1000);
        stopAction = true;
    }
