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

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <div>
        <div>
            <?php
            echo "<img src='./././assets/TransRetail Biru.png' alt='photo of me' style='width: 10.6445em; height: 1.2795em; position: absolute; margin-left: 150px; margin-top: 25px'/>";
            ?>

            <p class="header" style="padding: 0 0 0 900px;">Home</p>
            <p class="header" style="padding: 0 0 0 1025px;">Jobs</p>
            <p class="header" style="padding: 0 0 0 1140px;">Contact Us</p>
            <p class="header" style="padding: 0 0 0 1300px;">Sign In</p>
        </div>

        <!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
    </div>

</body>

</html>