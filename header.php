<?php
error_reporting(0);
include('config.php');
include('login_check.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

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
            width: 50%;
        }

        .list-ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .list-ul li a:not(.noselect) {
            transition: 0.2s;
            font-size: 14px;
            font-weight: bolder;
            text-transform: uppercase;
            color: #2b300d;
            padding: 4px 8px 4px 8px;
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

        .signout:hover {
            opacity: 0.5;
        }

        .list-ul li a:hover:not(.noselect) {
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

        @media only screen and (max-width: 850px) {
            .nav-list {
                width: 60%;
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
                left: 0;
                height: 40%;
                width: 100%;

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
    <script>
        const toggle = () => {
            document.getElementById('display').classList.toggle('displayactive');
        }

        document.addEventListener("DOMContentLoaded", function() {
            const activePage = 'https://smartstitchh.000webhostapp.com' + window.location.pathname;
            const navLinks = document.querySelectorAll('.list-ul li a');
            navLinks.forEach(link => {
                const linkHref = link.getAttribute('href');
                linkH = '<?php echo SITEURL; ?>' + linkHref;

                if (linkHref === activePage) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</head>

<body>

    <header>
        <div class="nav-div">
            <div class="nav-logo">
                <a href="<?php echo SITEURL; ?>Hom.php">
                    <img src="Images/SmartStitchLogo.png" alt="SmartStitch" width="180px ">
                </a>
            </div>
            <div class="nav-menuicon" onclick="toggle()">
                <i class="fa-solid fa-bars" style="color: #2b300d;"></i>
            </div>
            <div class="nav-list" id="display">
                <ul class="list-ul">
                    <li><a href="<?php echo SITEURL; ?>Hom.php">Home</a></li>
                    <li><a href="<?php echo SITEURL; ?>shirts.php">Shirts</a></li>
                    <li><a href="<?php echo SITEURL; ?>pants.php">Pants</a></li>
                    <li><a href="<?php echo SITEURL; ?>aboutUs.php">About</a></li>
                    <li><a href="<?php echo SITEURL; ?>client_details.php">Profile</a></li>
                    <li><a class="noselect" href="<?php echo SITEURL; ?>logout.php"><button class="signout"><i class="fa-solid fa-right-from-bracket" style="color: #e0e3ce;"></i></button></a></li>
                </ul>
            </div>
        </div>
    </header>

</body>

</html>