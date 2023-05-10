// function delay(){
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime){
//     }
//     console.log('B');
// }


// function delay(){
//     return new Promise((resolve)=>{
//         setTimeout(()=>resolve(console.log('B')),2000)})
// }

// 브라우저에 요청  AC 먼저 뜨고 2초 뒤 B 출력
// function delay(){
//     return new Promise((resolve)=>{
//         setTimeout(()=>resolve('B'),2000)});
// }



// js엔진에서 처리 A먼저 뜨고 2초뒤에 CB출력
// function delay(){
//     return new Promise((resolve)=>{
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime){}
//     resolve('B');
//     })
// }




// console.log('A');
// // 리턴값이 한개일 경우 뒤에 생략가능 
// //delay().then(b=>console.log(b));
// delay().then(console.log);
// console.log('C');

// !async 비동기 처리
// async function delay(){
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime){}
//     return 'B';
// }

// console.log('A');
// delay().then(console.log);

// console.log('C');


// ! await 
//* async가 붙은 함수에서만 사용 가능
function myDelay(ms){
    return new Promise((resolve)=>{
        setTimeout(resolve,ms)})
}

async function getA(){
    await myDelay(3000);
    return 'A';
}


async function getB(){
    await myDelay(2000);
    return 'B';
}


function getC(){
    myDelay(3000);
    return 'C';
}

// console.log(getA()+getB());

// getA().then(console.log);


// getA().then(strA=>{ return getB().then(strB=>{console.log(`${strA}와 ${strB}`)})})

//! async를 이용할 경우 
async function getAll(){
    const strA = await getA();
    const strB = await getB();
    console.log(`${strA} 와 ${strB}`);  //5초 strA와 strB에 값이 들어올 때 까지 기다렸다가 작동 
}


getAll();

// async function getAll3(){
//     // [] 안에 Promise 객체가 들어옴
//     Promise.all([getA(),getB()])
//     .then(str=>console.log(str.join(' : ')));
// }

// getAll3();