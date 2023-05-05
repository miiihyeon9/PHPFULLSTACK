let addButton = document.getElementById('addButton');
let tdContainer = document.getElementById('tdContainer');
let textInput = document.getElementById('textInput');

addButton.addEventListener('click', function(){
    
    // p 태그 생성
    let paragraph = document.createElement('p');
    paragraph.innerText = textInput.value;
    paragraph.classList.add('paragraph-style');
    
    
    // child에 p 태그 추가
    tdContainer.appendChild(paragraph);
    
    
    // 다시 empty text로 변경
    textInput.value = "";
    textInput.focus();
    
    paragraph.addEventListener('click', function(){
       paragraph.style.textDecoration = "line-through"; 
    });    
    paragraph.addEventListener('dblclick', function(){
       tdContainer.removeChild(paragraph);
    });
});

textInput.addEventListener("keyup", function(e){
    if(e.keyCode == 13) {
        e.preventDefault();
        document.getElementById('addButton').click();
    }
});



var links = {
    setColor: function (color) {
//         var alist = document.querySelectorAll('a');
//       var i = 0;
//    while(i < alist.length){
//       console.log(alist[i]);
//       alist[i].style.color= color;
//       i= i +1;}

//     }
$('a').css('color',color);
    }
}


var body = {
    setColor:function (color){
        //document.querySelector('body').style.color = color;
        $('body').css('color',color);

    },
    setbackgroundColor : function(color){
// document.querySelector('body').style.backgroundColor = color;
$('body').css('backgroundColor',color);}
}


function nightDayHandler(self){
var target= document.querySelector('body');

if (self.value === 'night'){
body.setbackgroundColor('black');
body.setColor('white');
self.value ='day';
links.setColor('white');

} 
else{  
body.setbackgroundColor('white');
body.setColor('black');
self.value ='night';  
links.setColor('blue');
}}
/*
새로운 파일을 만들게 되면 모든 파일을 카피할 필요 없이
파일을 새로운 웹페이지에 포함만 시키면 될 뿐만 아니라
이 파일만으로도 전체 페이지를 바꿀 수 있다는 장점이 있음
가독성이 좋아지고 코드를 정리정돈하여 명확해짐.
*/


