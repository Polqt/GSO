<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['AcctType'] != 'student'){
    // Redirect to the login page
    header('Location: index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./student-dashboard.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=SF Pro:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=ABeeZee:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="student-page-landing-page">
      <div class="header16">
        <div class="header-child28"></div>
        <img class="logo-1-icon23" alt="" src="./public/logo-12@2x.png" />

        <div class="header-child29"></div>
        <img
          class="material-symbolsnotifications-icon21"
          alt=""
          src="./public/materialsymbolsnotifications1.svg"
        />

        <img
          class="mask-group-icon23"
          alt=""
          src="./public/mask-group11@2x.png"
        />

        <div class="welcome-back-johnny17">Welcome back, Johnny</div>
      </div>
      <div class="navigation-column15">
        <div class="navigation-column-child28"></div>
        <div class="dashboard23" style="cursor: pointer;">Dashboard</div>
        <div class="messages16"  style="cursor: pointer;">Messages</div>
        <div class="services23"  style="cursor: pointer;">Services</div>
        <div class="notifications22" style="cursor: pointer;">Notifications</div>
        <div class="about-us1" style="cursor: pointer;">About Us</div>
        <div class="help-support1" style="cursor: pointer;">Help & Support</div>
        <div class="settings24" style="cursor: pointer;">Settings</div>
        <img
          class="navigation-column-child29"
          alt=""
          src="./public/line-13.svg"
        />
        <button onclick="redirectToPHP()" id="logout" class="logout">
        <div class="sign">
          <svg viewBox="0 0 512 512">
            <path
              d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
            ></path>
          </svg>
        </div>
        <div class="text">Logout</div>
      </button>
    </div>

      <div class="tickets34">
        <div class="tickets-child38"></div>
        <div class="facilities-reservation7">Facilities Reservation</div>
        <div class="facilities-reservation8">Facilities Reservation</div>
        <div class="facilities-reservation9">Facilities Reservation</div>
        <div class="recent-tickets10">
          <div class="recent-requests1">Recent Requests</div>
          <div class="no8">No.</div>
          <div class="div121">02</div>
          <div class="div122">03</div>
          <div class="april-04-202438">April 04, 2024</div>
          <div class="april-04-202439">April 04, 2024</div>
          <div class="description11">Description</div>
          <div class="date13">Date</div>
          <div class="status19">Status</div>
          <div class="recent-tickets-child2"></div>
          <div class="pending9">Pending</div>
          <div class="recent-tickets-child3"></div>
          <div class="solved11">Solved</div>
          <div class="type9">Type</div>
          <div class="ticket-114">
            <div class="ticket-1-child25"></div>
            <div class="working8">Working</div>
            <div class="div123">01</div>
            <div class="april-04-202440">April 04, 2024</div>
          </div>
        </div>
        <div class="lorem-ipsum-dolor47">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra eros lobortis. Integer quis mauris
          nec justo ultrices aliquet. Ut ac dui euismod, ultricies enim eget,
          gravida tellus. Suspendisse potenti.....
        </div>
        <div class="lorem-ipsum-dolor48">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra eros lobortis. Integer quis mauris
          nec justo ultrices aliquet. Ut ac dui euismod, ultricies enim eget,
          gravida tellus. Suspendisse potenti.....
        </div>
        <div class="lorem-ipsum-dolor49">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra eros lobortis. Integer quis mauris
          nec justo ultrices aliquet. Ut ac dui euismod, ultricies enim eget,
          gravida tellus. Suspendisse potenti.....
        </div>
      </div>
      <div class="announcements1">Announcements</div>
      <img
        class="student-page-landing-page-child"
        alt=""
        src="./public/rectangle-81@2x.png"
      />

      <img
        class="student-page-landing-page-item"
        alt=""
        src="./public/rectangle-12@2x.png"
      />

      <img
        class="student-page-landing-page-inner"
        alt=""
        src="./public/rectangle-8@2x.png"
      />

      <img
        class="student-page-landing-page-child1"
        alt=""
        src="./public/rectangle-10@2x.png"
      />

      <img
        class="student-page-landing-page-child2"
        alt=""
        src="./public/rectangle-11@2x.png"
      />
    </div>

    <script src="js/student-dashboard.js"></script>
  </body>
</html>
