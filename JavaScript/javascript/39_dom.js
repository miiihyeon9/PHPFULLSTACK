
// !요소를 선택하는 방법

// getElement로 가져온 아이들은 collection타입
//* id로 선택하는 방법
// document.getElementById()
const title = document.getElementById('title');

//* 태그명으로 선택하는 방법
// documnet.getElementsByTagName();
const tag = document.getElementsByTagName('li');

// tag[1].style.color = 'yellow';
// tag[2].style.color = 'red';





// * 클래스명으로 요소를 선택하는 방법
const listR = document.getElementsByClassName('list_r');
listR[1].style.backgroundColor = 'blue';


// querySelector로 가져온 아이들은 nodelist타입
// * css 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 가장 첫 번째 것만 선택 
const tit = document.querySelector('#title');
const li2 = document.querySelector('.list');

// querySelectorAll() : 복수의 요소가 있다면 전부다 선택
const li3 = document.querySelectorAll('.list');
// li3[2].style.color = 'white';



//! 요소 조작하기 
// textContent : 순수한 텍스트 데이터를 전달
title.textContent ='Title';
title.textContent = '<span>바꾸다</span>';

// innerHTML = 태그는 태그로 인식
title.innerHTML = '<span>INNER 바꾸다</span>';  // INNER 바꾸다 



// const di = document.querySelector('#div1');
// di.innerHTML = '이너로 넣었다.';
// '이너로 넣었다.';
// di.textContent = '안녕';
// '안녕';
// ? div1 안에 있는 자식태그가 사라지기 때문에 주의해서 사용해야 함.

// *요소에 속성을 추가
const it = document.getElementById('it');
// setAttribute('속성명','속성값');
it.setAttribute('placeholder','제목을 입력하세요.');

const aa = document.getElementById('aa');
aa.setAttribute('href','http://www.naver.com');

// * 요소에 속성을 제거
it.removeAttribute('placeholder');

it.addEventListener('mouseenter',function(){
    it.setAttribute('placeholder','글자를 입력하세요.');
})


it.addEventListener('mouseleave',function(){
    it.removeAttribute('placeholder');
})

// const btn = document.getElementById('btn');
// const bdy = document.getElementsByTagName('body');
// btn.addEventListener('click',function(){bdy.style.backgroundColor='beige'});


//* 요소의 스타일링
// 인라인으로 스타일 추가
// aa.style.textDecoration = 'none';
// aa.style.color ='skyblue';

// 클래스로 스타일 추가

aa.classList.add('aa','aa2','aa3');
//-> aa에 클래스를 추가해준다.  

//* 새로운 요소 만들기 
// document.createElement(해당 태그 명)
const cli = document.createElement('li');
cli.innerHTML='야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입

const ul = document.getElementsByTagName('ul');
ul[0].appendChild(cli);

// 요소를 특정 위치에 삽입하는 방법

const jjam =document.querySelector('li:nth-child(3)');
ul[0].insertBefore(cli,jjam);

//* 요소를 지우는 방법
// 화면에서만 지우는거임
// cli.remove();

// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고, 
// 배경색깔 넣은 것도 제대로 나오도록 수정
const lala = document.createElement('li');
lala.innerHTML='잡채밥';
const dong = document.createElement('li');
dong.innerHTML='동파육';

ul[0].insertBefore(dong,tag[6]);
ul[0].insertBefore(lala,tag[6]);


function back(){
    for(let i =0 ; i <tag.length ;i++)
    {
        if(i%2===0){
        tag[i].style.backgroundColor = 'beige';
        }else{
            tag[i].style.backgroundColor = 'brown';
        }
    }
}

back();

let domList = document.querySelectorAll('.domList');
let domListToArray = Array.from(domList);

console.log(domListToArray);
domListToArray.forEach(function(element) {
    element.style.color ="white";
});
