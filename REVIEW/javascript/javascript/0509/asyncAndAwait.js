//! async await
// promise를 체이닝을 계속 하게 되면 코드가 난잡해짐 
// syntactic sugar 
// 프로미스를 깔끔하게 만들어줌. 

// * 1. async
async function fetchUser(){
    // 네트워크 요청 10초후..
    return 'mihyeon';
}


// 오래 걸리는 코드를 비동기적인 처리를 하지 않을 경우 
// 자바스크립트 엔진은 동기적으로 작동이 되기 때문에 

const user = fetchUser();
user.then(console.log);
console.log(user);



// * 2. await
// 함수 앞에 async가 있을 때만 사용 가능 

function delay(ms){
    return new Promise(resolve =>setTimeout(resolve, ms));
}

async function getApple(){
    await delay(1000);
    return '사과';
}

async function getBanana(){
    await delay(2000);
    //throw 'error';      // 에러가 발생했을 경우
    return '바나나';
}

// function getBa(){
//     return new Promise((resolve,reject)=>{
//         setTimeout(()=>resolve('바나나'),7000);
//     })
// }


// function pickFruits(){
//     return getApple()
//     .then(apple=>{
//         return getBanana().then(banana=>`${apple} * ${banana}`);
//     });
// }

// 바나나와 사과 동시에 
async function pickFruits(){
        const applePromise = getApple();
        const bananaPromise = getBanana();
        const apple = await applePromise;
        const banana = await bananaPromise;
        return `${apple} + ${banana}`;
}


pickFruits().then(console.log);

// ! 문제점 : await 병렬처리
// 순차적으로 진행하면 비효율적 
// 1. applePromise, bananaPromise를 만들면 코드가 바로 실행이 됨
// -> 사과와 바나나를 동시에 (병렬 구조)

// 3. useful Promis APIs
// Promise.all : 프로미스 배열을 전달하면 모든 프로미스를 병렬적으로 모아줌
function pickAllFruits(){
    return Promise.all([getApple(),getBanana()])
    .then(fruits=>fruits.join(' + '));
}
// pickAllFruits().then(console.log);

// Promise.race : 프로미스 배열에 전달된 프로미스중 가장 먼저 온 프로미스를 가져옴
function pickOnlyOne(){
    return Promise.race([getApple(),getBanana()])
    .then(fruits=>fruits);
}
pickOnlyOne().then(console.log);    // 사과가 출력되게 됨



// todo : callback지옥 Promise로 했는데 async와 await로 해보기 

