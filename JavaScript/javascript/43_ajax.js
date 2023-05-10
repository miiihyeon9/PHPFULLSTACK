//! ajax
// api를 비동기처리 
// 웹페이지에서 비동기 방식으로 서버에 데이터 요청
// 서버의 response를 받아 동적으로 웹페이지 갱신

// 페이지를 로딩하지않고 일부분만 갱신
// XMLHttpRequest/ Fetch Api

// ! JSON
// 서버간의 HTTP 통신을 위한 텍스트 데이터 포맷(String 형태)

// 데이터를 보낼 때 서버에 string형태로 보내줌
// JSON.stringify(obj) : Object를 JSON 포맷의 string으로 변환

// 서버에서 데이터를 받아올 때도 string형태이기 때문에 
// 편하게 사용하기 위해서 object로 변환
// JSON.parse(  json ) : JSON 포맷의 string을 object로 변환


// https:// picsum.photos

const url = "https://picsum.photos/v2/list?page=2&limit=5";

// json() : 가져온 api를 제이슨 형태로 변환
fetch(url)
.then(res=>{return res.json()})
.then(data => makeList(data))
.catch(console.log);

function makeList(data){
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src',item.download_url);
        document.body.appendChild(tagImg);
        tagImg.style.width = 200+'px';
        tagImg.style.height = 200+'px';
    })
}


