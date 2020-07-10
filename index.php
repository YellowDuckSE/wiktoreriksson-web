<?php
function echoAge() {
$then_ts = strtotime("2008-09-30");
$then_year = date('Y', $then_ts);
$age = date('Y') - $then_year;
if(strtotime('+' . $age . ' years', $then_ts) > time()) $age--;
echo $age;
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>WE IT</title>
    <meta name="description" content="Hello! I'm Wiktor and I am <?php echoAge() ?> years old. Check out my website!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <script data-ad-client="ca-pub-9278648729512096" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="theme-color" content="#fafafa">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138568396-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-138568396-1');
    </script>
</head>

<body>
<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script src="js/vendor/jquery-3.3.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="en-US"  style="display: none">
    <header>
        <h1>WE IT</h1>
        <h3>We do IT!</h3>
    </header>
    <div class="dpart first">
        <h2>Wiktor Eriksson - About me</h2>
        <p>Hello! I am Wiktor Eriksson and I am <?php echoAge() ?> years old. I like to code and play games.</p>

    </div>
    <div class="dpart second">
        <h2>What we do</h2>

        <p>We offer two products, Website and Programming Course for Kids.</p>
        <p>In the Website package, we will create a website for you. A Raspberry Pi server will be included.
            In the programming course, your kids can learn how to code themselves. It is only offered in Swedish.</p>
        <p>For more information, see <a href="/products.php">the products page</a>.</p>

    </div>

    <div class="dpart third">
        <h2>Links</h2>

        <ul>
            <li><a href="/products.php">Products</a></li>
            <li><a href="/LAMP.php">A guide I created for setting up a web server on a Raspberry Pi microcomputer.</a></li>
        </ul>
    </div>
</div>
<div class="sv-SE" style="display: none">
    <header>
        <h1>WE IT</h1>
        <h3>We do IT!</h3>
    </header>
    <div class="dpart first">
        <h2>Wiktor Eriksson - Om mig</h2>
        <p>Hej! Jag är Wiktor Eriksson och jag är <?php echoAge() ?> år gammal. Jag gillar att koda och spela dataspel.</p>

    </div>
    <div class="dpart second">
        <h2>Vad vi gör</h2>

        <p>Vi på WE IT har två produkter, Webbsida och Programmeringskurs för barn.</p>
        <p>I webbsidepaketet skapar vi en webbsida för dig. En Raspberry Pi-server ingår.
            I programmeringskursen kan dina barn lära sig att koda själva!</p>
        <p>För mer information, se <a href="/products.php">produktsidan</a>.</p>

    </div>

    <div class="dpart third">
        <h2>Länkar</h2>

        <ul>
            <li><a href="/products.php">Produkter</a></li>
            <li><a href="/LAMP.php">En guide för att sätta upp en webbserver på en Raspberry Pi-dator.</a></li>

        </ul>
    </div>
</div>
</body>

</html>
