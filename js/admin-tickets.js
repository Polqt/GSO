document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-dashboard.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-notification.html"; 
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-message.html"; 
    });
});

