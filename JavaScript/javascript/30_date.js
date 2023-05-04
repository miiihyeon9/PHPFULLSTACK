// * Date
const NOW = new Date('2023-04-30 15:20:30.123');
// 연도만 가져오는 Method 
    //: getFullYear()
let year = NOW.getFullYear();
console.log(year+"년");

// 월을 가져오는 Method
    // : getMonth()
// 0~11을 가져오기 때문에 +1을 해줘야함
let month = NOW.getMonth()+1;
console.log(month+"월");

// 요일을 가져오는 Method
//      : getDay()
// 일요일 : 0 ,월요일 : 1, 화요일 : 2, 수요일 : 3, 목요일 : 4, 금요일 : 5, 토요일 : 6
let day = NOW.getDay();
console.log(day+"요일");

// 날짜를 가져오는 Method
//      : getDate()
let date = NOW.getDate();
console.log(date+"일");

// 시간을 가져오는 Method
//      : getTime()
// 1970년 1월 1일 00시00분00초부터 얼마나 흘렀는지 초를 가져옴
let time = NOW.getTime();
console.log("시간(Linux) : "+time);

// 시간을 가져오는 Method
//      :getHours()
let timeHour = NOW.getHours();
console.log("시간 : "+timeHour);

// 분을 가져오는 Method
//      :getMinutes()
let minute = NOW.getMinutes();
console.log("분 : "+minute);

// 초를 가져오는 Method
//      :getSeconds()
let second = NOW.getSeconds();
console.log("초 : "+second);

// 밀리초를 가져오는 Method
//      :getMilliseconds()
let millisecond = NOW.getMilliseconds();
console.log("밀리초 : "+millisecond);

console.log(NOW.toString());


console.clear();

// 기준일 : 2022년 9월 30일 19시 20분 10초
// 몇일 전인지 출력해 주세요
let standard = new Date('2022-9-30 19:20:10');
let present = new Date();

const dDay = present - standard;

console.log(dDay);

const diffDDay = Math.ceil(dDay/(1000*60*60*24));
// 1000*60*60*24 = 밀리초 *초*분*시간 = 하루 
console.log(diffDDay);


// let standard_r = new Date('2022-9-30');
// let present_r = new Date('2023-5-4');
// let diff = present_r - standard_r;
// console.log(diff);
// const diffDay = diff/(1000*60*60*24);
// console.log(diffDay);

