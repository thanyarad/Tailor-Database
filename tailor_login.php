<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $psswd = md5($_POST['tailor_password']);
    if ($psswd == '4e678b004e41b4023faac8fd282a48d5') {
        $_SESSION['tailor_login'] = "Logged in";
        header('location:' . SITEURL . 'tailor_interface.php');
    } else {
        echo "<script type='text/javascript'>alert('Incorrect password')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Admin Login</title>
    <link rel="stylesheet" href="tailor_login.css">
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

    <style>
        @font-face {
            font-family: "hii";
            src: url("fonts/TT-Norms-sv/TT Norms sv/TTNorms-Regular.otf");
        }

        * {
            font-family: "hii";

        }

        body {
            background-color: #e0e3ce;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            justify-content: center;
            background-color: #7e876d;
            width: 250px;
            height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #2b300d;
            padding-bottom: 15px;
            border-bottom-right-radius: 30px;
            border-top-right-radius: 30px;
            border-left: 20px solid #2b300d;
            box-shadow: 0px 0px 12px 2px #2b300d;
            box-sizing: border-box;
        }

        .container button {
            font-weight: bold;
            padding: 15px 50px;
            border: none;
            outline: none;
            border-radius: 60px;
            background-color: #2b300d;
            color: #e0e3ce;
            cursor: pointer;
            font-size: 15px;
            padding: 8px;
            width: 180px;
            transition: 0.3s;
        }

        .container input {
            text-align: left;
            border-radius: 10px;
            text-decoration: none;
            border: none;
            padding: 10px;
            margin: 15px;
            margin-bottom: 25px;
            background-color: #e0e3ce;
            color: #2b300d;
            letter-spacing: 1px;
            border-radius: 60px;

            background-size: 20px;
            background-position: 15px;
        }

        .container input::placeholder {
            text-align: left;
            font-size: 14px;
            color: #2b300d;

        }

        .container button:hover {
            box-shadow: 0px 0px 0px 1px #2b300d;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div class="container">
            <h3>ADMIN LOGIN</h3>
            <input type="password" id="pass" placeholder="Password" name="tailor_password" required />
            <button type="submit">Login</button>

        </div>
    </form>

</body>

</html>