<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style type="text/css">
        .navbar {
            overflow: hidden;
            background-color: white;
            position: fixed;
            top: 0;
            width: 100%;
        }

        /* Links inside the navbar */
        .navbar a {
            font-size: 18px;
            font-weight: bold;
            line-height: 5rem;
            color: black;
            position: relative;
            font-family: 'Roboto';
            top: 0.2rem;
        }

        /* Change background on mouse-over */
        .navbar a:hover {
            color: #ddd;
        }
    </style>
</head>

<body>

    <div>
        <div class="navbar">
            <?php
            echo "<img src='./././assets/TransRetail Biru.png' alt='photo of me' style='width: 10.6445em; height: 1.2795em; position: relative; left: 150px; top: 0.4rem'/>";
            ?>

            <a style="left: 40rem;">Home</a>
            <a style="left: 45rem;">Jobs</a>
            <a style="left: 50rem;">Contact Us</a>
            <a style="left: 55rem;">Sign In</a>
        </div>

    </div>
</body>

</html>