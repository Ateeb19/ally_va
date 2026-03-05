// Toggle Password
function togglePassword(inputId, el) {
    const input = document.getElementById(inputId);
    const icon = el.querySelector("i");
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("ri-eye-off-fill");
        icon.classList.add("ri-eye-fill");
    } else {
        input.type = "password";
        icon.classList.remove("ri-eye-fill");
        icon.classList.add("ri-eye-off-fill");
    }
}



// Form Validation
// document.getElementById("signupForm").addEventListener("submit", function(e) {


//     const pass = document.getElementById("signupPassword").value;
//     const confirmPass = document.getElementById("password-confirm").value;
//     // const recaptcha = grecaptcha.getResponse();

//     if (pass !== confirmPass) {
//         e.preventDefault();
//         return; 
//     }
//     return true;
// });