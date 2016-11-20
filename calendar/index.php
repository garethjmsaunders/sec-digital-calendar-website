<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" lass="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Calendar | SEC digital calendar for Outlook, Google Calendar, iCal, etc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=9">

    <!-- meta -->
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Terms and conditions of use for the Scottish Episcopal Church calendar and lectionary in a digital format for importing into Microsoft Office Outlook or Google Calendar" />
    <meta name="author" content="Gareth J M Saunders" />
    <meta name="copyright" content="Copyright (c) <?php echo(date('Y')); ?> Gareth J M Saunders" />
    <meta name="generator" content="Sublime Text 3" />
    <meta name="keywords" content="terms and conditions, Ts &amp; Cs, Scottish Episcopal Church, pisky, #pisky, calendar, kalendar, lectionary, saints, readings, festivals, Outlook, Google Calendar, iCal, iCalendar" />
    <meta name="rating" content="general" />
    <meta name="robots" content="index" />

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,200" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/subpage.css" rel="stylesheet">

    <!-- javascript -->
    <script src="../assets/js/vendor/modernizr-2.7.1.min.js"></script>

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

    <?php include('../php/functions.php'); ?>
</head>

<body class="page-calendar">

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
                <!--
                    <li><a href="<?php echo($homepath); ?>">Home</a></li>
                    <li><a href="../terms/">About</a></li>
                    <li class="active"><a href="./">Calendar</a></li>
                    <li><a href="../donate/">Donate</a></li>
                -->
                <?php get_navigation('menu'); ?>
                </ul>
            </div>
        </nav><!-- /navbar -->
    </div>
</div>

<!-- Banner | green | red | violet | white
================================================== -->
<div id="banner" class="banner damask damask-default">
    <div class="container positioning-context">
        <div class="row">
            <div class="banner-text col-md-7">
                <div class="banner-text-headings">
                    <h1><span class="banner-text-primary shadow">SEC digital calendar</span><br /> <span class="banner-text-secondary muted">Calendar</span></h1>
                    <div class="intro">
                        <p class="lead">View the complete calendar and lectionary with full details in Google Calendar.</p>
                        <p class="lead">Embed the calendar on your own website.</p>
                    </div>
                </div>
            </div><!-- ./banner-text -->
            <div class="banner-image col-md-5">
                <img src="../assets/img/devices/mobile.png" alt="Google Nexus 4 showing SEC calendar" class="mobile visible-lg visible-md  hidden-sm  hidden-xs">
            </div><!-- ./banner-image -->
        </div><!-- /.row -->
    </div>
</div>


<!-- Features
================================================== -->
<div class="container features-container">

    <!-- Embed Google Calendar in single, full-width column -->
    <div class="row">
        <div class="feature-block google-calendar col-lg-12">
            <h2>SEC calendar and lectionary</h2>
            <p><strong>Click on an entry below to view full details</strong>, including feast day, category, colour, and readings. Or <strong>change the view</strong>: week, month or agenda.</p>
            <iframe src="https://www.google.com/calendar/embed?src=1u7edrnsjrmdtqs4k0n79sf6g0%40group.calendar.google.com&amp;ctz=Europe/London" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div><!-- /.row -->

    <div class="row">
        <div class="col-lg-8">
            <h3>Embed this calendar on your website</h3>
            <p>To embed the calendar on your own website either import one of the files into your own Google Calendar, or copy and paste the embed code into your own webpage.</p>
            <p>Creating your own Google Calendar gives you most control over how it looks and on which tab it opens: week, month or agenda.</p>
            <p>You can adjust the width and height of the calendar by editing the <code>width="940" height="600"</code> attributes within the embedded code.</p>
        </div>
        <div class="col-lg-4">
            <h3>Copy and paste</h3>
            <p>Feel free to use the HTML code below to embed the calendar on your own website.</p>
            <textarea id="embed" class="embed-calendar">&lt;iframe src="https://calendar.google.com/calendar/embed?src=1u7edrnsjrmdtqs4k0n79sf6g0%40group.calendar.google.com&ctz=Europe/London" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"&rt;&lt;/iframe&rt;</textarea>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <?php get_footer(); ?>
    </footer>

</div><!-- /.container -->

<!-- JavaScript
==================================================
Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../assets/js/vendor/bootstrap.min.js"></script>

</body>
</html>