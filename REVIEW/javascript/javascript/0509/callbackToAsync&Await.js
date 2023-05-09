// class UserStorage{
//     loginUser(id,password){
//         return new Promise((resolve,reject)=>{
//             setTimeout(()=>{
//                 if(
//                     (id === 'ellie'&& password ==='dream')||
//                     (id === 'coder'&& password ==='academy')
//                 ){
//                     resolve(id);
//                 }else{
//                     reject(new Error('Not found'));
//                 }
//             },2000);  
//         })
//     }

//     getRoles(user){
//         return new Promise((resolve,reject)=>{
//             setTimeout(()=>{
//                 if(user === 'ellie'){
//                     resolve({name:'ellie',role:'admin'});
//                 }else{
//                     reject(new Error('No access'));
//                 }
//             },1000);
//         })
//     }
// }


// const userLogin = new UserStorage();
// const id = prompt("what's your Id?");
// const pw = prompt("what's your Password?");

// async function check(){
//     try{
//         const userId = await userLogin.loginUser(id,password);
//         const userRole = await userLogin.getRoles(user);
//         alert(`${userRole.name}님은 ${userRole.role}입니다.`);
//     }catch{
//         error=>console.log(error);
//     }
// }

// check();







function myPro(text,num){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            console.log(text);
            resolve()
        },num);
    });
}

async function abc(){
    try{
        const abcA = await myPro('a',3000);
        const abcB = await myPro('b',2000);
        const abcC = await myPro('c',1000);
    }catch(error){
        console.log(error);
    }
}


abc();






// 사용자의 아이디와 비번을 받아서 로그인. 
// const userStorage = new UserStorage();
// const id = prompt('enter your id');
// const password = prompt('enter your password');

// async function checkUser() {
// try {
//     const userId = await userStorage.loginUser(id, password);
//     const user = await userStorage.getRoles(userId);
//     alert(`Hello ${user.name}, you have a ${user.role}`);
// } catch (error) {
//     console.log(error);
// }
// }

// checkUser();