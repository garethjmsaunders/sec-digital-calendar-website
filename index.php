<!doctype html>
<html lang="en" class="homepage cover-height">
<head>
    <meta charset="utf-8">
    <title>SEC digital calendar</title>

    <!-- meta -->
    <link rel="canonical" href="https://seccalendar.org.uk/">
    <meta name="author" content="The Revd Gareth J M Saunders">
    <meta name="copyright" content="Copyright (c) <?php echo(date('Y')); ?> Gareth J M Saunders" />
    <meta name="description" content="Scottish Episcopal Church digital calendar and lectionary in a digital format for importing into Google Calendar, Microsoft Outlook, etc">
    <meta name="generator" content="Sublime Text 3">
    <meta name="host" content="SiteGround">
    <meta name="keywords" content="SEC, Scottish Episcopal Church, pisky, #pisky, calendar, kalendar, lectionary, saints, readings, festivals, Outlook, Google Calendar, iCal, iCalendar" />
    <meta name="rating" content="general" />
    <meta name="robots" content="index" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Force page refresh -->
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" sizes="192x192" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <?php
        error_reporting(0);
        include('php/csv-lookup.php');
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1866588-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-1866588-7');
    </script>
</head>

<body class="banner cover-height damask damask-<?php echo("$todayTheme"); ?> text-center theme">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h2 class="masthead-brand">SEC digital calendar</h2>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="calendar/">Calendar</a>
                    <a class="nav-link" href="subscribe/">Subscribe</a>
                    <a class="nav-link" href="about/">About</a>
                </nav>
            </div>
        </header>

        <!-- NOTICE -->
        <?php 
            $current_ts  = time();
            $deadline_ts = mktime(0,0,0,12,5,2020);  // The date.  First 3 zeros are time then month, day and year
            if ($current_ts --> $deadline_ts) {
        ?>
            <!-- Display nothing -->
        <?php } else { ?>
            <div class="alert alert-dark text-center damask-<?php echo("$todayTheme"); ?> alert-sec" role="alert">
                <strong>SEC digital calendar 2020&ndash;2021</strong> is now available. <a href="subscribe/" class="alert-link">Subscribe now</a>.
            </div>
        <?php } ?>

        <!-- TODAY'S FEAST -->
        <main role="main" class="homepage-feast--today inner cover text-left">
            <p class="date"><?php echo date("l j F Y"); ?></p>
            <h4 class="lead season">Season of <?php echo($todaySeason); ?></h4>
            <h1 class="cover-heading"><?php echo($todayFeast); ?></h1>
            <p class="lead"><span class="description always"><?php echo($todayFeastDescription); ?></span><?php if($todayFeastClass !=='') {echo(" <span class=\"feast-class occasional badge badge-light\">$todayFeastClass</span> ");} else { echo(', '); } ?><span class="liturgical-colour always"><?php echo($todayLiturgicalColour); ?></span></p>
            <p class="spb occasional"><?php echo($todayFeastSpb); ?></p>
            <p class="translated occasional"><?php echo($todayFeastTranslated); ?></p>
            <p class="emberogation occasional"><?php echo($todayEmberogation); ?></p>
            <!-- .btn -->
            <hr>
            <p class="bishop occasional"><?php echo($todayBishop); ?></p>
        </main>

        <aside class="text-left">
            <p class="homepage-feast--tomorrow">Tomorrow: <?php echo($tomorrowFeast); ?>, <?php echo($tomorrowFeastDescription); ?><?php if ($tomorrowFeastClass!==''){ echo(' ('.$tomorrowFeastClass.')');} else {echo(',');}?> <?php echo($tomorrowLiturgicalColour); ?></p>
        </aside>

        <footer class="mt-auto">
            <p class="homepage-rcl">
                Revised Common Lectionary readings: Year <?php echo($todayRcl); ?><br />
                Daily Eucharist and Daily Prayer: Year <?php echo($todayDaily); ?><br />
                Liturgical year: <?php echo($todayYearFrom); ?>&ndash;<?php echo($todayYearTo); ?></p>
            <p>Home &middot; <a href="./calendar/">Calendar</a> &middot; <a href="./subscribe/">Subscribe</a> &middot; <a href="./colours/">Liturgical colours</a> &middot; <a href="./about/">About</a></p>
            <p>2004&ndash;<?php echo date("Y"); ?> &middot; <a href="https://www.facebook.com/groups/secoutlook/">Facebook</a> &middot; <a href="http://twitter.com/seccalendar">Twitter</a><br><a href="terms/">Terms and conditions</a></p>


        </footer>
    </div>
</body>
</html>