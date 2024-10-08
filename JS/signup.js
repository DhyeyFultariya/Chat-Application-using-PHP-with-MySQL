
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
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                // if (data === "success") {
                //     location.href = "users.php";
                // } else {
                //     errorText.style.display = "block";
                //     errorText.textContent = data;
                // }
            }
        }
    }
    // we have to send the form data through ajex to php 
    let formData = new FormData(form);  // Create new form data
    xhr.send(formData); // sending the form data to php 
}