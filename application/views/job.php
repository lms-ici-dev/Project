<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <style>
        .squareblue {
            height: 12rem;
            width: 20rem;
            background-color: white;
            border: solid 0.2rem #1950A3;
            border-radius: 0.5rem;
            display: inline-block;
        }

        .squareblue p {
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            position: relative;
            color: black;
            font-family: 'Roboto';
            top: 9rem;
        }
    </style>
</head>

<body>

    <div style="margin-top:6rem;margin-bottom:4rem">
        <div class="squareblue" style="position: relative; left: 32%; transform: translate(-50%);">
            <p>Job List</p>
        </div>
        <div class="squareblue" style="position: relative; left: 45%; transform: translate(-50%);">
            <p>Drop Your CV</p>
        </div>
    </div>
    <div class="squareblue" style="position: relative; left: 50%; transform: translate(-50%);">
        <p>Internship</p>
    </div>
</body>

</html>