//* 1. 버튼을 클릭시 아래 내용의 알러트가 나옵니다. 
// "안녕하세요". 
// "숨어있는 div를 찾아보세요."

const btn = document.querySelector('#btn');

let action = true;
btn.addEventListener('click',()=>{alert('안녕하세요.\n숨어있는 상자를 찾아보세요.')});
//* 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다. 
// "두근두근"
const box = document.querySelector('.box');
trans();

box.addEventListener('mouseover',function(){
    if(action === true)
    {alert('두근두근');};
});

// 상자 랜덤으로 이동
function trans(){
    let transTop = Math.round(Math.random()*1000)+'px';
    let transleft = Math.round(Math.random()*1200)+'px';
    let transwidth = (Math.round(Math.random()*150))+100+'px';
    let transheight = (Math.round(Math.random()*150))+100+'px';
    box.style.top = transTop;
    box.style.left = transleft;
    box.style.width = transwidth;
    box.style.height = transheight;
// 
}


function find(word){
    alert(word);
    box.classList.toggle('findBox');
}

// function colorRand(){
//     let colorArr =['red','salmon','blue','gray','black','orange','skyblue','beige'];
//     let colorRan = Math.floor(Math.random()*colorArr.length);
//     box.style.backgroundColor=colorArr[colorRan];
// }
//* 3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타납니다. 
// box.addEventListener('mousedown',()=>{alert('찾았다');box.classList.toggle('hide')});
// box.addEventListener('mousedown',color('beige'));
// function color(ww){box.style.backgroundColor='ww'};
// function color(c){
//     box.style.backgroundColor=c;
// }
//* 4. 3번의 상태에서 다시 한번 더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보이게 됩니다. "다시 숨는다. "
// box.removeEventListener('mousedown',box.style.backgroundColor='beige');
// box.removeEventListener('mousedown',()=>{alert('찾았다');box.classList.toggle('hide')});
// box.addEventListener('mousedown',()=>{alert('숨는다');box.classList.toggle('hide')});
// box.addEventListener('mousedown',color('white'));

box.addEventListener('mousedown',()=>{
if(action){
    find('파덕?');
}else{
    find('파아아덕?');
    trans();
}
action = !action;
}
);


