<!doctype html>
<html lang="en" class="homepage cover-height">
<head>
    <meta charset="utf-8">
    <title>SEC digital calendar : 2023–2024</title>

    <!-- meta -->
    <link rel="canonical" href="https://seccalendar.org.uk/">
    <meta name="author" content="The Revd Gareth J M Saunders">
    <meta name="copyright" content="Copyright (c) <?php echo(date('Y')); ?> Gareth J M Saunders" />
    <meta name="description" content="Scottish Episcopal Church digital calendar and lectionary in a digital format for importing into Google Calendar, Microsoft Outlook, etc">
    <meta name="generator" content="Sublime Text 4">
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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" data-version="4.6.1">
    <link href="assets/css/style.css" rel="stylesheet">

    <?php
        error_reporting(0);
        include('php/csv-lookup.php');
    ?>

    <!-- Google Search Console verification -->
    <meta name="google-site-verification" content="DLv-E5XqwZGKo32fJsQ5AbP7UUJ6TWLk0fYjpeKEpXc" />
</head>

<!-- GA4 | Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7J83CS4S6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7J83CS4S6');
</script>


<body class="banner cover-height damask damask-<?php echo("$today_theme"); ?> text-center theme">
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

        <!-- Scheduled notice, usually for Next year's data -->
        <?php 
            $current_ts  = time();
            $deadline_ts = mktime(0,0,0,1,1,2023);  // The date.  First 3 zeros are time then month, day and year
            if ($current_ts --> $deadline_ts) {
        ?>
            <!-- DISPLAY NOTHING BEFORE DEADLINE -->

        <?php } else { ?>
            <div class="alert alert-sec alert-dark text-center damask-<?php echo("$today_theme"); ?> alert-sec" role="alert">
                <!-- <strong>SEC digital calendar 2020&ndash;2021</strong> is now available. <a href="subscribe/" class="alert-link">Subscribe now</a>. -->
            </div>
        <?php } ?>

        <!-- Ad hoc notice -->
        <!-- <div class="alert alert-sec alert-dark text-center damask-<?php echo("$today_theme"); ?> alert-sec" role="alert">
            <a href="colours/" class="alert-link">Liturgical colours calendar PDF</a> is now available.</a>
        </div> -->


        <!-- TODAY'S FEAST -->
        <main role="main" class="homepage-feast--today inner cover text-left">
            <p class="date"><?php echo date("l j F Y"); ?></p>
            <h4 class="lead season">Season of <?php echo($today_season); ?></h4>
            <h1 class="cover-heading"><?php echo($today_feast); ?></h1>
            <p class="lead"><span class="description always"><?php echo($today_description); ?></span><?php if($today_class !=='') {echo(" <span class=\"feast-class occasional badge badge-light\">$today_class</span> ");} else { echo(', '); } ?><span class="liturgical-colour always"><?php echo($today_liturgical_colour); ?></span></p>
            <p class="spb occasional"><?php echo($today_spb); ?></p>
            <p class="translated occasional"><?php echo($today_translated); ?></p>
            <p class="emberogation occasional"><?php echo($today_emberogation); ?></p>
            <hr>
            <p class="bishop occasional"><?php echo($today_bishop); ?></p>

            <!-- button to toggle readings and collect-->
            <p><button type="button" class="btn btn-secondary" id="js-show-hide-btn">Readings and collect</button></p>

            <div class="readings-collect" id="js-readings-collect">
                <p><?php echo nl2br($today_readings_collect); ?></p>
                <p>RESOURCES</p>
                <p><a href="https://www.scotland.anglican.org/spirituality/prayer/daily-offices"><button type="button" class="btn btn-secondary">Daily Prayer</button></a></p>
                <p><a href="https://www.scotland.anglican.org/who-we-are/publications/liturgies"><button type="button" class="btn btn-secondary">Liturgies</button></a></p>
                <p><a href="https://www.biblegateway.com"><button type="button" class="btn btn-secondary">Bible Gateway</button></a></p>
            </div>
        </main>

        <!-- WEB BROWSER EXTENSIONS Special notice -->
        <?php 
            $current_ts  = time();
            $deadline_ts = mktime(0,0,0,6,17,2022);  // The date.  First 3 zeros are time then month, day and year
            if ($current_ts < $deadline_ts) {
        ?>
            <!-- Display before deadline -->
            <div class="alert alert-dark text-center damask-default alert-sec" role="alert">
                <strong>NEW</strong> Web browser extensions for <a href="extension/" class="alert-link"><span class="browser-icon browser-chrome">Chrome</span>, <span class="browser-icon browser-firefox">Firefox</span> and <span class="browser-icon browser-edge">Edge</span></a>.
            </div>
        <?php } else { ?>
            <!-- Display after deadline -->
        <?php } ?>
        

        <!-- NEXT FEASTS -->
        <aside class="text-left inner cover">
            <h2 class="next-feasts">Next (feasts, readings and collects) &hellip;</h2>
            <?php echo($table_data); ?>
        </aside>

        <hr>

        <footer class="mt-auto">
            <p class="homepage-rcl">
                Revised Common Lectionary readings: Year <?php echo($today_rcl); ?><br />
                Daily Eucharist and Daily Prayer: Year <?php echo($today_daily); ?><br />
                Liturgical year: <?php echo($today_year_from); ?>&ndash;<?php echo($today_year_to); ?>
            </p>
            <p>Home &middot; <a href="./calendar/">Calendar</a> &middot; <a href="./subscribe/">Subscribe</a> &middot; <a href="./colours/">Liturgical colours</a> &middot; <a href="terms/">Terms and conditions</a> &middot; <a href="./about/">About</a></p>
            <p>Website by <a href="https://digitalshed45.co.uk/">Digital Shed45</a> &middot; 2004&ndash;<?php echo date("Y"); ?></p>
        </footer>
    </div>

<script src="./assets/js/jquery-3.6.1.min.js"></script>
<script type="application/javascript">

    $(document).ready(function() {

        // === TODAY =======================

        $('#js-show-hide-btn').click(function() {
            $('#js-readings-collect').toggle('slow');
        });

        // === NEXT ========================

        $('.next-date-feast-row').click(function() {

            $this = $(this);
            $target = $this.next().find('.next-readings-div');

            // If the row clicked is already open, close it
            if ($target.hasClass('js-selected')) {
                $target.toggle('slow').toggleClass('js-selected');
                $this.parent().find('.next-date-feast-row').removeClass('js-selected-row');
            // Else, close any open blocks...
            } else {
                // Deselect date row
                $this.parent().find('.next-date-feast-row').removeClass('js-selected-row');
                // Close reading block
                $('div.js-selected').toggleClass('js-selected').toggle('slow');;
                // Now, open the row clicked and add the correct classes
                $target.toggle('slow').addClass('js-selected');
                $this.addClass('js-selected-row');
            }

        });

        // === SPB ABBR ====================

        // Today: SPB field
        $(".spb:contains('SPB')").html(function(_, html) {
           return  html.replace(/(SPB)/g, 'Scottish Prayer Book (SPB)')
        });

        // Today: Readings field
        $(".readings-collect:contains('SPB')").html(function(_, html) {
           return  html.replace(/(SPB)/g, 'Scottish Prayer Book (SPB)')
        });

        // Next: Readings
        $(".next-readings-div:contains('SPB')").html(function(_, html) {
           return  html.replace(/(SPB)/g, '<br>Scottish Prayer Book (SPB)')
        });

    });

</script>

</body>
</html>