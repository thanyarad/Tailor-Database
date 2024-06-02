<?php
@include 'config.php';

session_start();
error_reporting(0);
//echo $_SESSION['client_id'];
if (!isset($_SESSION['client_name'])) {
    header('location: ' . SITEURL . 'Hom.php');
}
$cid = $_SESSION['client_id'];
$client_display = "SELECT * FROM client WHERE client_id='$cid'";
$res_client = mysqli_query($conn, $client_display);
if ($res_client) {
    $row_client = mysqli_fetch_assoc($res_client);
    $disp_name = $row_client['client_name'];
    $disp_age = $row_client['age'];
    $disp_gender = $row_client['gender'];
    $disp_addr = $row_client['address'];
    $disp_phno = $row_client['ph_no'];
    $disp_email = $row_client['email_id'];
} else {
    echo "No data";
}
$query1 = "select * from shirt where shirt_id in(select shirt_id from link where client_id='$cid')";
$query2 = "select * from pant where pant_id in(select pant_id from link where client_id='$cid')";
$order_query = "select * from orders where client_id='$cid'";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$order_result = mysqli_query($conn, $order_query);
if ($result1) {
    if ($result1 && mysqli_num_rows($result1) > 0) {
        $client_shirt_data = mysqli_fetch_assoc($result1);
        $_SESSION['collar'] = $client_shirt_data['collar'];
        $_SESSION['neck_to_shoulder'] = $client_shirt_data['neck_to_shoulder'];
        $_SESSION['sleeve_length'] = $client_shirt_data['sleeve_length'];
        $_SESSION['shoulder_to_shoulder'] = $client_shirt_data['shoulder_to_shoulder'];
        $_SESSION['chest'] = $client_shirt_data['chest'];
        $_SESSION['front_length'] = $client_shirt_data['front_length'];
        $_SESSION['sleeve_cuff'] = $client_shirt_data['sleeve_cuff'];
        $_SESSION['hem'] = $client_shirt_data['hem'];
        $_SESSION['shirt_id'] = $client_shirt_data['shirt_id'];
    }
}
if ($result2) {
    if ($result2 && mysqli_num_rows($result2) > 0) {
        $client_pant_data = mysqli_fetch_assoc($result2);
        $_SESSION['pant_id'] = $client_pant_data['pant_id'];
        $_SESSION['waist'] = $client_pant_data['waist'];
        $_SESSION['front_rise'] = $client_pant_data['front_rise'];
        $_SESSION['hip'] = $client_pant_data['hip'];
        $_SESSION['thigh'] = $client_pant_data['thigh'];
        $_SESSION['length'] = $client_pant_data['length'];
        $_SESSION['inseam'] = $client_pant_data['inseam'];
        $_SESSION['leg_opening'] = $client_pant_data['leg_opening'];
        $_SESSION['knee'] = $client_pant_data['knee'];
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $client_name = $_POST["client_name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $ph_no = $_POST["ph_no"];
    $email_id = $_POST["email_id"];

    $client_update = "UPDATE client SET 
         client_name='$client_name',
         age='$age',
         gender='$gender',
         address='$address',
         ph_no='$ph_no',
         email_id='$email_id'
         WHERE
         client_id='$cid'";
    $res_client = mysqli_query($conn, $client_update) or die(mysqli_error($conn));
    $_SESSION['client_name'] = $client_name;
    $_SESSION['age'] = $age;
    $_SESSION['gender'] = $gender;
    $_SESSION['address'] = $address;
    $_SESSION['ph_no'] = $ph_no;
    $_SESSION['email_id'] = $email_id;
    if ($res_client) {

        header('Location: ' . SITEURL . 'client_details.php');
        exit;
    } else {

        echo "Data not inserted";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Profile</title>
    <link rel="stylesheet" href="client_details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">
    <script>
        function hideElement(element, activeButton) {
            const elements = ['detailsid', 'measureid', 'orderid'];
            const buttons = ['btn1', 'btn2', 'btn3'];

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

        function detailshide() {
            hideElement('detailsid', 'btn1');
        }

        function measurehide() {
            hideElement('measureid', 'btn2');
        }

        function orderhide() {
            hideElement('orderid', 'btn3');
        }

        function detailsedithide() {

        }

        function detailsedithide() {

            let detailseditid = document.getElementById('detailseditid');
            let btn4 = document.getElementById('btn4');
            if (detailseditid.style.display != 'none') {

                detailseditid.style.display = 'none';
                // btn4.style.display = 'none';
            } else {
                detailseditid.style.display = 'block';
                btn4.style.display = 'none';
            }
        }

        function measurementtoggle() {

            let detailseditid = document.getElementById('detailseditid');
            let btn5 = document.getElementById('btn5');
            let btn6 = document.getElementById('btn6');
            if (measurementeditid.style.display != 'none') {

                measurementeditid.style.display = 'none';
                btn6.style.display = 'block';
                btn5.style.display = 'none';

            } else {
                measurementeditid.style.display = 'flex';
                btn6.style.display = 'none';
                btn5.style.display = 'block';
            }
        }

        function hide() {
            btn1.style.borderBottom = '2px solid #2b300d';
            measureid.style.display = 'none';
            orderid.style.display = 'none';
            detailseditid.style.display = 'none';
            btn5.style.display = 'none';
            measurementeditid.style.display = 'none';

        }
    </script>
</head>

<body onload="hide()">
    <?php
    include('header.php');
    ?>
    <main>
        <div class="main">

            <div class="main-nav">
                <div class="nav-items">
                    <p id="btn1" onclick="detailshide()">Personal Details</p>
                    <p id="btn2" onclick="measurehide()">Measurements</p>
                    <p id="btn3" onclick="orderhide()">Orders</p>
                </div>
            </div>

            <div class="main-info">
                <div class="details" id="detailsid">
                    <div id="btn4" onclick="detailsedithide()" class="edit-icon">
                        <a><button><i class="fa-solid fa-pen-to-square" style="color: #e0e3ce;"></i></button></a>
                    </div>

                    <h3>Personal Details</h3>
                    <div class="details-both">

                        <div class="details-view">

                            <table>
                                <tr>
                                    <th>Client ID</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['client_id']; ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['client_name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['age']; ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['gender']; ?></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['address']; ?></td>
                                </tr>
                                <tr>
                                    <th>Mobile No.</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['ph_no']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email ID</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['email_id']; ?></td>
                                </tr>
                            </table>



                        </div>
                        <div class="details-edit" id="detailseditid">

                            <form action="" method="post"><br>
                                <input type="text" placeholder="Enter your Name" name="client_name" value="<?php echo $disp_name; ?>" required /><br>

                                <input type="number" placeholder="Enter your Age" min="0" max="150" name="age" value="<?php echo $disp_age; ?>" required /><br>
                                <div class="gender">
                                    <input type="radio" name="gender" value="Male" <?php
                                                                                    if ($disp_gender == "Male") {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?> />Male <input type="radio" name="gender" value="Female" <?php
                                                                                                                                                if ($disp_gender == "Female") {
                                                                                                                                                    echo "checked";
                                                                                                                                                }
                                                                                                                                                ?> />Female
                                </div>

                                <input type="text" placeholder="Enter your Address" name="address" value="<?php echo $disp_addr; ?>" required /><br>

                                <input type="tel" name="ph_no" pattern="[0-9]{10}" placeholder="Enter your Mobile Number" value="<?php echo $disp_phno; ?>" required /><br>

                                <input type="email" placeholder="Enter your Email ID" name="email_id" value="<?php echo $disp_email; ?>" required />
                                <br>


                                <div class="edit-icon">
                                    <a href="<?php echo SITEURL; ?>client_details.php"><button type="submit" value="Submit"><i class="fa-solid fa-upload" style="color: #e0e3ce;"></i></button></a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="measurement" id="measureid">

                    <div id="btn6" onclick="measurementtoggle()" class="edit-icon">
                        <a><button><i class="fa-solid fa-pen-to-square" style="color: #e0e3ce;"></i></button></a>
                    </div>
                    <form action="<?php echo SITEURL; ?>measurement.php" method="post">
                        <div id="btn5" onclick="measurementtoggle()" class="edit-icon">
                            <a href="<?php echo SITEURL; ?>client_details.php"><button type="submit"><i class="fa-solid fa-upload" style="color: #e0e3ce;"></i></button></a>
                        </div>
                        <h3>Measurements</h3>
                        <div class="measurement-details">

                            <div class="measure-shirts">

                                <table>
                                    <?php
                                    $client_shirt_data = mysqli_fetch_assoc($result1);

                                    ?>
                                    <tr>
                                        <th>Shirt ID</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['shirt_id']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Collar</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['collar']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Neck to shoulder</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['neck_to_shoulder']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Sleeve length</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['sleeve_length']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Shoulder</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['shoulder_to_shoulder']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Chest</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['chest']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Front length</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['front_length']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Sleeve cuff</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['sleeve_cuff']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Hem</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['hem']; ?> inches</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="measure-pants">

                                <table>
                                    <?php
                                    $client_pant_data = mysqli_fetch_assoc($result2);

                                    ?>
                                    <tr>
                                        <th>Pant ID</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['pant_id']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Waist</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['waist']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Front rise</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['front_rise']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Hip</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['hip']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Thigh</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['thigh']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Length</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['length']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Knee</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['knee']; ?> inches</td>

                                    </tr>
                                    <tr>
                                        <th>Inseam</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['inseam']; ?> inches</td>
                                    </tr>
                                    <tr>
                                        <th>Leg opening</th>
                                        <th>:</th>
                                        <td><?php echo $_SESSION['leg_opening']; ?> inches</td>

                                    </tr>
                                </table>
                            </div>


                        </div>
                        <div id="measurementeditid" class="measurement-edit">

                            <div class="shirt">
                                <h4>SHIRT</h4>
                                <ol>
                                    <li>

                                        <label for="">Collar : </label><input type="number" id="" placeholder="in inches" name="collar" value="<?php echo $_SESSION['collar']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Neck to Shoulder : </label><input type="number" placeholder="in inches" id="" name="neck_to_shoulder" value="<?php echo $_SESSION['neck_to_shoulder']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Sleeve Length : </label><input type="number" placeholder="in inches" id="" name="sleeve_length" value="<?php echo $_SESSION['sleeve_length']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Shoulder : </label><input type="number" placeholder="in inches" id="" name="shoulder_to_shoulder" value="<?php echo $_SESSION['shoulder_to_shoulder']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Chest : </label><input type="number" placeholder="in inches" id="" name="chest" value="<?php echo $_SESSION['chest']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Front Length : </label><input type="number" placeholder="in inches" id="" name="front_length" value="<?php echo $_SESSION['front_length']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Sleeve cuff : </label><input type="number" placeholder="in inches" id="" name="sleeve_cuff" value="<?php echo $_SESSION['sleeve_cuff']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Hem : </label><input type="number" placeholder="in inches" id="" name="hem" value="<?php echo $_SESSION['hem']; ?>" />
                                    </li>
                                </ol>
                                <img class="measureimg" src="Images/shirtmeasure.png" height="250px" alt="" />
                            </div>

                            <div class="pant">
                                <h4>PANT</h4>
                                <ol>
                                    <li>
                                        <label for="">Waist : </label><input type="number" placeholder="in inches" id="" name="waist" value="<?php echo $_SESSION['waist']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Front Rise : </label><input type="number" placeholder="in inches" id="" name="front_rise" value="<?php echo $_SESSION['front_rise']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Hip : </label><input type="number" placeholder="in inches" id="" name="hip" value="<?php echo $_SESSION['hip']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Thigh : </label><input type="number" placeholder="in inches" id="" name="thigh" value="<?php echo $_SESSION['thigh']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Length : </label><input type="number" placeholder="in inches" id="" name="length" value="<?php echo $_SESSION['length']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Knee : </label><input type="number" placeholder="in inches" id="" name="knee" value="<?php echo $_SESSION['knee']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Inseam : </label><input type="number" placeholder="in inches" id="" name="inseam" value="<?php echo $_SESSION['inseam']; ?>" />
                                    </li>
                                    <li>
                                        <label for="">Leg Opening : </label><input type="number" placeholder="in inches" id="" name="leg_opening" value="<?php echo $_SESSION['leg_opening']; ?>" />
                                    </li>
                                </ol>
                                <img class="measureimg" src="Images/pantmeasure.png" height="250px" alt="" />
                            </div>


                        </div>

                    </form>
                </div>
                <div class="order" id="orderid">
                    <h3>Orders</h3>
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>Shirt type</th>
                            <th>Pant type</th>
                            <th>Order date</th>
                            <th>Delivery date</th>
                            <th>Order Total</th>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($order_result)) {
                            ?>
                                <td><?php echo $row['order_id']; ?></td>
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

    <?php
    include('footer.php');
    ?>
</body>

</html>