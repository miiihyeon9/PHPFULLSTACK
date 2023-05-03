// 3. 그 배열을 알러트로 출력해 주세요. 

let num =100;
let result = [];
// * 1번
// 1. 1~입력값의 요소를 가지는 배열의 만들어 주세요. 
for(let i = 1; i<=num;i++)
{
    result.push(i);
}


// * 2번
// 2. 그 배열에서 소수만 찾아서 새로운 배열을 만들어 주세요.


// for( let i=1 ; i<=num; i++)
// {
//     let remain = 0;
//     for(let j =1 ; j<= i ; j++)
//     {
//         if(i%j===0)
//         {
//             remain++;
//         }
//     }
    
//     if(remain === 2)
//     {
//         result.push(i);
//     }
// }

// 


let alertResult = result.filter(
function (val){
        let remain = 0;
        for(let j =1 ; j<= val ; j++)
        {
            if(val%j===0)
            {
                remain++;
            }
        }
        if(remain === 2)
        {
            return true;
        }else{
            return false;
        }
}
)

// result.filter()



