document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard25");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services25");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".tickets-child41");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

const addButton = document.querySelector('.add-ticket-button4');
const fileInput = document.getElementById('fileInput');

addButton.addEventListener('click', () => {
    fileInput.click(); 
});

fileInput.addEventListener('change', (event) => {
    const selectedFile = event.target.files[0];
    if (selectedFile) {
        console.log('Selected file:', selectedFile.name);
    }
});

document.getElementById("logout").addEventListener("click", redirectToPHP);
function redirectToPHP() {
    window.location.href = 'index.php';
}