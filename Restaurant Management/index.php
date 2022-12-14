<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retaurant Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        #header>a:hover
        {
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
        #web-content
        {
            background-color: #dde0a6;
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
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="foodmenu.php">Food Menu</a></li>
            <li><a href="seatreservation.php">Seat Reservation</a></li>
            <li><a href="about.php">About us!</a></li>
            <li><a href="contact.php">Contact us!</a></li>
        </ul>
    </section>

    <section id="web-content">
        <div class="container-fluid" style="padding:5px; border: 1px solid black;margin: 2px;padding-bottom: 0px;margin-bottom: 0px;">
            <h1 style="text-align: center;font-weight:bold;">Meals & Combos</h1>
            <div class="container-fluid" style="margin: 2px;">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="../Restaurant Management/assets/images/foodcombo/1coldrink1burger1frenchfriescombo.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#dde0a6;">
                          <h5 class="card-title"style="font-weight:bold;">Food Combo</h5>
                          <p class="card-text">This is the delecious food combo of rupees 999/-</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../Restaurant Management/assets/images/foodcombo/2pizza2coldrinkcombo.jpg" class="card-img-top" alt="...">
                            <div class="card-body"style="background-color:#dde0a6;">
                              <h5 class="card-title"style="font-weight:bold;">Food Combo</h5>
                              <p class="card-text">This is the delecious food combo of rupees 999/-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../Restaurant Management/assets/images/foodcombo/3burger combo.jpg" class="card-img-top" alt="...">
                            <div class="card-body"style="background-color:#dde0a6;">
                              <h5 class="card-title"style="font-weight:bold;">Food Combo</h5>
                              <p class="card-text">This is the delecious food combo of rupees 999/-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="foodmenu.php" style="text-decoration: none;font-weight:600;"><p style="text-align: center;">Show more</p></a>
        </div>

        <div class="container-fluid" style="padding:5px; border: 1px solid black;margin: 2px;padding-bottom: 0px;margin-bottom: 0px;">
            <h1 style="text-align: center;font-weight:bold">Features & Services</h1>
            <div class="container-fluid" style="margin: 2px;">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="../Restaurant Management/assets/images/restaurentimg/hall.jpg" class="card-img-top" alt="...">
                        <div class="card-body"style="background-color:#dde0a6;">
                          <h5 class="card-title"style="font-weight:bold;">Hall Reservation</h5>
                          <p class="card-text">This is our hall You Can Book it only in Rs 500/-</p>
                          <p class="card-text">For Hall Reservation Contact us before 1 Day</p>

                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../Restaurant Management/assets/images/restaurentimg/VIP.jpg" class="card-img-top" alt="...">
                            <div class="card-body"style="background-color:#dde0a6;">
                              <h5 class="card-title"style="font-weight:bold;">VIP Area</h5>
                              <p class="card-text">The Prize is upto Rs 1000/-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../Restaurant Management/assets/images/restaurentimg/family.webp" class="card-img-top" alt="...">
                            <div class="card-body"style="background-color:#dde0a6;">
                              <h5 class="card-title"style="font-weight:bold;">Family reserved</h5>
                              <p class="card-text">Here Maximum 6 member seat can be reserved for Family dinner and party upto Rs 3060/-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="about.php" style="text-decoration: none;font-weight:600;"><p style="text-align: center;">Show more</p></a>
        </div>
        
    </section>

    <section id="footer"style="background-color:black;height:100px">
        <div id="footer-content">
            <div class="footer-left">
                <img src="../Restaurant Management/assets/logo/2qppvupg8bk.gif" alt="logo" height="50px" width="100px">
            </div>
            <div class="footer-center">
                <a href="discord.com"><img class="footer-center-1"
                        src="../Restaurant Management/assets/images/Discord.svg" alt="Discord"></a>
                <a href="twitter.com"><img class="footer-center-2"
                        src="../Restaurant Management/assets/images/Twitter.svg" alt="Twitter"></a>
                <a href="telegram.com"><img class="footer-center-3"
                        src="../Restaurant Management/assets/images/Telegram.svg" alt="Telegram"></a>
                <a href="medium.com"><img class="footer-center-4"
                        src="../Restaurant Management/assets/images/Medium.svg" alt="Medium"></a>
            </div>
            <div class="footer-right">
                <button class="fdbck-btn"><a href="feedback.php">Feedback page</a></button>
            </div>
        </div>

        <div class="footer-down"style="height:55px">
            <div class="footer-line">
                <hr>
            </div>
            <div class="footer-copyright">
                ?? 2022 Restaurent Management | All rights reserved.
            </div>
        </div>
    </section>
</body>

</html>