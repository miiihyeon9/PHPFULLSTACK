//todo : 오늘 복습, async ,await

// 자바스크립트는 동기적
// 호이스팅이 된 이후부터 코드가 작성한 순서로 작성됨
// 호이스팅 : var,function declaration 이 제일 위로 가는 거

// console.log('1');
// console.log('2');
// console.log('3');


// 비동기적 : 언제 코드가 실행될지 예측할 수 없는 것
console.log('1');
setTimeout(function(){console.log('2')},1000);    // 지정한 시간 이후에 콜백함수가 작동
// 브라우저한테 먼저 요청을 하고 console 출력
// 콜백함수 : ~ 뒤에 이 함수를 실행해줘~
console.log('3');

//* 콜백함수
// 동기적인 콜백함수
function printImmediately(print){
    print();
}

printImmediately(()=>console.log('hello'));


// 비동기 콜백함수


function printWithDelay(print,timeout){
    setTimeout(print,timeout);
}

printWithDelay(()=>console.log('비동기 콜백'),2000);


// 비동기 함수가 순서와 상관없이 브라우저에게 이거 몇초뒤에 콘솔하게 해줘~라고 요청해두고
// 다른 코드를 진행하다가 시간이 되면 요청한 코드가 출력이 됨


// 콜백지옥
// 문제점 : 가독성이 너무 떨어짐, 비즈니스 로직을 구분하기 어려움 
class UserStorage{
    loginUser(id,password,onSuccess,onError){
        setTimeout(()=>{
            if(
                (id === 'ellie'&& password ==='dream')||
                (id === 'coder'&& password ==='academy')
            ){
                onSuccess(id);
            }else{
                onError(new Error('not found'));
            }
        },2000);
    }

    getRoles(user,onSuccess,onError){
        setTimeout(()=>{
            if(user === 'ellie'){
                onSuccess({name:'ellie',role:'admin'});
            }else{
                onError(new Error('no access'));
            }
        },1000);
    }
}

// 사용자의 아이디와 비번을 받아서 로그인. 
const userStorage = new UserStorage();
const id = prompt('enter your id');
const password = prompt('enter your password');

userStorage.loginUser(id,password,(user)=>{
    userStorage.getRoles(user,userWithRole=>{
        alert(`hello ${user.name}, you have a ${userWithRole.role} role`);
    },error=>{
        console.log('error');
    }
    );
},(error)=>{console.log(error)})
