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
  <title>SmartSticth-Shirts</title>
  <link rel="stylesheet" href="pant-shirt.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

</head>

<body>
  <?php
  include('header.php');
  ?>


  <main>

    <?php
    function generateShirtFabricItem($imgSrc, $description, $price, $pageUrl)
    {
      $html = '
<div class="fabric-container">
    <img class="fabric-img" src="' . $imgSrc . '" alt="" height="250px">
    <div class="fabric-info">
    <p>' . $description . '</p>
   
    <div class="placeorder">
    <div>
    <p id="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(205, 35, 35);"></i>
   ' . $price . '<span>/shirt</span>
    <p class="jyo">incl. of stitching charges</p>
</p>
</div>
<div>
            <a href="' . SITEURL . $pageUrl . '?shirt_type=' . $description . '&shirt_price=' . $price . '"><button><i class="fa-solid fa-cart-shopping" style="color: #2b300d;"></i></button></a>
        </div>
    </div>
    </div>

</div>';

      return $html;
    }

    // Example usage:
    echo '<div class="main-div"><div class="secondary-div">';
    echo generateShirtFabricItem("Images/shirtFabric1.jpg", "Cotton Colour Plain Shirt Fabric Green", "842.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric7.jpg", "Cotton Grey with White Checked Shirt Fabric Galaxy", "911.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric3.jpg", "Cotton Striped Shirt Fabric Blue Candy Colour", "1131.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric5.jpg", "Cotton Colour Checked Shirt Fabric Sky Blue Galaxy Art", "972.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric6.jpg", "Cotton Colour Plain Shirt Fabric Grey Galaxy Art", "1168.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric2.jpg", "Cotton Grey Colour Plain Shirt Fabric Candy Colour", "1497.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric4.jpg", "Cotton Mixed Plain Shirt Fabric Black Flat", "1294.00", "shirt_order.php");
    echo generateShirtFabricItem("Images/shirtFabric8.jpg", "Cotton White Checked Shirt Fabric Galaxy Art", "1203.00", "shirt_order.php");
    echo '</div></div>';

    ?>

  </main>

  <?php
  include('footer.php');
  ?>

</body>

</html>