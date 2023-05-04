const mihyeon = {
    firstName : 'Mihyeon'
    ,lastName : 'Kim'
    ,age : 26
}

mihyeon.gender = '여자';
console.log(mihyeon);   //{firstName: 'Mihyeon', lastName: 'Kim', age: 26, gender: '여자'}

delete mihyeon.gender;
console.log(mihyeon);   // {firstName: 'Mihyeon', lastName: 'Kim', age: 26}


// object는 {key :value}집합체



//Cmoputed properties 
console.log(mihyeon.firstName);

//정확하게 어떤 키를 가져와야할지 모를 때 
console.log(mihyeon['firstName']);





// Property value shorthand : 키와 value의 이름이 동일하면 키를 생략 가능
const person1 = { name:'bob' , age : 2 };
const person2 = { name:'steve', age : 3};
const person3 = { name : 'dave', age : 4};


function makePerson(name,age){
    return{
        name
        , age
    }
}

const person4 = makePerson('mihyeon',1);


// Constructor function

function Person(name,age){
    // this = {}
    this.name=name
    , this.age = age
    //return this;
}

const person5 = new Person('mimi',10);

// in operator 
// obj안에 property가 존재하는지 확인

console.log('age' in person1);

console.clear();

// for...in : obj안에 있는 key값을 반복
for(key in person1){
    console.log(key);
}

// for...of : 
// for(value of iterable)

const arr = [1,2,3,4,5];
for(value of arr){
    console.log(value);
}

const fruit1 = {name : 'apple', color : 'red'};
const fruit2 = {color: 'green'}

const mix = Object.assign({},fruit1,fruit2 )//   :obj 복사
