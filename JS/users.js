
const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}

setInterval(() => {
    // Start AJEX
    const xhr = new XMLHttpRequest();  // Create XML object
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    xhr.send();
}, 500)     //this function will run frquently after 500ms