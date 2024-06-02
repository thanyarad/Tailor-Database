<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width= , initial-scale=1.0" />
  <title>SmartStitch-Welcome</title>
  <!-- <link rel="stylesheet" href="index.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

  <script>
    const toggle = () => {
      document.getElementById('display').classList.toggle('displayactive');
    }

    document.addEventListener("DOMContentLoaded", function() {
      const activePage = window.location.pathname;
      // console.log(activePage);

      const navLinks = document.querySelectorAll('.list-ul li a');
      navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        // console.log('/'+linkHref);
        linkH = '/' + linkHref;


        if (linkH === activePage) {
          link.classList.add('active');
        }
      });
    });
  </script>
  <style>
    @font-face {
      font-family: 'hii';
      src: url('fonts/TT-Norms-sv/TT Norms sv/TTNorms-Regular.otf');
    }

    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      list-style: none;
      font-family: 'hii';

    }

    .nav-div {
      width: 100%;
      height: 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #7e876d;
      border-bottom: 8px solid #2b300d;
    }

    .nav-logo {
      display: flex;
      justify-content: center;
      width: 30%;
      transition: 0.3s;
    }

    .nav-logo a {
      display: flex;
      align-items: center;
    }

    .nav-list {
      width: 30%;
    }

    .list-ul {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }

    .list-ul li a {
      transition: 0.2s;
      font-size: 18px;
      color: #2b300d;
      /* padding: 4px 8px 4px 8px; */
    }

    .signout {
      padding: 8px 15px 8px 15px;
      border-radius: 10px;
      border: none;
      background-color: #2b300d;
      color: #e0e3ce;
      font-size: 15px;
      cursor: pointer;
      transition: 0.2s;
    }

    .list-ul li a:hover {
      color: #2b300d;
      background-color: #e0e3ce;
      border-radius: 4px;
      opacity: 0.5;
    }

    .nav-logo a:hover {
      opacity: 0.5;
    }

    .nav-menuicon {
      display: none;
    }

    a.active {
      color: #2b300d;
      background-color: #e0e3ce;
      padding: 4px 8px 4px 8px;
      border-radius: 4px;

    }

    #myVideo {
      display: none;
    }

    @media only screen and (max-width: 1000px) {
      .nav-list {
        width: 50%;
      }

    }

    @media only screen and (max-width: 768px) {
      #myVideo {
        display: block;
      }

      .welcomeimg {
        display: none;
      }

    }



    @media only screen and (max-width: 700px) {
      .nav-div {
        width: 100%;
        display: flex;
        justify-content: space-between;
      }

      .nav-logo {
        width: 60%;
        position: absolute;

      }

      .nav-logo a {
        display: flex;
        align-items: center;
      }

      .nav-list {
        display: block;
        z-index: 10;

      }

      .list-ul {
        background-color: #7e876d;
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 0;
        height: 20%;
        width: fit-content;
        padding-left: 20px;
        padding-right: 20px;
        border-bottom-left-radius: 10px;

      }

      .nav-menuicon {
        display: flex;
        position: absolute;
        right: 30px;
        cursor: pointer;
        padding: 4px;

      }

      .nav-menuicon:hover {
        background-color: #e0e3ce;
        border-radius: 2px;

      }

      .list-ul li a:hover {
        color: #e0e3ce;
      }

      .nav-list {
        display: none;
      }

      .nav-list.displayactive {
        display: block;
      }

    }
  </style>

</head>

<body>

  <header>
    <div class="nav-div">
      <div class="nav-logo">
        <a href="<?php echo SITEURL; ?>index.php">
          <img src="Images/SmartStitchLogo.png" alt="SmartStitch" width="180px ">
        </a>
      </div>
      <div class="nav-menuicon" onclick="toggle()">
        <i class="fa-solid fa-bars" style="color: #2b300d;"></i>
      </div>
      <div class="nav-list" id="display">
        <ul class="list-ul">
          <li> <a href="<?php echo SITEURL; ?>tailor_login.php"><button class="signout">Admin Login</button></a>
          </li>
          <li> <a href="<?php echo SITEURL; ?>sign_up.php"><button class="signout">Sign Up</button></a>
          </li>
          <li> <a href="<?php echo SITEURL; ?>sign_in.php"><button class="signout">Sign In</button></a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <video autoplay muted id="myVideo" width="100%">
      <source src="Images/Index-portrait.mp4" type="video/mp4">

    </video>

    <video class="welcomeimg" autoplay muted width="100%">
      <source src="Images/Index-landscape.mp4" type="video/mp4">

    </video>

    <!-- <img class="welcomeimg" src="Images/welcome.jpg" alt="" width="100%"> -->
    <!-- <div class="quote">
      <h1>We Visit you instead of making you Travel</h1>
    </div> -->

  </main>
  <?php
  include('footer.php');
  ?>

</body>

</html>