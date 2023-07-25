/*
    Function - Random Argument Challenge
    ====================================
    Create Function showDetails
    Function Accept 3 Parameters [a, b, c]
    Data Types For Info Is
    - String => Name
    - Number => Age
    - Boolean => Status
    Argument Is Random
    Data Is Not Sorted Output Depend On Data Types
    - Use Ternary Conditional Operator
*/
function comp(a, b, c, value) {
    return typeof value == typeof a ? a : typeof value == typeof b ? b : c;
}
function showDetails(a, b, c) {
    let name = "",
        age = 0,
        status = true;
    mess = "You Are Not Available For Hire";

    name = comp(a, b, c, name);
    age = comp(a, b, c, age);
    status = comp(a, b, c, status);

    if (status) mess = "You Are Available For Hire";

    console.log(`Hello ${name}, Your Age Is ${age}, ${mess}`);
}

showDetails("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
showDetails(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
showDetails(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
showDetails(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
