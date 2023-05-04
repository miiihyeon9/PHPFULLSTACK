//* Math
// Math.ceil() : 올림 
console.log(Math.ceil(3.33));

// Math.round() : 반올림
console.log(Math.round(3.33));

// Math.floor() : 내림
console.log(Math.floor(3.33));

// Math.random() : 랜덤으로 난수를 뽑아냄
// 난수 : 0에서 1미만의 실수
console.log(Math.random());


// 1~10 까지 랜덤으로 
// 랜덤으로 뽑고 *10 하고 +1하고 내림 
let ran = Math.random()
const rand = Math.floor(ran*10 +1);
const randC = Math.ceil(ran*10);

console.log(rand);
console.log(randC);


