document.addEventListener("DOMContentLoaded", function() {
    const ticketsElement = document.querySelector(".open-button-child6");
    ticketsElement.addEventListener("click", function() {
        window.location.href = "index.php"; 
    });
});

const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li'); 
    const selected = dropdown.querySelector('.selected');
 
    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    });

    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
            options.forEach(option => {
                option.classList.remove('active');
            });
            option.classList.add('active'); 
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Get the submit button element
    const submitButton = document.querySelector(".cssbuttons-io-button");

    // Add event listener for button click
    submitButton.addEventListener("click", function (event) {
      // Prevent default button click behavior
      event.preventDefault();

      // Simulate a 2-second loading delay
      setTimeout(function () {
        // Redirect to index.php after 2 seconds
        window.location.href = "index.php";
      }, 1000);
    });
});