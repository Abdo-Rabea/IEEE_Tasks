/*
    If Condition Challenge
*/

let a = 10;

a < 10
    ? console.log(10)
    : a >= 10 && a <= 40
    ? console.log("10 To 40")
    : a > 40
    ? console.log("> 40")
    : console.log("Unknown");

// Write Previous Condition With Ternary If Syntax

let st = "Elzero Web School";

if ((2 * st.length).toString() === "34") {
    console.log("Good1");
}

// W Position May Change
if (st[st.indexOf("W")].toLowerCase() === "w") {
    console.log("Good2");
}

if (typeof st.length !== "string") {
    console.log("Good3");
}

if (typeof st.length === "number") {
    console.log("Good4");
}

if (st.substring(0, 6).repeat(2) === "ElzeroElzero") {
    console.log("Good5");
}
