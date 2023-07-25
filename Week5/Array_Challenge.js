/*
    Array Challenge
*/

let zero = 0;

let counter = 3;
let one = zero.toString().length;
let my = ["Ahmed", "Mazero", "Elham", "Osama", "Gamal", "Ameer"];

// Write Code Here
// 1
console.log(my.slice(zero, counter + one).reverse()); // ["Osama", "Elham", "Mazero", "Ahmed"];

// 2
console.log(my.slice(one, counter).reverse()); // ["Elham", "Mazero"]

// 3
let my2 = my.slice(one, counter).reverse().slice(zero, counter);
console.log(
    `${my2[zero].slice(zero, counter - one)}${my2[one].slice(counter - one)}`
); // "Elzero"

// 4
console.log(my[one][counter + 1] + my[counter][zero]); // "rO"
