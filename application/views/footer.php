<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
        p.header {
            font-size: 18px;
            font-weight: bold;
            line-height: 32px;
            color: black;
            position: absolute;
        }

        .footer {
            font-size: 18px;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #4f4f4f;
            color: whitesmoke;
        }

        .contact {
            font-size: 15px;
            position: absolute;
            color: white;
            margin-top: 10px
        }

        .info {
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            color: white;
            margin-top: 10px
        }
    </style>
</head>

<body>

    <div class="footer">
        <?php
        echo "<img src='./././assets/TransRetail Biru.png' alt='photo of me' style='width: 15.96675em; height: 1.91925em; position: absolute; margin-left: 200px; margin-top: 25px; background-color: white'/>";
        ?>
        <p style="position: absolute; padding: 0 0 0 900px; margin-top:30px">Home</p>
        <p style="position: absolute; padding: 0 0 0 980px; margin-top:30px">●</p>
        <p style="position: absolute; padding: 0 0 0 1025px; margin-top:30px">Jobs</p>
        <p style="position: absolute; padding: 0 0 0 1095px; margin-top:30px">●</p>
        <p style="position: absolute; padding: 0 0 0 1140px; margin-top:30px">Blog</p>
        <p style="position: absolute; padding: 0 0 0 1210px; margin-top:30px">●</p>
        <p style="position: absolute; padding: 0 0 0 1250px; margin-top:30px">Contact Us</p>

        <hr style="width:100%;text-align:left;margin-left:0;margin-top:80px;color:whitesmoke">

        <div>
            <p class="contact" ; style="left: 20%; transform: translate(-50%);">How can we help?</p>
            <p class="contact" ; style="left: 50%; transform: translate(-50%);">Call us</p>
            <p class="contact" ; style="left: 80%; transform: translate(-50%);">Send us a message</p>
        </div>

        <div style="padding-top:40px">
            <p class="info" ; style="left: 20%; transform: translate(-50%);">Contact us anytime</p>
            <p class="info" ; style="left: 50%; transform: translate(-50%);">(021) 111-2222</p>
            <p class="info" ; style="left: 80%; transform: translate(-50%);">info@transretail.co.id</p>
        </div>

        <hr style="width:100%;text-align:left;margin-left:0;margin-top:50px;color:whitesmoke">
        <p style="text-align: center; font-weight:bold;">Copyright © Trans Retail Indonesia</p>
    </div>

</body>

</html>