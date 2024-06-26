<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['AcctType'] != 'faculty'){
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
  <link rel="stylesheet" href="./admin-dashboard.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=SF Pro:wght@400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee:wght@400&display=swap" />
</head>
<body>
  <div class="admin-dashboard">
    <div class="header1">
      <div class="header-child"></div>
      <img class="logo-1-icon8" alt="" src="./public/logo-12@2x.png" />

      <div class="header-item"></div>
      <form class="form">
        <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
        <input class="input" placeholder="Search..." required="" type="text">
        <button class="reset" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </form>

      <img class="material-symbolsnotifications-icon6" alt="" src="./public/materialsymbolsnotifications1.svg" />

      <img class="mask-group-icon8" alt="" src="./public/mask-group1@2x.png" />

      <div class="welcome-back-johnny3">Welcome back, Johnny</div>
    </div>

    <div class="navigation-column">
      <div class="navigation-column-child"></div>
      <div class="dashboard8" style="cursor: pointer;">Dashboard</div>
      <div class="messages1" style="cursor: pointer;">Messages</div>
      <div class="tickets9" style="cursor: pointer;">Tickets</div>
      <div class="notifications7" style="cursor: pointer;">Notifications</div>
      <div class="services8" style="cursor: pointer;">Services</div>
      <div class="files7" style="cursor: pointer;">Files</div>
      <div class="settings8" style="cursor: pointer;">Settings</div>
      <img class="navigation-column-item" alt="" src="./public/line-13.svg" />
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

      <div class="analytics4">
        <div class="rectangle-parent8">
          <div class="group-child4"></div>
          <div class="div32">157</div>
          <div class="total-amount-of2">Total Amount of Cases</div>
        </div>
        <div class="rectangle-parent9">
          <div class="group-child5"></div>
          <div class="circle-legend1">
            <div class="working4">Working</div>
            <div class="pending3">Pending</div>
            <div class="solved4">Solved</div>
            <div class="circle-legend-child1"></div>
            <div class="circle-legend-child2"></div>
            <div class="circle-legend-child3"></div>
          </div>
          <div class= "circle1">
            <div class="circle-child1"></div>
            <img class="circle-child2" alt="" src="./public/ellipse-31.svg" />

            <img class="circle-child3" alt="" src="./public/ellipse-41.svg" />

            <img class="circle-child4" alt="" src="./public/ellipse-51.svg" />

            <div class="div33">50%</div>
            <div class="div34">25%</div>
            <div class="div35">18%</div>
          </div>
        </div>
        <div class="rectangle-parent10">
          <div class="group-child6"></div>
          <div class="jan1">Jan.</div>
          <div class="feb1">Feb.</div>
          <div class="mar1">Mar.</div>
          <div class="april1">April</div>
          <div class="number-of-cases1">Number of Cases per month</div>
          <div class="div36">100</div>
          <div class="div37">80</div>
          <div class="div38">60</div>
          <div class="div39">40</div>
          <div class="div40">20</div>
          <div class="div41">0</div>
          <div class="group-child7"></div>
          <div class="group-child8"></div>
          <div class="group-child9"></div>
          <div class="group-child10"></div>
          <div class="group-child11"></div>
          <div class="group-child12"></div>
          <div class="div42">99</div>
          <div class="div43">63</div>
          <div class="div44">81</div>
          <div class="div45">95</div>
        </div>
        <div class="rectangle-parent11">
          <div class="group-child13"></div>
          <div class="div46">101</div>
          <div class="total-amount-of3">Total Amount of Unsolved Cases</div>
        </div>
      </div>

      <div class="tickets10">
        <div class="tickets-child9"></div>
        <div class="facilities-reservation">Facilities Reservation</div>
        <div class="facilities-reservation1">Facilities Reservation</div>
        <div class="facilities-reservation2">Facilities Reservation</div>
        
        <div class="recent-tickets2">
          <div class="recent-tickets3">Recent Tickets</div>
          <div class="no3">No.</div>
          <div class="requested-by2">Requested by</div>
          <div class="div47">02</div>
          <div class="div48">03</div>
          <div class="april-04-202414">April 04, 2024</div>
          <div class="april-04-202415">April 04, 2024</div>
          <div class="lorem-ipsum-dolor12">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat velit quis ex rhoncus, id viverra
          </div>
          <div class="lorem-ipsum-dolor13">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat velit quis ex rhoncus, id viverra
          </div>
          <div class="div49">2000889</div>
          <div class="ryan-giray3">Ryan Giray</div>
          <div class="div50">1997778</div>
          <div class="ashley-dale-arguelles2">Ashley Dale Arguelles</div>
          <div class="description4">Description</div>
          <div class="date6">Date</div>
          <div class="status7">Status</div>
      
          <div class="recent-tickets-child"></div>
          <div class="pending4">Pending</div>
          <div class="recent-tickets-item"></div>
          <div class="solved5">Solved</div>
          <div class="type3">Type</div>
      
          <div class="ticket-17">
            <div class="ticket-1-child11"></div>
            <div class="working5">Working</div>
            <div class="div51">2120889</div>
            <div class="div52">01</div>
            <div class="john-leonard-esperancilla7">John Leonard Esperancilla</div>
            <div class="lorem-ipsum-dolor14">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat velit quis ex rhoncus, id viverra
            </div>
            <div class="april-04-202416">April 04, 2024</div>
            <img class="ticket-1-child12" alt="" src="./public/rectangle-302@2x.png" />
          </div>
      
          <img class="recent-tickets-inner" alt="" src="./public/rectangle-311@2x.png" />
          <img class="recent-tickets-child1" alt="" src="./public/rectangle-32@2x.png" />
        </div>
      </div>
      
      <div class="recent-messages">
        <div class="recent-messages-child"></div>
      
        <div class="sent-by2">Sent by</div>
        <div class="snippet">Snippet</div>
      
        <div class="div53">2120889</div>
        <div class="john-leonard-esperancilla8">John Leonard Esperancilla</div>
        <div class="lorem-ipsum-dolor15">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra
        </div>
        <img class="recent-messages-item" alt="" src="./public/rectangle-303@2x.png" />
      
        <div class="div54">2120889</div>
        <div class="john-leonard-esperancilla9">John Leonard Esperancilla</div>
        <div class="lorem-ipsum-dolor16">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra
        </div>
        <img class="recent-messages-inner" alt="" src="./public/rectangle-312@2x.png" />
      
        <div class="div55">2120889</div>
        <div class="john-leonard-esperancilla10">John Leonard Esperancilla</div>
        <div class="lorem-ipsum-dolor17">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra
        </div>
        <img class="recent-messages-child1" alt="" src="./public/rectangle-312@2x.png" />
      
        <div class="div56">2120889</div>
        <div class="john-leonard-esperancilla11">John Leonard Esperancilla</div>
        <div class="lorem-ipsum-dolor18">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat
          velit quis ex rhoncus, id viverra
        </div>
        <img class="recent-messages-child2" alt="" src="./public/rectangle-312@2x.png" />
      
        <div class="recent-messages1">Recent Messages</div>
        <div class="recent-messages-child3"></div>
      </div>      
    
    <script src="js/admin-dashboard.js"></script>
  </body>
</html>
