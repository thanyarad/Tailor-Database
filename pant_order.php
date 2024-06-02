<?php
@include 'config.php';
include('login_check.php');

error_reporting(0);
session_start();
$pant_type = $_GET['pant_type'];
$order_total = $_GET['pant_price'];
$cid = $_SESSION['client_id'];
$delivery_date = $_POST['delivery_date'];
$today = date("Y-m-d");


if (!empty($cid) and !empty($delivery_date) and ($delivery_date > $today)) {

    if (mysqli_connect_errno()) {
        die('Connect Error : ' . mysqli_connect_error());
    } else {
        $order_insert = "INSERT INTO orders(client_id,pant_type,delivery_date,order_total)
VALUES('$cid','$pant_type','$delivery_date','$order_total')";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $order_insert)) {
            die(mysqli_error($conn));
        }
        mysqli_stmt_execute($stmt);
        //echo "<script type='text/javascript'>alert('Order placed successfully')</script>";
        header("Location: " . SITEURL . "pants.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pants-Place Order</title>
    <link rel="stylesheet" href="place_order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="nav-logo">
                    <a href="<?php echo SITEURL; ?>Hom.php">
                        <img src="Images/SmartStitchLogo.png" alt="SmartStitch" width="180px ">
                    </a>
                </div>
                <div class="heading">PLACE ORDER</div>
            </div>
        </nav>
    </header>
    <main>
        <div class="order">

            <h3>ORDER DETAILS:</h3>
            <table>
                <tr>
                    <th>Client ID</th>
                    <th>:</th>
                    <td><?php echo $_SESSION['client_id']; ?></td>
                </tr>
                <tr>
                    <th>Client Name</th>
                    <th>:</th>
                    <td><?php echo $_SESSION['client_name']; ?></td>
                </tr>
                <tr>
                    <th>Pant Type</th>
                    <th>:</th>
                    <td><?php echo $pant_type; ?></td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <th>:</th>
                    <td>Rs. <?php echo $order_total; ?></td>
                </tr>
                <tr>
                    <th>Mode of Payment</th>
                    <th>:</th>
                    <td>Cash on Delivery</td>
                </tr>
            </table>

            <form action="" method="post">
                <div class="expecteddelivery">

                    <label for="delivery_date">Expected delivery date : </label>
                    <input class="date" type="date" id="delivery_date" name="delivery_date"><br>
                </div>
                <p id="alertMessage"><i class="fa-solid fa-triangle-exclamation" style="color: #2b300d; font-size:16px"></i> Please select a date on or after today.</p>
                <div class="submit">
                    <button type="submit" onclick="message()">Place order</button>
                </div>
            </form>
        </div>
    </main>
    <script>
        const delivery_date = document.getElementById('delivery_date');
        const alertMessage = document.getElementById('alertMessage');
        const today = new Date();

        function message() {
            if (delivery_date.value.length != 0) {
                const selectedDate = new Date(delivery_date.value);

                if (selectedDate > today) {
                    alert("Order placed Successfully");
                } else {
                    alert("Please select a future date for delivery");
                }
            } else {
                alert("Please enter Date");
            }
        }


        delivery_date.addEventListener('change', function() {
            const selectedDate = new Date(this.value);

            if (selectedDate < today) {
                alertMessage.style.display = 'block';

            } else {
                alertMessage.style.display = 'none';
            }
        });
    </script>

</body>

</html>