// * fetch() API
// javascript object Notation(json)
// json : key와 value로 이루어짐 
// - 데이터를 주고 받을 때 가장 간단한 포맷
// - 텍스트를 기반으로한 가벼움
// - 읽기 쉬움
// - key와 value로 이루어짐
// - 데이터를 서버와 주고받을 때 직렬화함
// - 프로그래밍 언어나 플랫폼에 상관 없이 사용할 수 있음 

//! 1. 오브젝트를 직렬화해서 json화하는 방법
// JSON.stringfiy : json으로 변환
let json = JSON.stringify(true);
console.log(json);  // true

//  interface JSON 에 가보면 stringify가 함수의 이름은 동일하지만 
// 다른 기능을 하는 걸 볼 수 있는데  이를 오버로딩이라고 함
// 이는 어떤 파라미터를 전달하고, 몇 개의 파라미터를 전달하냐에 따라 각각 다른 함수를 호출함. 

// json = JSON.stringify(['apple','banana']);
console.log(json);// ["apple","banana"] 쌍따옴표로 가져옴 -> json 규격




let rabbit = {
    name: 'tori',
    color : 'white',
    size : null,
    birthDate : new Date(),
    jump: () =>{
        console.log(`${name} can jump!`);
    },
};

json = JSON.stringify(rabbit);
// console.log(rabbit);    // jump는 json에 포함 dks됨 함수는 오브젝트에 포함된 데이터가 아니기 때문에 나오지 않음
// Symbol도 마찬가지


// 오브젝트에서 특정한 것만 가져오고 싶을 때 
json = JSON.stringify(rabbit,['name','color']);
console.log(rabbit);
                                // 모든 키와 밸류가 콜백함수에 전달 
json = JSON.stringify(rabbit,(key,value)=>{
    console.log(`key : ${key}, value: ${value}`);
    return key === 'name' ? 'ellie' : value;// {name: 'tori', color: 'white', size: null, birthDate: Wed May 17 2023 23:54:48 GMT+0900 (한국 표준시), jump: ƒ}
});

console.log(json);
console.clear();


//! 2. 직렬화된 json을 오브젝트로 변환
// JSON.parse : object로 변환
json = JSON.stringify(rabbit);
const obj = JSON.parse(json)
console.log(obj);
rabbit.jump();

// obj.jump(); 없음

console.log(rabbit.birthDate.getDate());
console.log(obj.birthDate.getDate());



// * XMLHttpRequest
// 불필요한 태그들이 많아져 파일의 사이즈가 커지고 가독성이 떨어짐. 