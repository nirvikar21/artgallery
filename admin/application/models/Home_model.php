//Generator
//==========

function* gs(){
    yield 1;
    yield 2;
    yield 3;
    yield 4;
    yield 5;
    yield 6;
    return

}
let generator=gs();
for(let values of generator){
     alert(value);
}

//Memoization
//===========

function sqrt(arg) {
    if (!sqrt.cache) {
        alert("a1");
        sqrt.cache = {}
    }
    if (!sqrt.cache[arg]) {
        alert("a2");
        return sqrt.cache[arg] = Math.sqrt(arg)
    }
    return sqrt.cache[arg]
}
sqrt(4);

//promise chaining
//================

new promise(function(resolve,reject){
    setTimeout(()=>resolve(1),1000);
}).then(function(result){
    console.log(result);
    return result*2;
}).then(function(result){
    console.log(result);
    return result*3;
})

//async/await
//===========

async function f() {
  let promise = new Promise((resolve, reject) => {
    setTimeout(() => resolve("done!"), 10000)
  });
  let result = await promise; 
  alert(result); // "done!"
}

f();


//RestParamter
//============
function sum(...inputs){
    let sum=0
    for(let i of inputs){
        sum+=i;
    }
return sum;
}
sum(1,2,3,4,5,6,7,8,9);

//Callback
//=========
function callBackFunc(a,b){
    let sum=a+b;
    console.log(sum);
}
function outerFunc(funcName,a,b){
     console.log('here is the sum of two number')   
     funcName(a,b);
}

outerFunc(callBackFunc,4,5);

//Closure
//=======

function outerFun(a){
    let b=10;
    function innerFun(){
        let sum=a+b;
        console.log(`The sum is.${sum}`);
    }
    return innerFun();
}
const fdf=outerFun(5);
console.log(fdf);

//Mixin
//=====

const walking={
    walk:function(){
        return"i can walk";
    }
}

let Rahul=Object.assign({},walking);
Rahul.walk();

//Curring Function
//================

function multiply(a){
	return (b)=>{
		return(c)=>{
			return a*b*c;
		}	
	}
}
multiply(1)(2)(3);

//call
//====
const emp1={
    Fname:'Nirvikar',
    Lname:'Satsangi',
    showFullName:function(){
        console.log(this.Fname+' '+this.Lname);
    }    
}
const emp2={
    Fname:'Abhishek',
    Lname:'Saxena'

}
emp1.showFullName.call(emp2);

//Apply
//=====
const emp1={
    Fname:'Nirvikar',
    Lname:'Satsangi',
    showFullName:function(){
        console.log(this.Fname+' '+this.Lname);
    }    
}

const emp2={
    Fname:'Abhishek',
    Lname:'Saxena'

}
emp1.showFullName.apply(emp2,['Amit','Saxena']);


