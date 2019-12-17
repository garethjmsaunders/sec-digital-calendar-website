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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/cover.css" rel="stylesheet">
        <?php
                error_reporting(0);
                include('php/csv-lookup.php');
                include('php/functions.php');
        ?>
    </head>
    <body class="text-center banner damask damask-<?php echo("$todayColor"); ?>">
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
                <h1 class="cover-heading"><?php echo($todayFeast); ?></h1>
                <p class="lead">Additional information (still to add to CSV)</p>
                <p>Liturigical colour: <?php echo("$todayColor"); ?></p>
                <hr>
                <p class="xlead">Revised Common Lectionary readings: Year A<br>Daily Eucharist and Daily Prayer readings: Year 2</p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p class="lead"><a href="#" class="btn btn-secondary">Now available: 2019–2020 calendar</a></p>
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