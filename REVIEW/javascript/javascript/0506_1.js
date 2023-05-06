//todo : 메뉴 클릭했을 때 리스트 출력하는 방법 (토글 사용)(OK)

function menu(){
    let menu = document.querySelector('.menu');
    let sideMenu = document.querySelector('.side_menu');
    menu.classList.toggle('active');
    sideMenu.classList.toggle('active');
}



