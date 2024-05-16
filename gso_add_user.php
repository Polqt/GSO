<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./sign-in.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=SF Pro:wght@400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee:wght@400&display=swap" />
</head>
<body>
  <form action="gso_add_user_confirm.php" method="post">
    <div class="sign-up">
      <div class="rectangle-parent15">
        
        <div class="dropdown" name="accttype" id="acctid">
          <div class="select" name="accttype" id="acctid">
            <span class="selected" name="accttype">Account Type</span>
            <div class="caret"></div>
          </div>
          <ul class="menu">
            <li class="active">Faculty</li>
            <li>Student</li>
          </ul>
        </div>

        <div class="frame-child25">
          <input autocomplete="off" class="input" name="firstname" id="firstname">
          <div></div></div>
          
        <div class="accttype">Account Type</div>
        
        <div class="firstname" name="firstname" id="firstname">First Name</div>

        <div class="frame-child27">
          <input autocomplete="off" class="input" name="lastname" id="lastname">
          <div></div></div>

        <div class="lastname" name="lastname" id="lastname">Last Name</div>
        <div class="frame-child28">
          <input autocomplete="off" class="input" name="acctid" id="acctid">
          <div></div></div>
          <div class="frame-child29">
            <input autocomplete="off" class="input" name="birthday" id="birthday">
            <div></div></div>
        <div class="acctid" name="acctid" id="acctid">Account ID</div>
        <div class="birthday" id="birthday" name="birthday">Birthday</div>

        <div class="frame-child31">
          <input autocomplete="off" class="input" name="username" id="username">
          <div></div></div>
        <div class="username" name="username" id="username">Email</div>

        <div class="frame-child32">
          <input autocomplete="off" class="input" name="password" id="password">
          <div></div></div>
        <div class="password" name="password" id="password">Password</div>
        <i class="for-password-default"
          >For password, default format is: First Initial + Last Initial +
          University ID (TD000000)</i
        >
      </div>

        <img class="open-button-child6" alt="" src="./public/group-71.svg" />

        <button type="submit" class="cssbuttons-io-button">
          Submit
          <div class="icon">
            <svg
              height="24"
              width="24"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                fill="currentColor"
              ></path>
            </svg>
          </div>
        </button>
        
      
      <div class="create-gso-account">Create GSO Account</div>
    </div>
  </form>

  <script src="js/sign-in.js"></script>
</body>
</html>
