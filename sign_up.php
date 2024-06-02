<?php
session_start();
error_reporting(0);
@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $client_name = $_POST["client_name"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];
  $ph_no = $_POST["mobile"];
  $email_id = $_POST["email_id"];
  $password1 = md5($_POST["p1"]);
  $password2 = md5($_POST["p2"]);
  $exist_email = "select * from client where email_id='$email_id'";
  $result = mysqli_query($conn, $exist_email);

  if (mysqli_num_rows($result) > 0) {
    echo "<script type='text/javascript'>alert('Email already exists')</script>";
  } else {
    if ($password1 != $password2) {
      echo "<script type='text/javascript'>alert('Passwords dont match')</script>";
    } else {
      $password = $password2;
      if (!empty($client_name) and !empty($age) and !empty($gender) and !empty($address) and !empty($ph_no) and !empty($email_id)) {
        $sql = "INSERT INTO client (client_name,age,gender,address,ph_no,email_id,password) VALUES ('$client_name','$age','$gender','$address','$ph_no','$email_id','$password')";

        mysqli_query($conn, $sql);
        $query = "select * from client where email_id='$email_id' limit 1";
        $result5 = mysqli_query($conn, $query);

        if ($result5 && mysqli_num_rows($result5) > 0) {
          $client_data = mysqli_fetch_assoc($result5);
          $_SESSION['client_id'] = $client_data['client_id'];
          $cid = $_SESSION['client_id'];
          $shirt_sql = "INSERT INTO shirt (collar,neck_to_shoulder,sleeve_length,shoulder_to_shoulder,
                        chest,front_length,sleeve_cuff,hem,client_id) VALUES (0,0,0,0,0,0,0,0,'$cid')";
          mysqli_query($conn, $shirt_sql);

          $pant_sql = "INSERT INTO pant (waist,front_rise,hip,thigh,length,knee,inseam,leg_opening,client_id)
                        VALUES(0,0,0,0,0,0,0,0,'$cid')";
          mysqli_query($conn, $pant_sql);

          $query_shirt = "select shirt_id from shirt where client_id='$cid' limit 1";
          $result1 = mysqli_query($conn, $query_shirt);

          if ($result1 && mysqli_num_rows($result1) > 0) {
            $client_shirt_data = mysqli_fetch_assoc($result1);
            $_SESSION['shirt_id'] = $client_shirt_data['shirt_id'];
          }
          $query_pant = "select pant_id from pant where client_id='$cid' limit 1";
          $result2 = mysqli_query($conn, $query_pant);

          if ($result2 && mysqli_num_rows($result2) > 0) {
            $client_pant_data = mysqli_fetch_assoc($result2);
            $_SESSION['pant_id'] = $client_pant_data['pant_id'];
          }
          $sid = $_SESSION['shirt_id'];
          $pid = $_SESSION['pant_id'];
          $link_insert = "INSERT INTO link(client_id,shirt_id,pant_id)VALUES('$cid','$sid','$pid')";
          $res_link = mysqli_query($conn, $link_insert) or die(mysqli_error($conn));
          if ($res_link) {
            header('Location: ' . SITEURL . 'sign_in.php');
            exit;
          }
        }
      }
    }
  }
  session_unset();
  session_destroy();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartStitch-Sign Up</title>
  <link rel="stylesheet" href="SignUp.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

 <style>
    @font-face {
      font-family: "hii";
      src: url("fonts/TT-Norms-sv/TT Norms sv/TTNorms-Regular.otf");
    }

    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      /* font-size: 62.5%; */
      font-family: "hii";

    }

    body {
      background-color: #e0e3ce;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #7e876d;
      width: 400px;
      height: fit-content;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-bottom-right-radius: 30px;
      border-top-right-radius: 30px;
      border-left: 20px solid #2b300d;
      box-shadow: 0px 0px 12px 2px #2b300d;
      margin-top: 50px;
      margin-bottom: 50px;
      padding-top: 30px;
      padding-bottom: 30px;
    }

    span {
      color: #2b300d;
      text-align: center;
      font-weight: bolder;
      font-size: 25px;
    }

    .Credential {
      margin-top: 20px;
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
      width: 75%;
      justify-content: center;
    }

    .button {
      margin: 30px;
    }

    .Credential button {
      font-weight: bold;
      padding: 15px 50px;
      border: none;
      outline: none;
      border-radius: 15px;
      background-color: #2b300d;
      color: #e0e3ce;
      cursor: pointer;
      font-size: 15px;
      transition: 0.3s;
    }

    .Credential input {
      text-align: left;
      border-radius: 15px;
      border: none;
      padding: 10px;
      margin: 10px;
      background-color: #e0e3ce;
      color: #2b300d;
      letter-spacing: 1px;
    }

    .Credential input::placeholder {
      color: #2b300d;
      font-size: 14px;
    }

    .Noac a {
      text-decoration: none;
      color: #e0e3ce;
    }

    .Noac {
      color: #2b300d;
    }

    .Credential button:hover {
      opacity: 0.7;
    }

    .gender {
      accent-color: #2b300d;
    }

    @media only screen and (max-width: 494px) {
      .Credential {
        max-width: 80%;
      }

      .container {
        max-width: 80%;
      }

      form {
        display: flex;
        justify-content: center;
      }

      .Credential {
        width: 350px;
      }

      .Credential input {
        font-size: 14px;
        padding: 8px;
      }

      .Credential button {
        margin: 0px;
      }

      .button {
        margin: 20px;
      }

      .Noac {
        margin-bottom: 6px;
      }
    }

    @media only screen and (max-width: 388px) {
      .container {
        margin-left: auto;
        margin-right: auto;
      }

      .Credential input::placeholder {
        color: #2b300d;
        font-size: 13px;
      }
    }
  </style>
</head>

<body>
  <form onSubmit="return checkPassword(this)" action="<?php echo SITEURL; ?>sign_up.php" method="post">
    <div class="container">
      <span>SIGN UP</span>
      <div class="Credential">
        <input type="text" placeholder="Enter your Name" name="client_name" required />

        <input type="number" placeholder="Enter your Age" min="0" max="150" name="age" required />
        <div class="gender">
          <input type="radio" name="gender" value="Male" />Male <input type="radio" name="gender" value="Female" />Female
        </div>

        <input type="text" placeholder="Enter your Address" name="address" required />

        <input type="tel" name="mobile" pattern="[0-9]{10}" placeholder="Enter your Mobile Number" required />

        <input type="email" placeholder="Enter your Email ID" name="email_id" required />

        <input type="password" placeholder="New Password" id="p1" name="p1" required />
        <input type="password" placeholder="Re-Enter Password" id="p2" name="p2" required />

        <div class="button">
          <a href="<?php echo SITEURL; ?>sign_in.php"><button type="submit" value="Submit">Sign Up</button></a>
        </div>

        <div class="Noac">
          Already have an account?<a href="<?php echo SITEURL; ?>sign_in.php"> Sign in</a>
        </div>
      </div>
    </div>
  </form>
  <script>
    function checkPassword(form) {
      const p1 = form.p1.value;
      const p2 = form.p2.value;

      if (p1 != p2) {
        alert("Error! Passwords do not match.");
        return false;
      } else {
        return true;
      }
    }
  </script>
</body>

</html>