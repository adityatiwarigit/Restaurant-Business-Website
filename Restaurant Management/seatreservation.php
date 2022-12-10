<?php 
include 'dbconfig.php';

if(isset($_POST['reserve']))
{
    $name=mysqli_real_escape_string($conn,$_POST['name-inp']);
    $aadhar=mysqli_real_escape_string($conn,$_POST['aadhar-inp']);
    $mobile=mysqli_real_escape_string($conn,$_POST['mobile-inp']);
    $email= mysqli_real_escape_string($conn,$_POST['email-inp']);
    $address=mysqli_real_escape_string($conn,$_POST['address-inp']) ;
    $reservation_type=mysqli_real_escape_string($conn,$_POST['reservation-type-inp']) ;
    $seat_no=$_POST['seatno-inp'];
    $date=mysqli_real_escape_string($conn,$_POST['date-inp']) ;
    $time_from=mysqli_real_escape_string($conn,$_POST['time-from-inp']) ;
    $time_to=mysqli_real_escape_string($conn,$_POST['time-to-inp']) ;

    if($name!=='' && $aadhar!=='' &&  $mobile!=='' && $email!=='' && $address!=='' && $seat_no!=='' && $date!=='' && $time_from!=='' && $time_to!=='')
    {
        foreach ($seat_no as $item)
        {
            $sql_query = "insert into bookedseat (name,aadhar_no,mobile_no,email,address,reservation_for,seat_no,alloted_date,time_from,time_to) values('" . $name . "','" . $aadhar . "','" . $mobile . "','" . $email . "','" . $address . "','".$reservation_type."','" . $item . "','" . $date . "','" . $time_from . "','" . $time_to . "');";
            $result = mysqli_query($conn, $sql_query);
            if ($result) 
            {
                foreach ($seat_no as $item)
                {
                    $sql_query = "UPDATE seatstatus SET status = 'yes' WHERE seatno = '$item'";
                    $result = mysqli_query($conn, $sql_query);
                    if($result)
                    {
                        header('location:index.php');
                    }
                    else
                    {
                        echo "Technical error";
                    }
                }               
            } 
            else
            {
                echo "kindly try with another email";
            }
        }
        
    }
    else
    {
        echo "All Fields are mendatory";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Reservation</title>

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

        #web-content {
            background-color: #ffffec;
        }

        form {
            padding: 40px;
            text-align: center;
        }

        form input {
            display: block;
            width: 98%;
            font-size: 25px;
            text-align: center;
            background-color: #ffffd8;
            padding: 8px;
            margin: 10px;
            border: 1px solid black;
        }

        form button {
            align-items: center;
            font-size: 24px;
            background-color: cornflowerblue;
            color: white;
            padding: 5px;
            margin: 10px;
            border: 1px solid black;

        }

        #footer {
            margin: 0px;
            margin-top: 10px;
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
            <li><a class="active" href="seatreservation.php">Seat Reservation</a></li>
            <li><a href="about.php">About us!</a></li>
            <li><a href="contact.php">Contact us!</a></li>
        </ul>
    </section>

    <section id="web-content" style="border: 1px solid black;">
        <h1 style="text-align:center;font-weight:bold;">Book Your seat Now</h1>
        <div class="container-fluid">
            <form method="post" action="">

                <input type="text" id="name-inp" name="name-inp" placeholder="Enter Your Name">
                <br>

                <input type="text" id="aadhar-inp" name="aadhar-inp" placeholder="Enter Your Aaddhar No">
                <br>

                <input type="text" id="mobile-inp" name="mobile-inp" placeholder="Enter Your Mobile No">
                <br>

                <input type="email" id="email-inp" name="email-inp" placeholder="Enter Your email id">
                <br>

                <input type="Address" id="address-inp" name="address-inp" placeholder="Enter Your Complete Address">
                <br>
                <hr><br><br>

                <label>
                    <h4>
                        <center>Reservation For:-</center>
                    </h4>
                </label>
                <select name="reservation-type-inp" id="reservation-type-inp">
                    <option value="seat">Seat</option>
                    <option value="VIP">VIP</option>
                    <option value="Family">Family</option>
                </select>
                <br><br>

                <label>
                    <h4>
                        <center>Hold And Select Seat No.</center>
                    </h4>
                </label>
                <select name="seatno-inp[]" id="seatno-inp[]" multiple>
                    <?php
                    $sql_query = "SELECT seatno FROM `seatstatus` WHERE STATUS = '';";
                    $result = mysqli_query($conn, $sql_query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <option value="<?php echo $row['seatno'] ?>"><?php echo $row['seatno'] ?></option>

                    <?php
                    }
                    ?>
                </select>
                <br><br>
                <hr><br>

                <lable>
                    <h4>
                        <center>Select Date for Booking</center>
                    </h4>
                </lable>
                <input type="date" id="date-inp" name="date-inp">
                <br>

                <lable class="time-from">
                    <h4>
                        <center>TIME from</center>
                    </h4>
                </lable>
                <input type="time" name="time-from-inp" id="time-from-inp"><br>


                <lable class="time-to">
                    <h4>
                        <center>TIME To</center>
                    </h4>
                </lable>
                <input type="time" name="time-to-inp" id="time-to-inp"><br><br>

                <button type="submit" name="reserve" id="reserve">Book Now</button>
            </form>
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