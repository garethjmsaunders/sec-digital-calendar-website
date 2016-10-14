<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" lass="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>How to... import or subscribe | SEC Digital Calendar and Lectionary for Outlook, Google Calendar, iCal, etc.</title>
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

<body class="page-how">

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
<div id="banner" class="banner damask damask-default">
    <div class="container positioning-context">
        <div class="row">
            <div class="banner-text col-md-7">
                <div class="banner-text-headings">
                    <h1><span class="banner-text-primary shadow">SEC digital calendar</span><br /> <span class="banner-text-secondary muted">How&nbsp;to... import or subscribe</span></h1>
                    <div class="intro">
                        <p class="lead">There are two ways to get this information into your calendar:</p>
                        <ul>
                            <li><p class="lead"><strong>IMPORT</strong>—Add to your existing calendar.</p></li>
                            <li><p class="lead"><strong>SUBSCRIBE</strong>—View it alongside your existing calendar.</p></li>
                        </ul>
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

    <!-- Three columns of text below the carousel -->
    <div class="features faq row">
        <div class="feature-block col-lg-8">

            <div class="tab-block">

                <ul class="nav nav-pills">

                <?php // TODO  TRY TO GET CONTENT TO LOAD VIA AJAX,
                      // see http://stackoverflow.com/questions/8456974/how-to-use-ajax-loading-with-bootstrap-tabs-js ?>

                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Import <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#import-outlook" data-toggle="tab">Microsoft Outlook</a></li>
                                <li><a href="#import-google" data-toggle="tab">Google Calendar</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subscribe <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#subscribe-outlook" data-toggle="tab">Microsoft Outlook</a></li>
                                <li><a href="#subscribe-google" data-toggle="tab">Google Calendar</a></li>
                            </ul>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">


<?php // =io #1 IMPORT OUTLOOK ?>
                    <div class="tab-pane fade in active" id="import-outlook">
                        <h2>Import into Microsoft Outlook</h2>
                        <div class="instructions">
                            <p class="lead">This option imports all the SEC Calendar and Lectionary dates into your existing Outlook or Exchange Calendar. This will increase the size of your calendar file.</p>
                            <p class="alert alert-success"><span class="label label-success">Note</span> These instructions are specifically for <strong>Microsoft Outlook 2010</strong>; there may be slight variations when importing into Outlook 2003, 2007 or 2013.</p>

                            <h3>Watch how to do it</h3>
                            <p>This video shows you how to import a file into Outlook 2010. Note, however, that the website design shown on the video is out-of-date, but once you've downloaded the file the procedure is exactly as shown on the video.</p>
                            <div class="video-wrapper">
                                <iframe width="420" height="315" src="//www.youtube.com/embed/ZwLqW2NkVKE" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <h3 class="instructions-heading">Step-by-step walkthrough</h3>
                            <dl>
                                <dt>1. Download the .CSV file</dt>
                                    <dd>
                                        <p>Download the comma separated values (.csv) file (or the iCalendar feed file, if you prefer).</p>
                                        <p class="visible-lg">You'll find the download links on the <a href="<?php get_navigation('homepath'); ?>">homepage</a> or on the right.</p>
                                        <p class="visible-xs visible-sm visible-md">You'll find the <a href="#download-links">download links</a> below, or on the <a href="<?php get_navigation('homepath'); ?>">homepage</a>.</p>
                                        <p><a href="<?php get_navigation('homepath'); ?>"><img src="../assets/img/how/import/outlook/01-download.png" alt="Screenshot of homepage subscribe and download buttons."></a></p>
                                    </dd>

                                <dt>2. Backup your Outlook data <span class="label label-warning">Optional</span></dt>
                                    <dd>
                                        <p>You may wish to back-up your Outlook Data File (.pst) before you import.</p>
                                        <p>You can find out more here:</p>
                                        <ul>
                                            <li>Microsoft Support website: <a href="http://support.microsoft.com/kb/291636">How to locate, move, or back up your personal folders (.pst) file in Outlook</a></li>
                                            <li>How To Outlook: <a href="http://www.howto-outlook.com/howto/backupandrestore.htm">Backup and Restore all Outlook data</a></li>
                                        </ul>
                                        <p>If you use Microsoft Exchange (which stores your offline data in a .ost file) you may wish to <a href="http://office.microsoft.com/en-gb/outlook-help/export-outlook-items-to-an-outlook-data-file-pst-HA102534110.aspx" title="Export Outlook items to an Outlook Data File (.pst)">export your Outlook calendar to an Outlook Data File (.pst)</a> as a backup.</p>
                                        <p><img src="../assets/img/how/import/outlook/02-backup.png" alt="Screenshot of Microsoft Support website."></p>
                                    </dd>

                                <dt>3. File > Open > Import</dt>
                                    <dd>
                                        <p>Open Microsoft Office Outlook 2010 and from the File tab on the ribbon select Open and then Import.</p>
                                        <p><img src="../assets/img/how/import/outlook/03-import.png" alt="Import files, settings, and RSS Feeds into Outlook."></p>
                                    </dd>

                                <dt>4. Import and export wizard</dt>
                                    <dd>
                                        <p>The Import and Export Wizard window will open. Select <strong>Import from another program or file</strong>. Then click <strong>Next &gt;</strong>.</p>
                                        <p><img src="../assets/img/how/import/outlook/04-wizard.png" alt="Import data from other programs or files, including ACT!, Lotus Organizer, Outlook data files (.PST), database files, text files and others."></p>
                                    </dd>

                                <dt>5. Comma Separated Values (Windows)</dt>
                                    <dd>
                                        <p>Select <strong>Comma Separated Values (Windows)</strong>. Then click <strong>Next &gt;</strong>.</p>
                                        <p><img src="../assets/img/how/import/outlook/05-import-a-file.png" alt="Import a file dialog."></p>
                                    </dd>

                                <dt>6. Select a file to import</dt>
                                    <dd>
                                        <p><strong>Browse to the .CSV file</strong> that you downloaded in step 1.</p>
                                        <p>Select an option depending on how you want to handle duplicate entries:</p>
                                        <ul>
                                            <li>Replace duplicates with items imported</li>
                                            <li>Allow duplicates to be created</li>
                                            <li>Do not import duplicate items</li>
                                        </ul>
                                        <p>I always select <strong>"Do not import duplicate items"</strong>.</p>
                                        <p>Click <strong>Next &gt;</strong>.</p>
                                        <p><img src="../assets/img/how/import/outlook/06-select-a-file.png" alt="File to import but do not import duplicate items."></p>
                                    </dd>

                                <dt>7. Select destination folder</dt>
                                    <dd>
                                        <p><strong>Select the destination folder</strong> within Outlook.</p>
                                        <p>This is usually "<strong>Calendar</strong>", but in this example I have created a new calendar sub-folder called "SEC Complete 2010-2011" for testing purposes.</p>
                                        <p>Click <strong>Next &gt;</strong>.</p>
                                        <p><img src="../assets/img/how/import/outlook/07-destination.png" alt="Select destination folder."></p>
                                    </dd>

                                <dt>8. Finish</dt>
                                    <dd>
                                        <p>Before Outlook imports the file a <strong>final confirmation dialog</strong> allows you to make last-minute changes or cancel the action all-together.</p>
                                        <p>There is no need to change the "Map Custom Fields..." options as I have made sure that these are correct (see below).</p>
                                        <p>Click <strong>Finish</strong>.</p>
                                        <p><img src="../assets/img/how/import/outlook/08-confirmation.png" alt="Confirmation."></p>
                                        <p>The "Map Custom Fields..." options are already correct:</p>
                                        <p><img src="../assets/img/how/import/outlook/08-map-custom-fields.png" alt="Map custom fields."></p>
                                    </dd>

                                <dt>9. Import progress</dt>
                                    <dd>
                                        <p>Outlook will begin the import.</p>
                                        <p>This may take a few seconds or a few minutes, depending on the speed of your computer.</p>
                                        <p><img src="../assets/img/how/import/outlook/09-import-progress.png" alt="Import progress."></p>
                                    </dd>

                                <dt>10. Done</dt>
                                    <dd>
                                        <p>Switch to the calendar view...</p>
                                         <p><img src="../assets/img/how/import/outlook/10-calendar-view.png" alt="Calendar view."></p>
                                        <p>...to see the imported data in your Outlook calendar.</p>
                                         <p><img src="../assets/img/how/import/outlook/10-done.png" alt="Calendar with imported data."></p>
                                    </dd>
                            </dl>
                        </div>
                    </div>


<?php // =ig #2 IMPORT GOOGLE ?>
                    <div class="tab-pane fade" id="import-google">
                        <h2>Import into Google Calendar</h2>
                        <p class="lead">This option imports all the SEC Calendar and Lectionary dates into either an existing or a new Google Calendar.</p>
                        <div class="instructions">
                            <dl>
                                <dt>1. Download the .CSV file</dt>
                                    <dd>
                                        <p>Download the comma separated values (.csv) file (or the iCalendar feed file, if you prefer).</p>
                                        <p class="visible-lg">You'll find the download links on the <a href="<?php get_navigation('homepath'); ?>">homepage</a> or on the right.</p>
                                        <p class="visible-xs visible-sm visible-md">You'll find the <a href="#download-links">download links</a> below, or on the <a href="<?php get_navigation('homepath'); ?>">homepage</a>.</p>
                                        <p><a href="<?php get_navigation('homepath'); ?>"><img src="../assets/img/how/import/google/01-download.png" alt="Screenshot of homepage subscribe and download buttons"></a></p>
                                    </dd>

                                <dt>2. My calendars &gt; Create new calendar <span class="label label-warning">Optional</span></dt>
                                    <dd>
                                        <p class="alert alert-info">I strongly advise that you create a new calendar for your SEC calendar to keep your data separate (and colour-coded). If you want to import it into an existing calendar jump to step 4.</p>
                                        <p>Log in to your Google Calendar account.</p>
                                        <p>On the left-hand side, beneath the monthly calendar you'll see a list of your calendars.</p>
                                        <p>Click on the down-arrow to the right of "My calendars" and from the fly-out menu select "<strong>Create new calendar</strong>".</p>
                                        <p><img src="../assets/img/how/import/google/02-add-calendar.png" alt="My calendars... create new calendar."></p>

                                        <p>Enter details for your new calendar:</p>
                                        <ul>
                                            <li>Calendar name</li>
                                            <li>Description</li>
                                            <li>Location</li>
                                            <li>Time Zone</li>
                                            <li>Make this calendar public (if you want to share it with others)</li>
                                        </ul>
                                        <p>Click "Create Calendar" when you are done.</p>
                                        <p><img src="../assets/img/how/import/google/02-new-calendar.png" alt="Calendar details screen in Google Calendar."></p>
                                    </dd>

                                <dt>3. Other calendars &gt; Add &gt; Import calendar</dt>
                                    <dd>
                                        <p>Beneath your list of calendars is another list entitled "Other calendars".</p>
                                        <p>Click on the down-arrow to the right of "Other calendars".</p>
                                        <p>From the fly-out menu select "Import calendar".</p>
                                        <p><img src="../assets/img/how/import/google/03-other-calendars-import.png" alt="Other calendars fly-out menu."></p>
                                    </dd>

                                <dt>4. Import calendar</dt>
                                    <dd>
                                        <p>Choose the file that you downloaded in step 1 above.</p>
                                        <p>Select the calendar you'd like to import this information into.</p>
                                        <p>Click on Import.</p>
                                        <p><img src="../assets/img/how/import/google/04-import-calendar-dialog.png" alt="Import calendar dialog: select a file, select the calendar, click Import."></p>
                                    </dd>

                                <dt>5. Successfully imported</dt>
                                    <dd>
                                        <p>It may take a few minutes to import all the data, depending on your internet connection speed and the size of the .CSV file.</p>
                                        <p>A confirmation dialog will inform whether the import was successful or not.</p>
                                        <p><img src="../assets/img/how/import/google/05-imported-successfully.png" alt="Processed 364 events. Successfully imported 364 events."></p>
                                    </dd>

                                <dt>6. Calendar</dt>
                                    <dd>
                                        <p>You'll now see your new calendar is populated with the imported data.</p>
                                        <p><img src="../assets/img/how/import/google/06-calendar.png" alt="View of calendar with new SEC Calendar data."></p>
                                    </dd>

                                <dt>7. Calendar details</dt>
                                    <dd>
                                        <p>Click on an entry in the calendar to view more details:</p>
                                        <ul>
                                            <li>Scottish Episcopal Church calendar details</li>
                                            <li>Liturgical colour</li>
                                            <li>Daily Eucharist readings</li>
                                            <li>Daily Prayer readings</li>
                                        </ul>
                                        <p><img src="../assets/img/how/import/google/07-calendar-details.png" alt="Calendar event details."></p>
                                    </dd>
                            </dl>

                        </div>
                    </div>

<?php // =so #3 SUBSCRIBE OUTLOOK ?>
                    <div class="tab-pane fade" id="subscribe-outlook">
                        <h2>Subscribe with Microsoft Outlook</h2>
                        <p class="lead">This option allows you to subscribe to the iCalendar feed of the SEC Calendar and Lectionary using Microsoft Outlook 2010. This allows you to view the calendar data alongside your existing calendar(s).</p>
                        <div class="instructions">
                            <p class="alert alert-success"><span class="label label-success">Note</span> These instructions are specifically for <strong>Microsoft Outlook 2010</strong>; there may be slight variations when importing into Outlook 2003, 2007 or 2013.</p>


                            <h3>Watch how to do it</h3>
                            <p>This video shows you how to subscribe to an iCalendar feed in Outlook 2010. Note, however, that the website design shown on the video is out-of-date, but once you've downloaded the file the procedure is exactly as shown on the video.</p>
                            <div class="video-wrapper">
                                <iframe width="420" height="315" src="//www.youtube.com/embed/tYKC2AIGlpA" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <h3 class="instructions-heading">Step-by-step walkthrough</h3>
                            <dl>
                               <dt>1. Copy iCalendar feed address</dt>
                                    <dd>
                                        <p>Select whichever iCalendar feed you want. There are two on offer:</p>
                                            <ol type="i">
                                                <li><strong>Perpetual</strong>—this contains every calendar I've created and gets updated every year, meaning that you don't need to re-subscribe to a new calendar each year: just refresh this one and the new entries should be updated.</li>
                                                <li><strong>Yearly</strong>—for those who share calendars or don't want access to previous years' data, you can subscribe to the yearly feeds.</li>
                                            </ol>
                                        <p>Right-click the appropriate link and copy the link address.</p>
                                        <p><img src="../assets/img/how/subscribe/outlook/01-download.png" alt="Screenshot of homepage subscribe and download buttons."></p>
                                    </dd>

                                <dt>2. Add calendar... from internet</dt>
                                    <dd>
                                        <p>Select the Calendar view in Outlook 2010.</p>
                                        <p>Right-click "Other Calendars" and select Add Calendar > From Internet...</p>
                                        <p><img src="../assets/img/how/subscribe/outlook/02-add-calendar.png" alt="Add calendar fly-out menu showing From Internet option."></p>
                                    </dd>

                                <dt>3. Paste the link address</dt>
                                    <dd>
                                        <p>Paste the link that you copied in step 1, then click OK.</p>
                                        <p><img src="../assets/img/how/subscribe/outlook/03-paste-link.png" alt="New Internet Calendar Subscription dialog box."></p>
                                    </dd>

                                <dt>4. Add this Internet Calendar to Outlook and subscribe to updates</dt>
                                    <dd>
                                        <p>A dialog box will appear asking you to confirm whether you would like to "add this Internet Calendar to Outlook and subscribe to updates".</p>
                                        <p>Click Yes.</p>
                                        <p>The Advanced... option allows you to rename the calendar and its description from the defaults set by me.</p>
                                        <p><img src="../assets/img/how/subscribe/outlook/04-subscribe.png" alt="Add this Internet Calendar to Outlook and subscribe to updates?"></p>
                                    </dd>

                                <dt>5. Done</dt>
                                    <dd>
                                        <p>Switch to the Calendar view...</p>
                                        <p>You will see that the new calendar is now listed under "Other Calendars".</p>
                                        <p>Hover your mouse pointer over the calendar name to reveal the URL and when it was last updated.</p>
                                        <p>Information about how often the calendar is updated can be found under File > Options > Advanced > Send/Receive... > Edit > Internet Calendars.</p>
                                        <p><img src="../assets/img/how/subscribe/outlook/05-other-calendars.png" alt="Other calendars now shows your new calendar subscription."></p>
                                    </dd>

                            </dl>
                        </div>
                    </div>

<?php // =sg #4 SUBSCRIBE GOOGLE ?>
                    <div class="tab-pane fade" id="subscribe-google">
                        <h2>Subscribe with Google Calendar</h2>
                        <p class="lead">This option allows you to subscribe to the iCalendar feed of the SEC Calendar and Lectionary using Google Calendar. This allows you to view the calendar data alongside your existing calendar(s).</p>

                        <div class="instructions">
                            <dl>
                               <dt>1. Copy iCalendar feed address</dt>
                                    <dd>
                                        <p>Select whichever iCalendar feed you want. There are two on offer:</p>
                                            <ol type="i">
                                                <li><strong>Perpetual</strong>—this contains every calendar I've created and gets updated every year, meaning that you don't need to re-subscribe to a new calendar each year: just refresh this one and the new entries should be updated.</li>
                                                <li><strong>Yearly</strong>—for those who share calendars or don't want access to previous years' data, you can subscribe to the yearly feeds.</li>
                                            </ol>
                                        <p>Right-click the appropriate link and copy the link address.</p>
                                        <p><img src="../assets/img/how/subscribe/google/01-download.png" alt="Screenshot of homepage subscribe and download buttons."></p>
                                    </dd>

                                <dt>2. Other calendars &gt; Add calendar by URL</dt>
                                    <dd>
                                        <p>On the left-hand side of your calendar you will see a heading "Other calendars".</p>
                                        <p>Click on the down-arrow to the right of this heading.</p>
                                        <p>Select "Add by URL".</p>
                                        <p><img src="../assets/img/how/subscribe/google/02-other-calendars-add-by-url.png" alt="Other calendars fly-out menu shows option for Add by URL."></p>
                                    </dd>

                                <dt>3. Add by URL</dt>
                                    <dd>
                                        <p>In the dialog, paste the link to the iCalendar feed you selected in step 1.</p>
                                        <p>Decide whether to make your calendar publically accessible or not (useful if you are embedding your calendar on a website, for example).</p>
                                        <p>Click "Add Calendar" when finished.</p>
                                        <p><img src="../assets/img/how/subscribe/google/03-add-by-url-dialog.png" alt="Add by URL dialog. If you know the address to a calendar (in ical format), you can type the address here."></p>
                                    </dd>

                                <dt>4. Subscribed</dt>
                                    <dd>
                                        <p>You are now subscribed to this calendar.</p>
                                        <p><img src="../assets/img/how/subscribe/google/04-subscribed.png" alt="Newly subscribed calendar is now listed under Other calendars."></p>
                                    </dd>
                            </dl>
                        </div>

                    </div>

                </div><!-- /tab-content -->
            </div>
        </div>

        <div class="sidebar col-lg-4" id="download-links">
            <img class="img-circle" src="../assets/img/icons/icon-download.png" width="72" height="72" alt="Download to disk">
            <h2>Import</h2>
            <p>Download this <abbr title="comma separated values">CSV</abbr> file to manually import into your digital calendar.</p>
            <ul class="download-list">
                <li><a href="../download/sec-calendar-2014-2015.csv" title="Click to download, then import manually">SEC Calendar 2014-2015</a></li>
            </ul>

            <h2>Subscribe</h2>
            <p>Subscribe to either of these iCalendar files using your digital calendar.</p>
            <ul class="download-list">
                <li><a href="https://www.google.com/calendar/ical/0ueefkipediojf6cs94fss7g54%40group.calendar.google.com/public/basic.ics" title="Google iCalendar feed for 2014-2015">SEC Calendar 2014-2015</a></li>
                <li><a href="https://www.google.com/calendar/ical/0ueefkipediojf6cs94fss7g54%40group.calendar.google.com/public/basic.ics" title="Google iCalendar feed for 2005-2015">SEC Calendar (auto-update)</a> Updates each year, but does contain all data since 2005.</li>
            </ul>

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
<script src="../assets/js/vendor/bootstrap.min.js"></script>

</body>
</html>