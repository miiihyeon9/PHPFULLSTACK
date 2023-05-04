// * 인라인 이벤트 등록
// : 태그안에 직접 작성 되는 것 
// : html 파일의 11행, 13행 참조


// *프로퍼티 리스너 
// document : DOM의 최상위 객체
const btn1 = document.querySelector('#btn1');
// alert창 띄워서 확인 누르면 링크 이동


btn1.onclick = function(){
    if(confirm("구글 이동하쉴?")) {
        window.location.href = "http://www.google.com";
    }
}