document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard28");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services28");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications27");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages21");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-inbox-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".about-us6");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-about-us.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".help-support6");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-help-support.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".settings29");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-settings.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".tickets-child52");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-page.html"; 
    });
});

document.getElementById("logout").addEventListener("click", redirectToPHP);
function redirectToPHP() {
    window.location.href = 'index.php';
}