<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="./global.css">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=SF Pro:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@500&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee:wght@400&display=swap">
</head>
<body>
  <div class="login">
    <main class="singup1"></main>
    <div class="frame-parent">
      <div class="rectangle-parent" id="sign-in-button">
        <div id="sign-in" class="frame-child"></div>
        <button class="sign-in-with" id="sign-in-with" type="submit" name="submit">
              <span>Sign in</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                  <circle stroke-width="3" stroke="white" r="35.5" cy="37" cx="37"></circle>
                  <path fill="white" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
              </svg>
          </button> 
      </div>
      
      <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div class="rectangle-group">
          <button class="continue" id="continue" type="submit">
              <span>Continue</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                  <circle stroke-width="3" stroke="white" r="35.5" cy="37" cx="37"></circle>
                  <path fill="white" d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
              </svg>
          </button> 
      </div>
      <div class="forgot-password">Forgot Password?</div>
      <div class="rectangle-container">
        <div class="frame-inner"></div>
        <b class="student-id">Student ID / Faculty Email</b>
        <input type="text" class="input-field" id="username" name="username" placeholder="Enter your email" required>
      </div>
      <div class="frame-div">
        <div class="frame-inner"></div>
        <b class="student-id">Password</b>
        <input type="password" class="input-field" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <img class="logo-1-icon" alt="" src="./public/logo-1@2x.png">
    </form> 
    </div>
  </div>
  <script src="js/index.js"></script>
</body>
</html>
