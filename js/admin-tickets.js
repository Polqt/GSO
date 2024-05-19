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

document.addEventListener("DOMContentLoaded", function() {
    const navigationItems = document.querySelectorAll(".navigation-column > div");
    navigationItems.forEach(item => {
        item.addEventListener("click", function() {
            const target = item.getAttribute('data-target');
            if (target) {
                window.location.href = `/${target}.html`;
            }
        });
    });

    document.getElementById("logout").addEventListener("click", redirectToPHP);
    function redirectToPHP() {
        window.location.href = 'index.php';
    }

    document.querySelector('.search-bar-child3').addEventListener('input', filterList);

    function filterList() {
        const searchInput = document.querySelector('.search-bar-child3').value.toLowerCase();
        const listItems = document.querySelectorAll('.list-group-item');

        listItems.forEach((item) => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchInput)) {
                item.style.display = '';
                if (!item.classList.contains('matched-item')) {
                    item.classList.add('matched-item');
                    item.parentElement.prepend(item); // Move matched item to the top
                }
            } else {
                item.style.display = 'none';
                item.classList.remove('matched-item');
            }
        });
    }

    // Example event listener for deleting a ticket (similar approach can be applied to other buttons)
    document.querySelector('.tablertrash-icon5').addEventListener('click', function() {
        document.querySelectorAll('.ticket-1, .tablertrash-icon5, .phpencil-line-icon5').forEach(function(element) {
            element.remove();
        });
    });
});


document.querySelector('.search-bar-child3').addEventListener('input', filterList);

function filterList() {
  const searchInput = document.querySelector('.search-bar-child3');
  const filter = searchInput.value.toLowerCase();
  const listItems = document.querySelectorAll('.list-group-item');

  listItems.forEach((item) => {
    let text = item.textContent.toLowerCase();
    if(text.includes(filter)) {
      item.style.display = '';
      if (!item.classList.contains('matched-item')) {
        item.classList.add('matched-item');
        item.parentElement.prepend(item); 
      }
    } else {
      item.style.display = 'none';
      item.classList.remove('matched-item');
    }
  });
}
