// * 비동기 처리 방식 

//동기적이다 => 
// console.log('a');
// console.log('b');
// console.log('c');
// console.log('d');
// console.log('e');
// 차례대로 


// 비동기 처리
// timer, http 요청 , eventHandler , ajax
// console.log('a');
// setTimeout(()=>{console.log('b')},1000);
// console.log('c');       // a c b 출력 
                        // 비동기 처리 방식은자바스크립트 내에서 처리를 하는게 아니고
                        // 1초 뒤에 console.log 처리해달라고  브라우저한테 맡김


// const a =2;
// const b =3;
// const sum = function(){
//     setTimeout(()=>{return a+b},100)};

// // console.log(sum()); //undifined


// // 비동기 처리에서의 콜 백 지옥
// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 1000);
//     }, 2000);
// }, 3000);


// // 로그인 콜백 지옥 체험

const login={
    chInput(id,pw,success,error){
        setTimeout(() => {
           if(id !== '' && pw !== ''){
            success({chkId: id, chkPw : pw});
           } else{
            error(new Error('잘못 입력 하셨습니다.'));
           }
        }, 500);
    }
    ,loginUser(id,pw,success,error){
        setTimeout(() => {
            if(id === 'php506' && pw === '506'){
             success(id);
            } else{
             error(new Error('없는 유저입니다. '));
            }
         }, 500);}
    ,checkAuth(id,success,error){
        setTimeout(() => {
            if(id === 'php506'){
             success({authId:id,auth:'admin'});
            } else{
             error(new Error('권한이 없습니다.'));
            }
         }, 500);
    }
    }


const id = '';
const pw = '';

login.chInput(
    id
    ,pw
    , chkData =>{
        login.loginUser(
            chkData.chkId
            ,chkData.chkPw
            , loginId =>{
                login.checkAuth(
                    loginId
                    ,authData =>{console.log(`${authData.authId}유저님, 권한은 ${authData.auth}입니다.`)
                    ,authError=>{console.log(authError.message);}                    } 
            , loginError => {console.log(loginError.message)}
        )
    }
    ,chkError=>{console.log(chkError.message);}
)});






// 콜백함수

function myCallBack(i){
    return i + 1 ;
}

function printNum(fn){
    console.log(fn(2));
}

// 콜백함수를 아규먼트로 사용할 때는 소괄호 사용 x 

printNum(myCallBack);



// const a = 'aa';
// const b = 'bb';
// console.log(`${a}와 ${b}가 있습니다.`);
// 변수를 한꺼번에 작성하려고 할 때 변수에 ${} 사용 
