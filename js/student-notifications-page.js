document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard29");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services29");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications28");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages22");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-inbox-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".about-us7");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-about-us.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".help-support7");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-help-support.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".settings30");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-settings.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".ticket-115");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-detail-page.html"; 
    });
});

document.getElementById("logout").addEventListener("click", redirectToPHP);
function redirectToPHP() {
    window.location.href = 'index.php';
}