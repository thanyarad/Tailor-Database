<?php
include('config.php');
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="Images/Favicon.png">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Pants</title>
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
    // Function to generate HTML for each pant fabric item
    function generatePantsFabricItem($imgSrc, $description, $price, $pageUrl)
    {
      $html = '
    <div class="fabric-container">
        <div>
            <img class="fabric-img" src="' . $imgSrc . '" alt="" height="250px">
        </div>
        <div class="fabric-info">
            <p>' . $description . '</p>
            <div class="placeorder">
                <div>
                    <p id="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(205, 35, 35);"></i>
                       ' . $price . '<span>/pant</span>
                        <p class="jyo">incl. of stitching charges</p>

                    </p>
                </div>
                <div>
                    
                        <a href="' . SITEURL . $pageUrl . '?pant_type=' . $description . '&pant_price=' . $price . '">
                            <button><i class="fa-solid fa-cart-shopping" style="color: #2b300d;"></i></button>
                        </a>
                   
                </div>
            </div>
        </div>
    </div>';
      // Output HTML for the current fabric item
      echo $html;
    }

    // Example usage:
    echo '<div class="main-div"><div class="secondary-div">';

    // Call the function for each pant fabric item
    generatePantsFabricItem("Images/pantsFabric1.jpg", "Colour Checks Pants Fabric Black Honey Day", "1228.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric2.jpg", "Cotton Colour Checked Grey Suiting Fabric Fun", "1081.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric3.jpg", "Colour Off White Checks Pants Fabric Honey Day", "1062.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric4.jpg", "Cotton Colour Checked Pant Fabric Sandal Chronicle", "820.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric5.jpg", "Cotton Colour Plain Pants Fabric Navy Style Craft", "1044.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric6.jpg", "Cotton Colour Checked Pants Fabric Grayish Blue", "1308.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric7.jpg", "Wrinkle Free Cotton White Plain Pants Fabric Romantic", "959.00", "pant_order.php");
    generatePantsFabricItem("Images/pantsFabric8.jpg", "Cotton Colour Checked Pant Fabric Navy ICLE Stretch", "945.00", "pant_order.php");
    // Add more calls to generatePantsFabricItem as needed for each fabric item

    echo '</div></div>';
    ?>

  </main>
  <?php
  include('footer.php');
  ?>

</body>

</html>