<?php
include('config.php');
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartStitch-Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

  <style>
    * {
      text-decoration: none;
      margin: 0;
      padding: 0%;
    }

    body {
      background-color: #e0e3ce;
    }

    .homebutton input {
      width: 150px;
      padding: 15px;
      border: none;
      border-radius: 30px;
      margin-top: 20px;
      background-color: #2b300d;
      color: #e0e3ce;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .homebutton input:hover {
      box-shadow: 0px 0px 0px 1px #7e876d;
      opacity: 0.7;
    }

    #myVideo {
      display: none;
    }

    @media only screen and (max-width: 768px) {
      #myVideo {
        display: block;
      }

      .welcomeimg {
        display: none;
      }

    }
  </style>

</head>

<body>
  <?php
  include('header.php');

  ?>

  <main>
    <video class="welcomeimg" autoplay muted width="100%">
      <source src="Images/Home-Landscape.mp4" type="video/mp4">
    </video>
    <video id="myVideo" autoplay muted width="100%">
      <source src="Images/Home-Portrait.mp4" type="video/mp4">
    </video>

  </main>

  <?php
  include('footer.php');
  ?>
</body>

</html>