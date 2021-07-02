<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <style type="text/css">
        .container {
            padding-left: 5rem;
            padding-right: 5rem;
            color: white;
            font-family: 'Roboto';
        }

        .dot {
            margin-top: 1rem;
            height: 123px;
            width: 123px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            transform: translate(-50%);
            display: inline-block;
        }

        .ket {
            position: relative;
            background-color: #1950A3;
            margin-top: 2rem;
            display: inline-block;
            transform: translate(-50%);
        }

        .ketA {
            position: relative;
            text-align: center;
            top: 5%;
        }
    </style>
</head>

<body>

    <div class="back">
        <div class="container">
            <h1 style="font-size: 30px; padding-top:2rem;">What We Offer</h1>
            <p>Each employee has a chance to see the impact of his work. You can make a real contribution to the success of the company.
                Several activities are often organized all over the year, such as weekly sports sessions, team building events, monthly drink, and much more</p>
            <div>
                <div>
                    <span class="dot" style="position: relative; left: 12%;"></span>
                    <span class="dot" style="position: relative; left: 27%;"></span>
                    <span class="dot" style="position: relative; left: 42%;"></span>
                    <span class="dot" style="position: relative; left: 57%;"></span>
                </div>
                <h3 class="ket" style="left: 12%;">Perks</h3>
                <h3 class="ket" style="left: 33%;">Trainings</h3>
                <h3 class="ket" style="left: 52%;">Sports Activity</h3>
                <h3 class="ket" style="left: 67%;">Eat & Drink</h3>
                <p class="ketA">A full-time position</p>
                <p class="ketA">Attractive salary package.</p>

            </div>
        </div>
</body>

</html>