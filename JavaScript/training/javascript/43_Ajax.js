
// const url = "https://picsum.photos/v2/list?page=2&limit=10";


const input = document.querySelector('#inputValue');
const imgBox = document.querySelector('.imgBox');
const imgBtn = document.querySelector('#imgBtn');
const delBtn = document.querySelector('#delBtn');
let buttonV = true;
function makeList(data){
    //replaceCildren() : 노드 교체 
        imgBox.replaceChildren();
        data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src',item.download_url);
        tagImg.classList.add('image');
        imgBox.appendChild(tagImg);
})}      
        


imgBtn.addEventListener('click',()=>{
    let url =input.value;
    fetch(url)
    .then(res=>{return res.json()})
    .then(data => makeList(data))
    .catch(console.log);
}
)



delBtn.addEventListener('click',()=>{
    imgBox.innerHTML="";
    input.value=null;
})