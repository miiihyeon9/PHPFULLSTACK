//! 중요하답니다
// resolve, reject 모두 콜백함수
// Promise에서 자동으로 생성됨 
// 성공했을 때 resolve 호출
// 예외상황, 에러났을때 reject 호출
// const promise1 = new Promise((resolve,reject)=>{
//     const data = true;
//     if(data){
//         resolve('Success');
//     }else{
//         reject('Error');
//     }
// });


// myPromise()
// .then(data=>{console.log(data);})     // 성공적으로 수행되었을 때 실행되는 코드 
// .catch(error=>{console.log(error);})    // 실패했을 때 실행되는 코드 
// .finally(()=>{console.log('끝');})    // 성공,실패 상관없이 무조건 실행되는 코드 

// // Promise 함수 등록
function myPromise(){
    new Promise((resolve,reject)=>{
        const data = true;
        if(data){
            resolve('Success');
        }else{
            reject('Error');
        }
    })
}






const Login = {
    chkInput(id,pw){
        return new Promise((resolve,reject)=>{
            setTimeout(()=>{
                if(id !== '' && pw !== ''){
                    resolve({chkId:id, chkPw:pw});
                   } else{
                    reject(new Error('잘못입력하셨습니다.'));
                   }
            },500);
        });
    }
    ,loginUser(id,pw){
        return new Promise((resolve,reject)=>{
        setTimeout(() => {
            if(id === 'php506' && pw === '506'){
             resolve(id);
            } else{
             reject(new Error('없는 유저입니다. '));
            }
         }, 500);
        })
    }
        ,checkAuth(id){
            return new Promise((resolve,reject)=>{
            setTimeout(() => {
                if(id === 'php506'){
                 resolve({authId:id,auth:'admin'});
                } else{
                 reject(new Error('권한이 없습니다.'));
                }
             }, 500);
        });
}}

const id ='php506';
const pw ='506';

Login.chkInput(id,pw)
.then(chkData=>Login.loginUser(chkData.chkId , chkData.chkPw))
.then(loginId => Login.checkAuth(loginId))
.then(authData=>console.log(`${authData.authId}유저님, 권한은 ${authData.auth}입니다.`))
.catch(error=>console.log(error.message))
.finally(()=>console.log('끝'));