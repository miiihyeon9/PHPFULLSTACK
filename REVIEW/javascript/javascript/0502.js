let star='';

for(let i = 1; i<=5 ; i++){
    for(let j = 1; j<=5-i;j++){
        star += " ";
    }
    for (let z = 1; z<= 2*z-1 ; z++)
    {
        star +='*';
    }
    star +='\n';
}

console.log(star);