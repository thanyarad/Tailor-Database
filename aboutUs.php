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
  <title>SmartStitch-About Us</title>
  <link rel="stylesheet" href="aboutUs.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="icon" type="image/x-icon" href="Images/Favicon.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      font-size: 62.5%;
    }

    body {
      background-color: #e0e3ce;
    }

    main {
      width: 100%;
      color: #2b300d;
    }

    .about h3 {
      line-height: 6rem;
      text-transform: uppercase;
      font-size: medium;
    }

    .about p {
      font-size: 1.65rem;
      text-align: justify;
      line-height: 2.5rem;
    }

    .heading {
      margin-top: 4rem;
      margin-left: 2.5rem;
      margin-right: 2.5rem;
      font-size: 2rem;
      text-align: center;
      text-transform: uppercase;
    }

    .about {
      width: 100%;
      display: flex;
    }

    .location {
      margin-top: 3rem;
      width: 100%;
      height: 25rem;
      border: none;
    }

    .about-us,
    .about-story {
      margin: 5rem;
      margin-top: 3rem;
      /* border: 2px solid black; */

    }

    .about-us {
      margin-left: 2.5rem;
    }

    .about-story {
      margin-right: 2.5rem;
    }

    .us-visit {
      display: flex;
      flex-direction: column;
    }

    @media only screen and (max-width: 910px) {

      .about-us,
      .about-story {
        margin: 4rem;
        margin-top: 3rem;
        /* border: 2px solid black; */

      }

      .about-us {
        margin-left: 2rem;
      }

      .about-story {
        margin-right: 2rem;
      }

    }

    @media only screen and (max-width: 700px) {
      * {
        font-size: 59%;
      }

      .about {
        display: flex;
        flex-direction: column;
      }

      .about-us {
        margin-top: 0;
        margin-left: 4rem;
      }

      .about-story {
        margin-right: 4rem;
      }

    }

    @media only screen and (max-width: 400px) {
      * {
        font-size: 56%;
      }

      .about-us,
      .about-story {
        margin: 2.5rem;
        margin-top: 1.5rem;
        /* border: 2px solid black; */
      }

      .heading {
        margin-left: 1.4625rem;
        margin-right: 1.4625rem;
      }
    }
  </style>
</head>


<body>
  <?php
  include('header.php');
  ?>

  <main>
    <h2 class="heading">Welcome to SmartStitch - A Tailor Made Perfection</h2>
    <div class="about">
      <div class="about-story">

        <h3>Our Story</h3>
        <p>At SmartStitch, we believe that clothing is more than just fabric and thread; it's a form of self-expression. Our journey began 2023 with a passion for creating perfectly tailored garments that make you feel confident, stylish, and uniquely you.</p>
        <h3>Crafting Excellence</h3>
        <p>What sets us apart is our unwavering commitment to craftsmanship. We've assembled a team of skilled artisans who are not just tailors but true craftsmen, each with a wealth of experience in the art of tailoring. Our meticulous attention to detail and dedication to quality ensure that every piece we create is a masterpiece.</p>
        <h3>Bespoke Tailoring</h3>
        <p>We understand that every individual is unique, and so are their style preferences. That's why we specialize in bespoke tailoring. Our tailors work closely with you to understand your vision, body shape, and personal style. Whether it's a classic suit, a stunning evening gown, or everyday casual wear, we bring your ideas to life with precision and flair.</p>
        <h3>Sustainable Fashion</h3>
        <p>We're committed to sustainability. In a world that's increasingly conscious of its environmental impact, we strive to make a difference. We source eco-friendly fabrics, minimize waste, and implement ethical practices in our production processes. With us, you can look good and feel good about your choices.</p>
        <h3>Our Promise</h3>
        <ul>
          <li>
            <p>Quality: We never compromise on quality. Each garment is crafted with the utmost care and attention to detail.</p>
          </li>
          <li>
            <p>Customer Satisfaction: Your satisfaction is our top priority. We're not happy until you're thrilled with your outfit.</p>
          </li>
          <li>
            <p>Timely Delivery: We understand the importance of punctuality. You can trust us to deliver on time, every time.</p>
          </li>
        </ul>
      </div>

      <div class="about-us">
        <div class="us-contact">
          <h3>Contact Us</h3>
          <p>Have questions or want to schedule a consultation? We're just a phone call or email away. Reach out to us anytime, and we'll be delighted to assist you. <br><br>
            <i class="fa-solid fa-phone" style="color: black;"></i> +91 9999999999 <br><i class="fa-solid fa-envelope" style="color: black;"></i> smartstitch@gmail.com <br><br>
            Thank you for choosing SmartStitch. We look forward to being your trusted partner in creating exceptional clothing that reflects your style and personality.
          </p>
        </div>
        <div class="us-visit">
          <h3>Visit Us</h3>
          <p>We invite you to visit our store and experience the world of custom tailoring firsthand. Our friendly team is ready to assist you in creating the wardrobe of your dreams.</p>
          <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9521174925308!2d74.8961023750754!3d12.910799087399017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba359dfac132663%3A0xa7bf228838232d32!2sSt%20Joseph%20Engineering%20College!5e0!3m2!1sen!2sin!4v1700657077958!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </main>

  <?php
  include('footer.php');
  ?>
</body>

</html>