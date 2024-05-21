document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard31");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services31");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications30");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages24");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-inbox-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".about-us9");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-about-us.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".help-support9");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-help-support.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".settings32");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-settings.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".ticket-117");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-exchange-page.html"; 
    });
});

document.getElementById("logout").addEventListener("click", redirectToPHP);
function redirectToPHP() {
    window.location.href = 'index.php';
}