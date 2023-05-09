// !promise
// : 비동기적인 것을 수행하기위해 콜백함수 대신에 사용
// 1. 상태
// pending상태(보류중) -> fulfilled or rejected
// Producer vs Consumer
// resolve, reject

// 2. producer정보제공자 consumer 정보를 받는자 차이 

// 네트워크 요청을 사용자가 요구했을 때만 해야하는 경우라면, 
// 사용자가 요구하지 않았는데 불필요한 정보를 줄 수 있기 때문에 유의해야함 

// !새로운 프로미스를 만들 때 executor라는 콜백함수가 즉시 실행되기 때문에 주의할 것

// 프로미스에서 resolve랑 reject를 해주지 않으면 pending상태가 되어 돌아가지 않음 

// Producer
const promise = new Promise((resolve,reject)=>{
    // 헤비한 작업 가져옴 (네트워크 통신, 파일 가져오기는 프로미스를 통해 )
    console.log('doing something...');
    setTimeout(()=>{
        // resolve('ellie');
        reject(new Error('no network'));
    },2000);
});

// Consumer : then, catch, finally

// then을 호출하게 되면 promise가 리턴되게 되고 리턴된 promise에 catch를 다시 등록
promise
.then((value)=>{console.log(value)})        // 성공했을 때
.catch((error)=>{console.log(error)})       // 실패했을 때
.finally(()=>{console.log('boom')});        // 성공여부 상관없이 


// * promise chaining 
const fetchNumber = new Promise((resolve,reject)=>{
    setTimeout(()=>resolve(1),1000);
})

fetchNumber
.then(num=>num*2)
.then(num=>num*3)
.then(num=>{
    return new Promise((resolve,reject)=>{
        setTimeout(()=>resolve(num-1),1000);
    })
})
.then(num=>{console.log(num)});


// Error Handling

const getHen =()=>
new Promise((resolve,reject)=>{
    setTimeout(()=>resolve('암탉'),1000);
});

// const getEgg =hen=>
// new Promise((resolve,reject)=>{
//     setTimeout(()=>resolve(`${hen}=>계란`),1000);
// });

const getEgg =hen=>
new Promise((resolve,reject)=>{
    setTimeout(()=>reject(new Error('Error')),1000);
});
const cook =egg=>
new Promise((resolve,reject)=>{
    setTimeout(()=>resolve(`${egg}=>후라이`),1000);
});


// getHen()
// .then(hen=>getEgg(hen))
// .then(egg=>cook(egg))
// .then(meal=>console.log(meal))
// .finally(()=>{console.log('요리 완성')});

// ? 콜백함수를 전달할 때 받아오는 value를 함수로 바로 호출하는 경우 value를 생략해서 적을 수 있음
getHen()//
.then(getEgg)
.catch(error=>{
    return '빵';
})
.then(cook)
.then(console.log)
// .catch(console.log);     // 달걀을 받아올 때 문제가 생기면
// .finally(console.log('요리 완성'));


