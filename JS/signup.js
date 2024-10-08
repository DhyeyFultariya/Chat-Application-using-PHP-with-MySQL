
const form  = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    // Start AJEX
    const xhr = new XMLHttpRequest();  // Create XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {}
    }
    xhr.send();
}