document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-notification.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".tickets1");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-tickets.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-message.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".files");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-files.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".settings");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-settings.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".group-icon");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-gatepass.html"; 
    });
});

function redirectToPHP() {
    window.location.href = 'index.php'; 
  }