document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".dashboard33");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-dashboard.php"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".services33");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-services.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".notifications32");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-notifications-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".messages26");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-messages-inbox-page.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".about-us12");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-about-us.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".help-support11");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-help-support.html"; 
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".settings34");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "student-settings.html"; 
    });
});

document.getElementById("logout").addEventListener("click", redirectToPHP);
function redirectToPHP() {
    window.location.href = 'index.php';
}