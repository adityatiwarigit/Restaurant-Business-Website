<?php

include 'dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retaurant Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        * {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: black;
            text-align: right;
        }

        #header>a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            margin-right: 30px;
        }

        #header>a:hover {
            color: forestgreen;
        }

        #logo-section {
            z-index: 1;
            position: relative;
            background-color: #160f05;
            height: 170px;
            padding-bottom: 22px;
        }

        .left-align {
            position: absolute;
            left: 0;
            width: 100%;
        }

        #logo-section h1 {
            position: absolute;
            top: 8px;
            left: 270px;
            font-size: 75px;
            white-space: nowrap;
            font-weight: bold;
            color: #dde0a6;
        }

        #logo-section h1:hover {
            top: 3px;
            font-size: 78px;
        }

        #logo-section p {
            position: absolute;
            top: 87px;
            left: 300px;
            white-space: nowrap;
            color: #dde0a6;
            font-size: 18.5px;

        }

        #logo-section p:hover {
            top: 85px;
            font-size: 20px;
        }

        #menubar {
            background-color: #676363;
        }

        #menubar ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
            justify-content: center;
        }

        #menubar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 5px 50px;
            font-size: 20px;
            font-style: fantasy;
            font-weight: bolder;
            white-space: nowrap;
        }

        #menubar a:hover {
            background-color: #111;
        }

        #menubar .active {
            background-color: forestgreen;
        }

        #menubar .active:hover {
            background-color: darkgreen;
        }

        #upper-web-content {
            display: flex;
            flex-direction: column;
            position: relative;
            height: 600px;
            background-color: #dde0a6;
        }

        #left-align {
            display: flex;
            flex-direction: column;
            position: absolute;
            padding: 45px;
        }

        #right-align {
            position: absolute;
            right: 100px;
            top: 44px;
        }

        #right-align>h1 {
            font-size: 65px;
            font-weight: bold;
            color: #160f05;
        }

        #right-align>p {
            padding-top: 25px;
            color: #160f05;
            text-align: left;
            font-size: 18px;
            letter-spacing: 1.5px;
            line-height: 35px;
        }

        #middle-web-content {
            display: flex;
            flex-direction: column;
            position: relative;
            background-color: #dde0a6;
            padding: 0px 45px;
        }

        #middle-web-content>p {
            color: #160f05;
            text-align: left;
            font-size: 18px;
            letter-spacing: 1.5px;
            line-height: 35px;
        }

        #middle-web-content>h1 {
            font-size: 65px;
            font-weight: bold;
            color: #160f05;
        }

        #footer {
            margin: 0px;
            padding: 0px;
            padding-bottom: 5px;
        }

        #footer-content {

            display: flex;
            background-color: black;
            color: white;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .footer-left {
            padding-left: 0px;
            padding-right: 60px;
        }

        .footer-center {
            padding-left: 380px;
            padding-right: 420px;
            white-space: nowrap;
        }

        .footer-center-1,
        .footer-center-2,
        .footer-center-3,
        .footer-center-4 {
            cursor: pointer;
            filter: invert(52%) sepia(11%) saturate(593%) hue-rotate(215deg) brightness(84%) contrast(86%);
            background-color: transparent;
            height: 20px;
            padding-right: 0px;
            white-space: nowrap;
        }

        .footer-center-1:hover,
        .footer-center-2:hover,
        .footer-center-3:hover,
        .footer-center-4:hover {
            filter: invert(77%) sepia(25%) saturate(344%) hue-rotate(213deg) brightness(93%) contrast(88%);
        }

        .footer-right {
            height: 50px;
            display: flex;
            text-align: right;
            justify-content: flex-end;
            align-items: center;
            white-space: nowrap;
            padding-right: 30px;
        }

        .fdbck-btn {
            border-radius: 0px;
            display: block;
            border: 1px solid green;
            background-color: #676363;
            height: 30px;
            width: 150px;
        }

        .fdbck-btn a {
            display: block;
            background-color: #676363;
            text-decoration: none;
            font-size: 20px;
            color: white;
            font-weight: 800;
        }

        .fdbck-btn:hover,
        .fdbck-btn a:hover {
            background-color: darkgreen;
        }

        .footer-down {
            background-color: black;
            margin: 0px;
            padding: 0px;
        }

        .footer-line {
            background-color: black;
            color: white;
            padding: 0px 0px;
        }

        .footer-copyright {
            display: flex;
            flex-direction: column;
            font-weight: 400;
            font-size: 14px;
            line-height: 22px;
            margin-top: 15px;
            margin-bottom: 61px;
            letter-spacing: .05em;
            text-align: center;
            background-color: black;
            color: white;
            padding-right: 60px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <section id="header">
        <a href="legal/privacy.html">Privacy Policy</a>
        <a href="legal/tnc.html">Terms and Condition</a>
    </section>

    <section id="logo-section">
        <div class="left-align">
            <img src="../Restaurant Management/assets/logo/logo.gif" alt="..." height="170px" width="300px" />
            <h1>Restaurent Management System</h1>
            <p><br>Experience Best variety of Food With a
                Beautiful Environment </p>
        </div>
    </section>

    <section id="menubar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="foodmenu.php">Food Menu</a></li>
            <li><a href="seatreservation.php">Seat Reservation</a></li>
            <li><a class="active" href="about.php">About us!</a></li>
            <li><a href="contact.php">Contact us!</a></li>
        </ul>
    </section>

    <section id="web-content">
        <div id="upper-web-content">
            <div class="container-fluid" style="padding:5px; margin: 2px;padding-bottom: 0px;margin-bottom: 0px;">
                <div id=left-align>
                    <img src="../Restaurant Management/assets/images/restaurentimg/VIP.jpg" alt="about img" height="500px" width="550px" />
                </div>
                <div id="right-align">
                    <h1>Restaurant Management<br> System</h1>
                    <p>The Best restaurent with one of the best chefs and a Beautiful Environment<br> that makes a amazing dinner and makes the piecefull feeling.</p>
                    <p>You Can Experience 100+ variety of foods that are Traditional and Modern<br> both and the best quality and brand of products are used that gives a <br>healthy and safe foods. </p>
                    <p>Come and Enjoy with your Family and Friends.</p>
                </div>
            </div>
        </div>
        <div id="middle-web-content">
            <p>The restaurent have so many features that provides the customer services as per their needs and a better judgement. Our restaurent have more then 50 servers that place your orders on time and 25+ cheffs that make your food on the spot without waiting another's Order.</p>
            <p>There are so many Food variety that have some of veg and some Non-veg foods but the fact is every veg food is made with more cleanliness and we are non using Non-veg vessels for Vegiterian foods that means both veg and non-veg food vessels are saparate.</p>
        </div>
        <div id="middle-web-content">
            <h1>
                <center>features & Services</center>
            </h1>

            <div class="card mb-3">
                <img src="../Restaurant Management/assets/images/portfolio/front.jpg" class="card-img-top" alt="..." height="600px">
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                $sql_query = "select id,image,name,disciption from gallery;";
                $result = mysqli_query($conn, $sql_query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col" style="padding: 15px 0px">
                        <div class="card">
                            <img src="../Restaurant Management/assets/images/portfolio/<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body" style="background-color: #dde0a6;"style="padding-top:15px;">
                                <h5 class="card-title" style="font-weight: bold; font-size:30px"><?php echo $row['name'] ?></h5>
                                <p class="card-text"style="font-weight: medium; font-size:20px;letter-spacing:1px;"><?php echo $row['disciption'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="card mb-3">
                <img src="../Restaurant Management/assets/images/portfolio/outerview.jpeg" class="card-img-top" alt="..." height="700px">
            </div>
        </div>
    </section>

    <section id="footer" style="background-color:black;height:100px">
        <div id="footer-content">
            <div class="footer-left">
                <img src="../Restaurant Management/assets/logo/2qppvupg8bk.gif" alt="logo" height="50px" width="100px">
            </div>
            <div class="footer-center">
                <a href="discord.com"><img class="footer-center-1" src="../Restaurant Management/assets/images/Discord.svg" alt="Discord"></a>
                <a href="twitter.com"><img class="footer-center-2" src="../Restaurant Management/assets/images/Twitter.svg" alt="Twitter"></a>
                <a href="telegram.com"><img class="footer-center-3" src="../Restaurant Management/assets/images/Telegram.svg" alt="Telegram"></a>
                <a href="medium.com"><img class="footer-center-4" src="../Restaurant Management/assets/images/Medium.svg" alt="Medium"></a>
            </div>
            <div class="footer-right">
                <button class="fdbck-btn"><a href="feedback.php">Feedback page</a></button>
            </div>
        </div>

        <div class="footer-down" style="height:55px">
            <div class="footer-line">
                <hr>
            </div>
            <div class="footer-copyright">
                © 2022 Restaurent Management | All rights reserved.
            </div>
        </div>
    </section>
</body>

</html>