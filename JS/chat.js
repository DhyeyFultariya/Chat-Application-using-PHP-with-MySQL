const form = document.querySelector(".typing-area");
const inputField = form.querySelector(".input-field");
const sendBtn = form.querySelector("button");
const chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
        // Start AJEX
        const xhr = new XMLHttpRequest();  // Create XML object
        xhr.open("POST", "php/insert-chat.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    inputField.value = "";
                    scrollToBottom();
                }
            }
        }
        // we have to send the form data through ajex to php 
        let formData = new FormData(form);  // Create new form data
        xhr.send(formData); // sending the form data to php 
}

setInterval(() => {
    // Start AJEX
    const xhr = new XMLHttpRequest();  // Create XML object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                // if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                // }
            }
        }
    }
    // we have to send the form data through ajex to php 
    let formData = new FormData(form);  // Create new form data
    xhr.send(formData); // sending the form data to php 
}, 500)     //this function will run frquently after 500ms


function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}


