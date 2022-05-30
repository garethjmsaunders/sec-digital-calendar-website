<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SEC digital calendar | Windows Sidebar Gadget</title>

    <!-- meta -->
    <meta name="author" content="The Revd Gareth J M Saunders">
    <meta name="copyright" content="Copyright (c) <?php echo(date('Y')); ?> Gareth J M Saunders" />
    <meta name="description" content="Windows Sidebar Gadget to display Scottish Episcopal Church digital calendar and lectionary">
    <meta name="generator" content="Sublime Text 4">
    <meta name="host" content="SiteGround">
    <meta name="keywords" content="SEC, Scottish Episcopal Church, pisky, #pisky, calendar, kalendar, lectionary, saints, readings, festivals, Outlook, Google Calendar, iCal, iCalendar, Windows, Vista, Windows 7, Windows 8, Windows 8.1, Windows 10, Windows 11, 8Gadget Sidebar, gadget" />
    <meta name="rating" content="general" />
    <meta name="robots" content="no-index" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        error_reporting(0);
        include('php/csv-lookup.php');

        // Title for hover over feast name in Windows Sidebar Gadget

        $feast_title = date("l j F Y");
        $feast_title = $feast_title . " &bull; Season of $today_season &bull; ";
        $feast_title = $feast_title . "$today_feast ";

        if ( $today_class !=='') {
            $feast_title = $feast_title . "($today_class) ";
        } else {
            // no class info
        }

        $feast_title = $feast_title . "$today_liturgical_colour &bull; ";
        $feast_title = $feast_title . "$today_description ";

        if ( $today_translated !=='') {
            $feast_title = $feast_title . "[$today_translated] ";
        } else {
            // no translated feast info
        }

        if ( $today_emberogation !=='') {
            $feast_title = $feast_title . "$today_emberogation";
        } else {
            // not ember day or rogation day
        }
    ?>

    <style>

        body {
            background-color: black;
            color: white;
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 10px;
            text-align: left;
        }

        .damask {
            background-repeat: both;
            background-position: all;
        }
        .damask-green {
            background-image: url('../../assets/img/damask-green.png');
        }
        .damask-red {
            background-image: url('../../assets/img/damask-red.png');
        }
        .damask-violet {
            background-image: url('../../assets/img/damask-violet.png');
        }
        .damask-white {
            background-image: url('../../assets/img/damask-white.png');
        }

        .gadget {
            height: 100%;
            width: 100%;
        }

        .lozenge {
            float: right;
        }

        .season {
            font-size: 12px;
            height: 12px;
            line-height: 12px;
            margin: 0 0 10px 0;
            padding: 0;
        }

        .feast {
            font-size: 16px;
            font-weight: bold;
            height: 110px;
            margin: 0 0 10px 0;
            overflow: hidden;
            padding: 0 30px 0 0;
            padding: 0;
        }

        a,
        a:link,
        a:visited,
        a:active {
            color: white;
            text-decoration: none;
        }
        a:hover,
        .feast a:hover {
            color: #ddd;
        }

        .description {
            height: 36px;
            line-height: 12px;            
            margin: 0;
            overflow: hidden;
            padding: 0;
        }

    </style>

</head>

<body class="damask damask-<?php echo("$today_theme"); ?>">

    <div class="gadget">

        <div class="logo">
            <img src="assets/gadget/lozenge.png" alt="SEC logo" title="Refresh gadget" class="lozenge" id="reload" onClick="window.location.reload(true);">
        </div>

        <div class="season" title="Season of <?php echo($today_season); ?>">
            <?php echo($today_season); ?>
        </div>

        <div class="feast">
            <p><a href="https://www.seccalendar.org.uk/" title="<?php echo($feast_title); ?>"><?php echo($today_feast); ?></a></p>
        </div>

        <div class="description" title="<?php echo($today_description); ?>">
            <?php echo($today_description); ?>
        </div>

    </div>

</body>
</html>