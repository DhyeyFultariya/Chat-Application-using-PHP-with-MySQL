
const pswdField = document.querySelector(".form input[type='password']");
toggleBtn = document.querySelector(".form .field i");


toggleBtn.addEventListener("click", () => {
    if (pswdField.type == "password") {
        pswdField.type = "text";
        toggleBtn.classList.add("active");
    } else {
        pswdField.type = "password";
        toggleBtn.classList.remove("active");
    }
})


pswdField.addEventListener("click", () => {})