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
        <div class="dashboard23">Dashboard</div>
        <div class="messages16">Messages</div>
        <div class="services23">Services</div>
        <div class="notifications22">Notifications</div>
        <div class="about-us1">About Us</div>
        <div class="help-support1">Help & Support</div>
        <div class="settings24">Settings</div>
        <img
          class="navigation-column-child29"
          alt=""
          src="./public/line-13.svg"
        />
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