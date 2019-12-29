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

        <main role="main" class="today inner cover text-left">
            <p class="date"><?php echo date("l d F Y"); ?></p>
            <h4 class="lead season">Season of <?php echo($todaySeason); ?></h4>
            <hr>
            <h1 class="cover-heading"><?php echo($todayFeast); ?></h1>
            <p class="lead description occasional"><?php echo($todayFeastDescription); ?> <span class="feast-class badge badge-light"><?php echo($todayFeastClass); ?></span> <span class="liturgical-colour"> <?php echo($todayLiturgicalColour); ?></span> </p>
            <p class="spb occasional"><?php echo($todayFeastSpb); ?></p>
            <p class="translated occasional"><?php echo($todayFeastTranslated); ?></p>
            <p class="emberogation occasional"><?php echo($todayEmberogation); ?></p>
            <!-- <p><button class="btn btn-dark">Readings</button></p> -->
            <hr>
            <p class="bishop"><?php echo($todayBishop); ?></p>

        </main>

        <aside class="tomorrow text-left">
            <p>Tomorrow: <?php echo($tomorrowFeast); ?>, <?php echo($tomorrowFeastDescription); ?> (<?php echo($tomorrowFeastClass); ?>) <?php echo($tomorrowLiturgicalColour); ?></p>
        </aside>


        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p class="rcl">
                    Revised Common Lectionary readings: Year <?php echo($todayRcl); ?><br />
                    Daily Eucharist and Daily Prayer: Year <?php echo($todayDaily); ?><br />
                    Liturgical year: <?php echo($todayYearFrom); ?>&ndash;<?php echo($todayYearTo); ?></p>
                <p class="content"><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/80x15.png" /></a> This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons</a> Attribution 4.0 International License. &middot; <a href="../terms/">Terms and conditions</a> &middot; 2004&ndash;2019 &middot; <a href="http://twitter.com/seccalendar">Twitter</a> &middot; <a href="https://www.facebook.com/groups/secoutlook/">Facebook</a></p>
            </div>
        </footer>
    </div>
</body>
</html>