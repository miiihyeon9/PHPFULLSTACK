// setTimeout(function(){
//     console.log('a');
// },3000);

// setTimeout(function(){
//     console.log('b');
// },2000);

// setTimeout(function(){
//     console.log('c');
// },1000);

//1. 콜백함수를 이용해서 a,b,c 순서로 콘솔에 출력

    // function whatYourName(name, callback) {
    //     console.log('name: ', name);
    //     callback();
    // }
    
    // function finishFunc() {
    //     console.log('finish function');
    // }
    
    // whatYourName('miniddo', finishFunc);
    
    // <output>
    // name: miniddo
    // finish function

setTimeout(() => {
    console.log('a');
    setTimeout(() => {
        console.log('b');
        setTimeout(() => {
            console.log('c');
        }, 1000);
    }, 2000);
}, 3000);

// function a(){
//     console.log('a');
// }

// function b(){
//     console.log('b');
// }

// function c(){
//     console.log('c');
// }

// function callback(a,b){
//     setTimeout(a(),b);
// }

// callback(a,3000);
// callback(b,2000);
// callback(c,1000);





// * 2. promise를 이용해서 a,b,c 순서로 콘솔에 출력
function myPro(text,num){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            console.log(text);
            resolve();
        },num);
    });
}

myPro('a',3000)
.then(()=>myPro('b',2000))
.then(()=>myPro('c',1000));