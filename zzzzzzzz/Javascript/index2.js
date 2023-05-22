const navBtn = document.querySelector('.navBtn');
let sideList = document.getElementsByClassName('sideList');

function menu(){
    let sideMenu = document.querySelector('.offCanGroup');
    sideMenu.classList.toggle('active');
}

function sideListOver(){
    this.style.color ="#FF6347";
}
function sideListOut(){
    this.style.color ="black";
}

navBtn.addEventListener('click',menu);


for (let i = 0; i < sideList.length; i++) {
  sideList[i].addEventListener('mouseover', sideListOver);
  sideList[i].addEventListener('mouseout',sideListOut);
}







