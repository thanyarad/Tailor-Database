<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="Images/Favicon.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            color: #2b300d;
            box-sizing: border-box;
            font-size: 62.5%;
        }

        footer {
            height: max-content;
            background-color: #7e876d;
            width: 100%;
            position: relative;
            color: #2b300d;
            line-height: 20px;
            /* align-items: center; */
            border-top: 8px solid #2b300d;
        }

        .footer {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .footer-contact li,
        .footer-business li {
            text-align: left;
            font-size: 1.6rem;
        }

        .footer-contact li a {
            font-size: 1.5rem;
        }

        .footer-business,
        .footer-contact,
        .footer-logo {
            width: fit-content;
            display: flex;
            justify-content: center;
        }

        .footer-copyright {
            font-size: 13px;
            text-align: center;
            font-weight: lighter;
        }

        .fa-solid {
            font-size: 13px;
            color: #2b300d;
        }

        h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            text-align: center;
        }

        .welcomeimg {
            margin: 0px 0px -5px 0px;
            padding: 0%;
        }

        @media only screen and (max-width: 700px) {
            .footer {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                height: fit-content;
                text-align: center;
                /* font-size: 0.8rem; */
            }

            .footer-logo {
                display: none;
            }

            .footer-contact,
            .footer-business {
                width: fit-content;
                margin: 12px;

            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer">
            <div class="footer-logo">
                <img src="Images/SmartStitchLogo.png" alt="" height="40px">
            </div>
            <div class="footer-contact">
                <ul>
                    <h4>CONTACT</h4>

                    <!-- <li><i class="fa-solid fa-phone" style="color: #2b300d;"></i>7760447896/7411328238</li>
                    <li><a href="mailto: abhiksalian0728@gmail.com"><i class="fa-solid fa-envelope" style="color: #2b300d;"></i> abhiksalian0728@gmail.com</li></a>
                    <li><a href="mailto: akashacharya2003@gmail.com"><i class="fa-solid fa-envelope" style="color: #2b300d;"></i> akashacharya2003@gmail.com</li></a> -->
                    <li><i class="fa-solid fa-phone" style="color: #2b300d;"></i>+91 9999999999</li>
                    <li><a href="#"><i class="fa-solid fa-envelope" style="color: #2b300d;"></i> smartstitch@gmail.com</li></a>
                </ul>
            </div>
            <div class="footer-business">
                <ul>
                    <h4>BUSINESS HOURS</h4>
                    <li>Monday - Friday : 09:00 AM - 06:00 PM</li>
                    <li>Saturday : 09:00 AM - 04:00 PM</li>
                    <li>Sunday : Closed</li>
                </ul>
            </div>
        </div>
        <!-- <hr /> -->
        <p class="footer-copyright">
            @Copyright 2023 SmartStitch - All Rigths Reserved
        </p>
    </footer>
</body>

</html>