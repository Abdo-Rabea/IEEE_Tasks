/*
    Loop Challenge
*/

let myAdmins = ["Ahmed", "Osama", "Sayed", "Stop", "Samera"];
let myEmployees = [
    "Amgad",
    "Samah",
    "Ameer",
    "Omar",
    "Othman",
    "Amany",
    "Samia",
    "Anwar",
];
stopIndex = myAdmins.indexOf("Stop");
stopIndex = stopIndex == -1 ? myAdmins.length : stopIndex;
document.write(`<div>We Have X Admins</div>`);
document.write(`<div>We Have ${stopIndex} Admins</div>`);
document.write(`<hr>`);

for (i = 0; i < stopIndex; i++) {
    let emp = "",
        c = 1;
    for (j = 0; j < myEmployees.length; j++) {
        if (myEmployees[j][0] == myAdmins[i][0])
            emp += `<p>- ${c++} ${myEmployees[j]}</p>`;
    }
    document.write(`<div>The Admin For Team ${i + 1} Is ${myAdmins[i]}
    <h3>Team Members: </h3>
    ${emp}
    </div>`);
    document.write(`<hr>`);
}
