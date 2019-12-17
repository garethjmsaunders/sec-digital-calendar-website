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
        <link href="bootstrap/css/cover.css" rel="stylesheet">
        <?php
                error_reporting(0);
                include('php/csv-lookup.php');
                include('php/functions.php');
        ?>
    </head>

<!--
default - gold
white   - ?
green   - gold
red     - gold
violet  - gold
 -->


    <!-- <body class="text-center banner damask damask-<?php echo("$todayColor"); ?>"> -->
    <body class="text-center banner damask damask-white">
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

            <main role="main" class="inner cover">
                <p class="date"><?php echo date("l d F Y"); ?></p>
                <!-- <h1 class="cover-heading"><?php echo($todayFeast); ?></h1> -->
                <h1 class="cover-heading">John the Evangelist</h1>
                <p class="lead pop">Apostle and Evangelist [4]</p>
                <!-- <p class="lead">Liturgical colour: <span class="liturgical-colour"><?php echo("$todayColor"); ?></span></p> -->
                <p class="bishop">Ordination of the Rt Revd Anne Dyer, Bishop of Aberdeen and Orkney, 2018</p>
                <p class="xlead">Liturgical colour: <span class="liturgical-colour">White</span></p>
                <hr>
                <p class="rcl">Revised Common Lectionary readings: Year A<br>Daily Eucharist and Daily Prayer: Year 2</p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <!-- <p class=""><a href="#">Now available: 2019–2020 calendar</a></p> -->
                </div>
            </footer>
        </div>
    </body>
</html>

<!--
TODO

1. Move CSS into assets/css including Bootstrap
2. Review PHP -- does it need a < ?php display(item); > function?
3. Can I get it to read future events, e.g. next week ahead?
4. Design subpages

 -->