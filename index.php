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

    <!-- CSS -->
    <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <?php
            // error_reporting(0);
            include('php/csv-lookup.php');
            include('php/functions.php');
    ?>
</head>

<body class="text-center banner theme damask damask-<?php echo("$todayTheme"); ?>">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">SEC digital calendar</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="calendar/">Calendar</a>
                    <a class="nav-link" href="subscribe/">Subscribe</a>
                    <a class="nav-link" href="about/">About</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover text-left">
            <p class="date"><?php echo date("l d F Y"); ?></p>
            <h4 class="lead season">Season of <?php echo($todaySeason); ?></h4>
            <hr>
            <h1 class="cover-heading"><?php echo($todayFeast); ?></h1>
            <p class="lead description occasional"><?php echo($todayFeastDescription); ?> <span class="liturgical-colour">(<?php echo($todayLiturgicalColour); ?>)</span> <span class="feast-class badge badge-light"><?php echo($todayFeastClass); ?></span></p>
            <p class="spb occasional"><?php echo($todayFeastSpb); ?></p>
            <p class="translated occasional"><?php echo($todayFeastTranslated); ?></p>
            <p class="emberogation occasional"><?php echo($todayEmberogation); ?></p>
            <!-- <p><button class="btn btn-dark">Readings</button></p> -->
            <hr>
            <p class="bishop"><?php echo($todayBishop); ?></p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="rcl">
                    Revised Common Lectionary readings: Year <?php echo($todayRcl); ?><br />
                    Daily Eucharist and Daily Prayer: Year <?php echo($todayDaily); ?><br />
                    Liturgical year: <?php echo($todayYearFrom); ?>&ndash;<?php echo($todayYearTo); ?></p>
            </div>
        </footer>
    </div>
</body>
</html>