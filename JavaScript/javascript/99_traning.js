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

function param(val){
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


let alertResult = result.filter(val=>param(val));

// result.filter()


function sosu(val){
// 1은 미리 false로 빼주고
    if(val === 1){
        return false;
    }
    // 2보다 크고 val 보다 작은 수로 val를 나누었을 때 나머지가 없으면 
    // i는 val의 약수이다. 
    for(let i =2; i<val; i++){
        if(val%i === 0)
        {
            return false;
        }
    }
}

let alertsosu = result.filter(val=>sosu(val));

