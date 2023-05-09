class UserStorage{
    loginUser(id,password){
        return new Promise((resolve,reject)=>{
            setTimeout(()=>{
                if(
                    (id === 'ellie'&& password ==='dream')||
                    (id === 'coder'&& password ==='academy')
                ){
                    resolve(id);
                }else{
                    reject(new Error('Not found'));
                }
            },2000);  
        })
    }

    getRoles(user){
        return new Promise((resolve,reject)=>{
            setTimeout(()=>{
                if(user === 'ellie'){
                    resolve({name:'ellie',role:'admin'});
                }else{
                    reject(new Error('No access'));
                }
            },1000);
        })
    }
}




// 사용자의 아이디와 비번을 받아서 로그인. 
const userStorage = new UserStorage();
const id = prompt('enter your id');
const password = prompt('enter your password');

userStorage.loginUser(id,password)
.then(userStorage.getRoles)
.catch(error=>{console.log(error)})
.then(user=>alert(`Hello ${user.name}, you have a ${user.role} role`))
.catch(error=>{console.log(error)});


// userStorage.loginUser(id,password,(user)=>{
//     userStorage.getRoles(user,userWithRole=>{
//         alert(`hello ${user.name}, you have a ${userWithRole.role} role`);
//     },error=>{
//         console.log('error');
//     }
//     );
// },(error)=>{console.log(error)})

