// const url = "https://picsum.photos/v2/list?page=2&limit=10";


let input = document.querySelector('#inputValue');
// let inputValue = document.getElementById('iputValue').value;
const url = "https://picsum.photos/v2/list?page=2&limit=10";
const imgBox = document.querySelector('.imgBox');
const imgBtn = document.querySelector('#imgBtn');
// const input = document.querySelector('#iput').value;
// let btnValue = true;
// json() : 가져온 api를 제이슨 형태로 변환
// fetch(url)
// .then(res=>{return res.json()})
// .then(data => makeList(data))
// .catch(console.log);

function makeList(data){
        data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src',item.download_url);
        tagImg.classList.add('image');
        imgBox.appendChild(tagImg);
})}      
        

// 인풋에 링크를 작성하고 버튼을 누르면 API호출, 버튼을 한번 더 누르면 이미지 삭제 
// 1. 버튼을 누르면 이미지 나타나게 

// imgBtn.addEventListener('submit',()=>{})


const form = document.querySelector(".js-form");

function printText(event){
    event.preventDefault();
    // input.setAttribute('value',inputValue);
    // inputValue의 값을 가져와서 
    fetch(inputValue)
    .then(res=>{return res.json()})
    .then(data => makeList(data))
    .catch(console.log);
} 

function init(){
    form.addEventListener("submit",printText,false);
}
init();


function printName(){
    let inputValue = document.getElementById('iputValue').value;
}
