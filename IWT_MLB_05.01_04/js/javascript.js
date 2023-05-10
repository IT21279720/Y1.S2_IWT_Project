function searchdropdown() {
    const searchbox = document.querySelector(".search-dropdown");
    if (searchbox.style.display === "none") {
        searchbox.style.display = "block";
    } else {
        searchbox.style.display = "none";
    }
    const searchboxinput = document.querySelector(".search-dropdown input");
    searchboxinput.focus();
}

function profiledropdown() {
    const searchbox = document.querySelector(".profile-dropdown");
    if (searchbox.style.display === "none") {
        searchbox.style.display = "block";
    } else {
        searchbox.style.display = "none";
    }
}


// let searchbox = document.querySelector('.search-box');
// searchbox.onclick = function() {
//     searchbox.classList.toggle('active');
// }