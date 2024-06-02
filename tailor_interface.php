<?php
@include 'config.php';
session_start();
if (!isset($_SESSION['tailor_login'])) {
?>
    <html>
    <script type='text/javascript'>
        alert('Please login to access the page');
        window.location.href = '<?php echo SITEURL; ?>index.php';
    </script>

    </html>
<?php
    exit();
}
$query_client = "SELECT * FROM client";
$query_shirt = "SELECT * FROM shirt";
$query_pant = "SELECT * FROM pant";
$query_orders = "SELECT * FROM orders";
$result1 = mysqli_query($conn, $query_client);
$result2 = mysqli_query($conn, $query_shirt);
$result3 = mysqli_query($conn, $query_pant);
$result4 = mysqli_query($conn, $query_orders);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-TailorsDatabase</title>
    <link rel="stylesheet" href="tailordatabase.css">
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

    <script>
        function hideElement(element, activeButton) {
            const elements = ['clientdata', 'shirtdata', 'pantdata', 'orderdata'];
            const buttons = ['btn1', 'btn2', 'btn3', 'btn4'];

            elements.forEach(el => {
                const currentElement = document.getElementById(el);
                if (el === element) {
                    currentElement.style.display = 'block';
                } else {
                    currentElement.style.display = 'none';
                }
            });

            buttons.forEach(btn => {
                const currentButton = document.getElementById(btn);
                if (btn === activeButton) {
                    currentButton.style.borderBottom = '2px solid #2b300d';
                } else {
                    currentButton.style.borderBottom = null;
                }
            });
        }

        function clienthide() {
            hideElement('clientdata', 'btn1');
        }

        function shirthide() {
            hideElement('shirtdata', 'btn2');
        }

        function panthide() {
            hideElement('pantdata', 'btn3');
        }

        function orderhide() {
            hideElement('orderdata', 'btn4');
        }

        function hide() {
            btn1.style.borderBottom = '2px solid #2b300d';
            clientdata.style.display = 'block';
            shirtdata.style.display = 'none';
            pantdata.style.display = 'none';

            orderdata.style.display = 'none';

        }
    </script>

</head>

<body onload="hide()">
    <header>
        <nav class="navbar">
            <div class="nav-div">
                <div class="logo"><a href="<?php echo SITEURL; ?>tailor_interface.php"><img src="Images/SmartStitchLogo.png" alt="SmartStitch" width="180px"></a></div>
                <div class="heading">TAILOR DATABASE</div>
                <div class="logout"><a href="<?php echo SITEURL; ?>logout.php"><button>Logout</button></a></div>

            </div>
        </nav>
    </header>
    <main>
        <div class="main">
            <div class="main-nav">
                <div class="nav-items">
                    <p id="btn1" onclick="clienthide()">Client Database</p>
                    <p id="btn2" onclick="shirthide()">Shirt Database</p>
                    <p id="btn3" onclick="panthide()">Pant Database</p>
                    <p id="btn4" onclick="orderhide()">Orders Database</p>
                </div>
            </div>

            <!-- <div class="buttons">

                <div class="button"><button id="btn1" onclick="clienthide()">Client Database</button></div>

                <div class="button"><button id="btn2" onclick="shirthide()">Shirt Database</button></div>
                <div class="button"><button id="btn3" onclick="panthide()">Pant Database</button></div>

                <div class="button"><button id="btn4" onclick="orderhide()">Orders Database</button></div><br>
            </div> -->

            <div class="data">

                <div class="details" id="clientdata">
                    <h3>Clients database:</h3>
                    <table>
                        <tr>
                            <th>Client ID</th>
                            <th>Client Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Email ID</th>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result1)) {
                            ?>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['client_name']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['ph_no']; ?></td>
                                <td><?php echo $row['email_id']; ?></td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>




                <div class="details" id="shirtdata">
                    <h3>Shirts database</h3>
                    <table>
                        <tr>
                            <th>Shirt ID</th>
                            <th>Client ID</th>
                            <th>Collar</th>
                            <th>Neck to shoulder</th>
                            <th>Sleeve length</th>
                            <th>Shoulder to shoulder</th>
                            <th>Chest</th>
                            <th>Front length</th>
                            <th>Sleeve cuff</th>
                            <th>Hem</th>

                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result2)) {
                            ?>
                                <td><?php echo $row['shirt_id']; ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['collar']; ?> inches</td>
                                <td><?php echo $row['neck_to_shoulder']; ?> inches</td>
                                <td><?php echo $row['sleeve_length']; ?> inches</td>
                                <td><?php echo $row['shoulder_to_shoulder']; ?> inches</td>
                                <td><?php echo $row['chest']; ?> inches</td>
                                <td><?php echo $row['front_length']; ?> inches</td>
                                <td><?php echo $row['sleeve_cuff']; ?> inches</td>
                                <td><?php echo $row['hem']; ?> inches</td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>




                <div class="details" id="pantdata">
                    <h3>Pants database</h3>
                    <table>
                        <tr>
                            <th>Pant ID</th>
                            <th>Client ID</th>
                            <th>Waist</th>
                            <th>Front Rise</th>
                            <th>Hip</th>
                            <th>Thigh</th>
                            <th>Length</th>
                            <th>Knee</th>
                            <th>Inseam</th>
                            <th>Leg opening</th>

                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result3)) {
                            ?>
                                <td><?php echo $row['pant_id']; ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['waist']; ?> inches</td>
                                <td><?php echo $row['front_rise']; ?> inches</td>
                                <td><?php echo $row['hip']; ?> inches</td>
                                <td><?php echo $row['thigh']; ?> inches</td>
                                <td><?php echo $row['length']; ?> inches</td>
                                <td><?php echo $row['knee']; ?> inches</td>
                                <td><?php echo $row['inseam']; ?> inches</td>
                                <td><?php echo $row['leg_opening']; ?> inches</td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>




                <div class="details" id="orderdata">
                    <h3>Orders database:</h3>
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>Client ID</th>
                            <th>Shirt type</th>
                            <th>Pant type</th>
                            <th>Order date</th>
                            <th>Delivery date</th>
                            <th>Order Total</th>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result4)) {
                            ?>
                                <td><?php echo $row['order_id']; ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['shirt_type']; ?></td>
                                <td><?php echo $row['pant_type']; ?></td>
                                <td><?php echo $row['order_date']; ?></td>
                                <td><?php echo $row['delivery_date']; ?></td>
                                <td><?php echo $row['order_total']; ?></td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>

            </div>


        </div>

    </main>
</body>

</html>