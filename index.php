<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SEC digital calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="The Revd Gareth J M Saunders">
    <meta name="generator" content="Sublime Text 3">
    <link rel="canonical" href="https://seccalendar.org.uk/">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <?php
            error_reporting(0);
            include('php/csv-lookup.php');
            include('php/functions.php');
    ?>
</head>

<!-- DAMASK options
default green | red | violet | white -->
<body class="text-center banner damask damask-green<?php #echo("$todayColor"); ?>">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">SEC digital calendar</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Calendar</a>
                    <a class="nav-link" href="#">Subscribe</a>
                    <a class="nav-link" href="#">About</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover text-left">
            <p class="date"><?php echo date("l d F Y"); ?></p>
            <h4 class="xlead season">Season of Pentecost</h4>
            <hr>
            <h1 class="cover-heading"><?php # echo($todayFeast); ?>Pentecost 14</h1>
            <p class="lead description">Fourteenth Sunday of Pentecost (<span class="liturgical-colour"><?php // echo("$todayColor"); ?>Green</span>) <span class="badge badge-light">3</span></p>
            <p class="translated">Translated from 8 December</p>
            <p class="ember rogation">Ember day | Rogation day</p>
            <p><button class="btn btn-dark">Readings</button></p>
            <hr>
            <p class="bishop">Ordination of the Rt Revd Anne Dyer, Bishop of Aberdeen and Orkney, 2018</p>
        </main>

        <footer class="xmastfoot mt-auto">
            <div class="inner">
                <p class="rcl">Revised Common Lectionary readings: Year A<br>Daily Eucharist and Daily Prayer: Year 2</p>
            </div>
        </footer>
    </div>
</body>
</html>