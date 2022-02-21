/*
* author: adex
* date : 2022-02-21
* description: iterate through the array and add 0 to the back of each element
*/

let a = "123456789";
let b = 123456789;

const result = (a)=>{
    const x = a.toString().split("");
    let arr = [];
    for (let i = 0; i < x.length; i++){
        const zero = [];
        for (let j = 0; j < x.length-i-1; j++) {
            zero.push(0);
        }
        arr.push(x[i] + zero.join(""));
    }
    return arr;
}
console.log(result(b));