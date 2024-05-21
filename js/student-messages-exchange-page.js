document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard30");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services30");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications29");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages23");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-inbox-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".about-us8");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-about-us.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".help-support8");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-help-support.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".settings31");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-settings.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".student-messages-exchange-page-child");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-inbox-page.html"; 
    });
});

document.getElementById("logout").addEventListener("click", redirectToPHP);
function redirectToPHP() {
    window.location.href = 'index.php';
}