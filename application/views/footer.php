<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <style type="text/css">
        .footer {
            font-size: 18px;
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #4f4f4f;
            color: whitesmoke;
            font-family: 'Roboto';
        }

        .contact {
            font-size: 15px;
            position: relative;
            color: white;
            margin-top: 10px;
            font-family: 'Roboto';
        }

        .info {
            font-size: 18px;
            font-weight: bold;
            position: relative;
            color: white;
            margin-top: 10px;
            font-family: 'Roboto';
        }

        .footer a {
            position: relative;
            top: 2rem;
        }
    </style>
</head>

<body>

    <div class="footer">
        <?php
        echo "<img src='./././assets/TransRetail Biru.png' alt='photo of me' style='width: 15.96675em; height: 1.91925em; position: absolute; margin-left: 200px; margin-top: 25px; background-color: white'/>";
        ?>
        <a style="left: 45rem;">Home</a>
        <a style="left: 48rem;">●</a>
        <a style="left: 53rem;">Jobs</a>
        <a style="left: 56rem;">●</a>
        <a style="left: 59rem;">Blog</a>
        <a style="left: 62rem;">●</a>
        <a style="left: 65rem;">Contact Us</a>

        <hr style="width:100%;text-align:left;margin-left:0;margin-top:60px;color:whitesmoke">

        <div>
            <a class="contact" ; style="left: 10%; transform: translate(-50%);">How can we help?</a>
            <a class="contact" ; style="left: 40%; transform: translate(-50%);">Call us</a>
            <a class="contact" ; style="left: 70%; transform: translate(-50%);">Send us a message</a>
        </div>

        <div style="padding-top:40px;padding-bottom:40px">
            <a class="info" ; style="left: 9%; transform: translate(-50%);">Contact us anytime</a>
            <a class="info" ; style="left: 35%; transform: translate(-50%);">(021) 111-2222</a>
            <a class="info" ; style="left: 61%; transform: translate(-50%);">info@transretail.co.id</a>
        </div>

        <hr style="width:100%;text-align:left;margin-left:0;margin-top:50px;color:whitesmoke;">
        <p style="text-align: center; font-weight:bold;padding-bottom:20px">Copyright © Trans Retail Indonesia</p>
    </div>

</body>

</html>