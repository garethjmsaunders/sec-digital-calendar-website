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
            <!-- Display nothing before deadline -->
        <?php } else { ?>
            <div class="alert alert-dark text-center damask-<?php echo("$todayTheme"); ?> alert-sec" role="alert">
                <strong>SEC digital calendar 2020&ndash;2021</strong> is now available. <a href="subscribe/" class="alert-link">Subscribe now</a>.
            </div>
        <?php } ?>

        <!-- Notice for Liturgical colours calendar -->
        <?php 
            $current_ts  = time();
            $deadline_ts = mktime(0,0,0,5,2,2022);  // The date.  First 3 zeros are time then month, day and year
            if ($current_ts < $deadline_ts) {
        ?>
            <!-- Display before deadline -->
            <div class="alert alert-dark text-center damask-default alert-sec" role="alert">
                <strong>NEW</strong> <a href="colours/" class="alert-link">Guide to liturgical colours</a> with downloadable calendar PDF
            </div>
        <?php } else { ?>
            <!-- Display after deadline -->
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

        <hr>

        <!-- NEXT SEVEN DAYS -->
        <aside class="text-left inner cover">
            <p class="next-seven">Next seven days&hellip;</p>
            <table class="homepage-feast--nextseven">
                <tr>
                    <td>
                        <?php echo($dayTwoDay); ?>
                    </td>
                    <td>
                        <?php echo($dayTwoFeast); ?>, <?php echo($dayTwoFeastDescription); ?><?php if ($dayTwoFeastClass!==''){ echo(' ('.$dayTwoFeastClass.')');} else {echo(',');}?> <?php echo($dayTwoLiturgicalColour); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo($dayThreeDay); ?>
                    </td>
                    <td>
                        <?php echo($dayThreeFeast); ?>, <?php echo($dayThreeFeastDescription); ?><?php if ($dayThreeFeastClass!==''){ echo(' ('.$dayThreeFeastClass.')');} else {echo(',');}?> <?php echo($dayThreeLiturgicalColour); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo($dayFourDay); ?>
                    </td>
                    <td>
                        <?php echo($dayFourFeast); ?>, <?php echo($dayFourFeastDescription); ?><?php if ($dayFourFeastClass!==''){ echo(' ('.$dayFourFeastClass.')');} else {echo(',');}?> <?php echo($dayFourLiturgicalColour); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo($dayFiveDay); ?>
                    </td>
                    <td>
                        <?php echo($dayFiveFeast); ?>, <?php echo($dayFiveFeastDescription); ?><?php if ($dayFiveFeastClass!==''){ echo(' ('.$dayFiveFeastClass.')');} else {echo(',');}?> <?php echo($dayFiveLiturgicalColour); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo($daySixDay); ?>
                    </td>
                    <td>
                        <?php echo($daySixFeast); ?>, <?php echo($daySixFeastDescription); ?><?php if ($daySixFeastClass!==''){ echo(' ('.$daySixFeastClass.')');} else {echo(',');}?> <?php echo($daySixLiturgicalColour); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo($daySevenDay); ?>
                    </td>
                    <td>
                        <?php echo($daySevenFeast); ?>, <?php echo($daySevenFeastDescription); ?><?php if ($daySevenFeastClass!==''){ echo(' ('.$daySevenFeastClass.')');} else {echo(',');}?> <?php echo($daySevenLiturgicalColour); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo($dayEightDay); ?>
                    </td>
                    <td>
                        <?php echo($dayEightFeast); ?>, <?php echo($dayEightFeastDescription); ?><?php if ($dayEightFeastClass!==''){ echo(' ('.$dayEightFeastClass.')');} else {echo(',');}?> <?php echo($dayEightLiturgicalColour); ?>
                    </td>
                </tr>
            </table>

        </aside>

        <hr>

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