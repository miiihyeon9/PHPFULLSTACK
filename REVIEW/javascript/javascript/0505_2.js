// todo : 버튼 눌러서 배경 바꾸고, 글씨 색상 변경
const btn = document.getElementById('btn');

let back = {
    setColor : 
    function (color){
        document.body.style.color = color;
    }
    ,setBackgroundColor : 
    function(color){
        document.body.style.backgroundColor = color;
    }
}


// btn.addEventListener('click',(e)=>backHandle());
btn.addEventListener('click',backHandle);


function backHandle(){
    if(btn.value === 'night'){
        back.setColor('white');
        back.setBackgroundColor('black');
        btn.value = 'day';
    }else{
        back.setColor('black');
        back.setBackgroundColor('white');
        btn.value = 'night';
    }
}



//!toggle( String [, force] )하나의 인수만 있을 때: 클래스 값을 토글링한다.
//  즉, 클래스가 존재한다면 제거하고 false를 반환하며,
//  존재하지 않으면 클래스를 추가하고 true를 반환한다. 
//  두번째 인수가 있을 때: 두번째 인수가 true로 평가되면 지정한 클래스 값을 
//  추가하고 false로 평가되면 제거한다.

