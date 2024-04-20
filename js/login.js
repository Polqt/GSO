function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
      passwordField.type = "text";
      document.querySelector('.toggle-password').textContent = 'Hide';
    } else {
      passwordField.type = "password";
      document.querySelector('.toggle-password').textContent = 'Show';
    }
  }