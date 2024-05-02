document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-dashboard.html"; 
    });
});
