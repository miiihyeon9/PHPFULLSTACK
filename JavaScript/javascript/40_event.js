// * 인라인 이벤트 등록
// : 태그안에 직접 작성 되는 것 
// : html 파일의 11행, 13행 참조


// *프로퍼티 리스너 
// document : DOM의 최상위 객체
// const btn1 = document.querySelector('#btn1');
// // alert창 띄워서 확인 누르면 링크 이동


// btn1.onclick = function(){
//     if(confirm("구글 이동하쉴?")) {
//         location = "http://www.google.com";
//     }
// }

//* addEventListener(eventType,function)
// const daum = document.querySelector('#daum');
// const daum = document.getElementById('daum');
// daum.addEventListener('click',()=>{
//     alert('ㅋㅋ');
// });
// 현재 창에서 열기 
// daum.addEventListener('click',()=>{
//         location = "http://www.daum.net";
// });


// daum.addEventListener('click',()=>{
//     if(confirm("다음 이동하쉴?")) {
//         location = "http://www.daum.net";
//     }
// });


// 팝업 창 열기 
// let newWindow = null;
// daum.addEventListener('click',()=>{
//     newWindow = open("http://www.daum.net", 'test' , 'width=500 height=500');
// });

// //newWindow.close();// 해당 윈도우를 지워줌

// const closee = document.querySelector('#closee');
// closee.addEventListener('click',closing(newWindow));

// function closing(wow){
//     wow.close();
// }

// *이벤트 삭제
// removeEventListener(eventType,function)
// addEventListener()로 등록한 이벤트의 인수와 같은 인수를 셋팅해야 삭제됨
// closee.removeEventListener('click', closing(newWindow));

//* 이벤트 타입 
// mousedown - 마우스가 요소안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown',()=>{alert('하잉')});
div1.addEventListener('mouseenter',()=>{alert('안녕')});
