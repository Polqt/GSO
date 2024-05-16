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
    const ticketsElement = document.querySelector(".tickets");
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
    const ticketsElement = document.querySelector(".john-leonard-esperancilla");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "admin-ticket1.html"; 
    });
});

function redirectToPHP() {
    window.location.href = 'index.php'; 
  }
  
document.querySelector('.tablertrash-icon5').addEventListener('click', function() {
    document.querySelectorAll('.ticket-1, .tablertrash-icon5, .phpencil-line-icon5').forEach(function(element) {
        element.remove();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const searchBox = document.querySelector('.search-bar-child3');

    searchBox.addEventListener('input', function () {
      const query = this.value.toLowerCase();
      const tickets = document.querySelectorAll('.ticket-1, .ticket-2');

      tickets.forEach(ticket => {
        const no = ticket.querySelector('.div, .div2').innerText.toLowerCase();
        const requestedBy = ticket.querySelector('.john-leonard-esperancilla, .ryan-giray').innerText.toLowerCase();
        const description = ticket.querySelector('.lorem-ipsum-dolor, .lorem-ipsum-dolor1').innerText.toLowerCase();
        const type = ticket.querySelector('.facilities-reservation, .facilities-reservation1').innerText.toLowerCase();
        const status = ticket.querySelector('.working, .pending').innerText.toLowerCase();
        const date = ticket.querySelector('.april-04-2024, .april-04-20241').innerText.toLowerCase();

        if (no.includes(query) || requestedBy.includes(query) || description.includes(query) || type.includes(query) || status.includes(query) || date.includes(query)) {
          ticket.style.display = 'block';
        } else {
          ticket.style.display = 'none';
        }
      });
    });
  });