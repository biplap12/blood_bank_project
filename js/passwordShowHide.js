

// function showPassword() {
// let password =document.getElementById("Current_password");
// var button =document.getElementById("passwordShowHide")[0];
// if (password.type==="password") {  
// password.type = "text";
// button.innerHTML="<i class='fas fa-eye-slash'></i>";
// button.style.backgroundRepeat = "no-repeat"; 
// button.style.backgroundPosition = "center";
// } else {
// password.type = "password";
// button.innerHTML="<i class='fas fa-eye'></i>";
// button.style.backgroundRepeat = "no-repeat";
// button.style.backgroundPosition = "center";
// }

// }



function showPassword() {
    let password = document.getElementById("Current_password");
    var button = document.getElementById("passwordShowHide")[0];
    if (password.type === "password") {
        password.type = "text";
        passwordShowHide.innerHTML = "<i class='fas fa-eye-slash'></i>";
        passwordShowHide.style.backgroundRepeat = "no-repeat";
        passwordShowHide.style.backgroundPosition = "center";
    } else {
        password.type = "password";
        passwordShowHide.innerHTML = "<i class='fas fa-eye'></i>";
        passwordShowHide.style.backgroundRepeat = "no-repeat";
        passwordShowHide.style.backgroundPosition = "center";
    }

}
