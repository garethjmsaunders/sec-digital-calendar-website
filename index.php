<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" lass="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>SEC digital calendar for Outlook, Google Calendar, iCal, etc. | Scottish Episcopal Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="host" content="SiteGround">

    <!-- meta -->
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Scottish Episcopal Church digital calendar and lectionary in a digital format for importing into Microsoft Office Outlook or Google Calendar" />
    <meta name="author" content="Gareth J M Saunders" />
    <meta name="copyright" content="Copyright (c) <?php echo(date('Y')); ?> Gareth J M Saunders" />
    <meta name="generator" content="Sublime Text 3" />
    <meta name="keywords" content="SEC, Scottish Episcopal Church, pisky, #pisky, calendar, kalendar, lectionary, saints, readings, festivals, Outlook, Google Calendar, iCal, iCalendar" />
    <meta name="rating" content="general" />
    <meta name="robots" content="index" />

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,200" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/home.css" rel="stylesheet">

    <!-- javascript -->
    <script src="assets/js/vendor/modernizr-2.7.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-1866588-7', 'seccalendar.co.uk');
      ga('send', 'pageview');
    </script>

    <!-- Look up current date; load general functions, inc. navigation -->
    <?php
        error_reporting(0);
        include('php/csv-lookup.php');
        include('php/functions.php');
    ?>
</head>

<body class="page-home">

<!-- Navbar
================================================== -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sec-nav-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php get_navigation('homepath'); ?>"><i class="glyphicon glyphicon-calendar"></i> SEC Digital Calendar &amp; Lectionary</a>
            </div>
            <div class="collapse navbar-collapse" id="sec-nav-main">
                <ul class="nav navbar-nav navbar-right">
                <?php get_navigation('menu'); ?>
                </ul>
            </div>
        </nav><!-- /navbar -->
    </div>
</div>

<!-- Banner | green | red | violet | white
================================================== -->
<div id="banner" class="banner damask damask-<?php echo("$todayColor"); ?>">
    <div class="container positioning-context">
        <div class="row">
            <div class="banner-text col-md-7">
                <div class="banner-text-headings">
                    <h1><span class="banner-text-primary shadow">SEC Calendar for Outlook</span>, <span class="banner-text-secondary muted">Google Calendar, iCal, etc.</span></h1>
                    <?php
                        // Show NOW UPDATED FOR {YEARS} message during crossover (after update)
                        // Takes the current year (string) and converts it to integer as far as it can
                        // e.g. '2015-2016' will return `2015` (int) which can then be added to.
                        if ($showLastYear === 'y') {
                    ?>
                        <p class="lead">Import the Scottish Episcopal Church calendar and lectionary into your electronic calendar. <strong>NOW UPDATED FOR <?php echo($currentYear+1); ?>&ndash;<?php echo($currentYear+2); ?>.</strong></p>
                    <?php } else { ?>
                        <p class="lead">Import the <?php echo($currentYear); ?> Scottish Episcopal Church calendar and lectionary (Year <?php echo($currentRcl); ?>/<?php echo($currentDaily); ?>) into your electronic calendar.</p>
                    <?php
                        }
                    ?>
                </div>
                <!-- SUBSCRIBE -->
                <div class="btn-group">
                    <button class="btn btn-lg btn-success dropdown-toggle" href="#" role="button" data-toggle="dropdown" type="button"><i class="fa fa-calendar"></i> Subscribe <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://calendar.google.com/calendar/ical/1u7edrnsjrmdtqs4k0n79sf6g0%40group.calendar.google.com/public/basic.ics"><strong>iCalendar feed (all years)</strong> (.ics, hosted at Google Calendar)</a></li>
                        <li class="divider"></li>
                        <?php // Last year's downloads should be available right up until the day before Advent 1
                            if ($showLastYear === 'y') {
                        ?>
                                <?php // If during overlap show both links ?>
                                <li><a href="<?php echo ($showNewIcalendar); ?>"><strong>iCalendar feed <?php echo ($showNextYear); ?></strong> (.ics, hosted at Google Calendar)</a></li>
                                <li><a href="<?php echo ($showOldIcalendar); ?>"><strong>iCalendar feed <?php echo ($currentYear) ?></strong> (.ics, hosted at Google Calendar)</a></li>
                        <?php } else { ?>
                                <?php // Otherwise, just show the new URL with the current year ?>
                                <li><a href="<?php echo ($showNewIcalendar); ?>"><strong>iCalendar feed <?php echo ($currentYear); ?></strong> (.ics, hosted at Google Calendar)</a></li>
                        <?php } ?>
                        <li class="divider"></li>
                        <li><a href="https://support.google.com/calendar/answer/37100?hl=en"><i class="fa fa-question-circle"></i> How to subscribe to iCalendar using Google Calendar (tutorial)</a></li>
                        <li class="divider"></li>
                        <li><a href="http://office.microsoft.com/en-gb/outlook-help/view-and-subscribe-to-internet-calendars-HA010167325.aspx"><i class="fa fa-question-circle"></i> How to subscribe to iCalendar using Outlook (tutorial)</a></li>
                        <li><a href="http://www.youtube.com/watch?v=tYKC2AIGlpA"><i class="fa fa-video-camera"></i> How to subscribe to iCalendar using Outlook (video)</a></li>
                    </ul>
                </div>
                <!-- DOWNLOAD -->
                <div class="btn-group">
                    <button class="btn btn-lg btn-default dropdown-toggle" href="download/sec-calendar-2013-2014.csv" role="button" data-toggle="dropdown" type="button"><i class="fa fa-download"></i> Download <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://github.com/garethjmsaunders/sec-digital-calendar"><strong>Download from GitHub</strong></a></li>
                        <li class="divider"></li>
                        <li><a href="https://support.google.com/calendar/answer/37118?hl=en"><i class="fa fa-question-circle"></i> How to import CSV files into Google Calendar (tutorial)</a></li>
                        <li class="divider"></li>
                        <li><a href="http://tinnes.co.uk/desktopcalendar/support/7/faq_importexport_importoutlook2010.php"><i class="fa fa-question-circle"></i> How to import CSV files into Outlook (tutorial)</a></li>
                        <li><a href="http://www.youtube.com/watch?v=ZwLqW2NkVKE"><i class="fa fa-video-camera"></i> How to import CSV files into Outlook (video)</a></li>
                    </ul>
                </div>
            </div><!-- ./banner-text -->
            <div class="banner-image col-md-5">
                <img src="assets/img/devices/mobile.png" alt="Google Nexus 4 showing SEC calendar" class="mobile visible-lg  visible-md  hidden-sm  hidden-xs">
                <img src="assets/img/devices/tablet.png" alt="Google Nexus 7 showing SEC calendar" class="tablet  hidden-lg   hidden-md visible-sm visible-xs">
            </div><!-- ./banner-image -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 today">
                <span class="label label-default">TODAY</span> <?php echo($todayFeast); ?>
                <p class="date"><?php echo date("l d F Y"); ?></p>
            </div>
        </div>
    </div>
</div>


<!-- Features
================================================== -->
<div class="container features-container">

    <!-- Three columns of text below the carousel -->
    <div class="features row">
        <div class="feature-block col-lg-4">
            <img class="img-circle" src="assets/img/icons/icon-lectionary.png" width="72" height="72" alt="Lectionary">
            <h2>Calendar and Lectionary</h2>
            <p>Contains most of the information for the <a href="http://www.scotland.anglican.org/who-we-are/publications/liturgies/calendar-and-lectionary/">Scottish Episcopal Church calendar and lectionary</a> for everyday use during <strong><?php echo($currentYear); ?></strong>, including festivals, Sundays, readings, and info on propers.</p>
            <ul>
                <li><strong>Year <?php echo($currentRcl); ?></strong>: Revised Common Lectionary readings</li>
                <li><strong>Year <?php echo($currentDaily); ?></strong>: Daily Eucharist and Daily Prayer readings</p>
            </ul>

            <hr>
            <h4 class="prepend-top">A5 booklet</h4>
            <p>Fr Kelvin Holdsworth has created a physical copy of this year's readings in the form of an A5 booklet.</p>
            <p>Buy <a href="http://thurible.net/product/scottish-kalendar-2017/">A Scottish Kalendar for 2017</a> (&pound;3.00).</p>

            <hr>
            <h4 class="prepend-top">Other denominations</h4>
            <ul>
                <li><a href="http://frsimon.wordpress.com/electric-ordo/">Church of England</a> (by Fr Simon Rundell)</li>
                <li><a href="http://catholicapptitude.org/apps/catholic-calendar-apps/">Roman Catholic</a> (on Catholic Apptitude)</li>
            </ul>

        </div>
        <div class="feature-block col-lg-4">
            <img class="img-circle" src="assets/img/icons/icon-sync.png" width="72" height="72" alt="Lectionary">
            <h2>Subscribe or import</h2>
            <p>Two options are available:</p>
            <ul>
                <li class="prepend-top"><strong>Subscribe</strong> to the iCalendar feed (which updates automatically every year),</li>
                <li class="prepend-top"><strong>Download</strong> the <abbr title="Comma Separated Values">CSV</abbr> data file to import into your calendar manually</li>
            </ul>
        </div>
        <div class="feature-block col-lg-4">
            <img class="img-circle" src="assets/img/icons/icon-mobile.png" width="72" height="72" alt="Lectionary">
            <h2>Take it anywhere</h2>
            <p>Import the SEC calendar into your Outlook or Google Calendar, synchronise it with your mobile device and take it anywhere with you.</p>

            <hr>
            <h3 class="prepend-top">Source code</h3>
            <p>The source code for this project is freely available from <a href="https://github.com/garethjmsaunders/sec-digital-calendar">GitHub</a>, under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</p>
        </div>
    </div><!-- /.row -->

    <!-- FOOTER -->
    <footer>
        <?php get_footer(); ?>
    </footer>

</div><!-- /.container -->

<!-- JavaScript
==================================================
Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

</body>
</html>