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
    <title>Wiktor Eriksson Web</title>
    <meta name="description" content="Hello! I'm Wiktor and I am <?php echoAge() ?> years old. Check out my website!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css.php">

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

<!-- Add your site or application content here -->
<header>
    <h1>Wiktor Eriksson</h1>
    <h4>Java FTW!</h4>
</header>
<div style="width:100%;height:0;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/3oriNXgmyShWPjuaFa" width="100%" height="100%" style="position:absolute;border: 0;" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/vintage-halloween-creepy-3oriNXgmyShWPjuaFa">via GIPHY</a></p>
<div class="dpart first">
    <h2>Wiktor Eriksson - About Me And This Web Server</h2>
    <p>Hello! I am Wiktor Eriksson and I am <?php echoAge() ?> years old. I'm currently working on several Java, IoT, and open source projects.</p>

    <p>This website is running HTML5, JS (ECMA 5) and CSS3 on the front-end. The back-end is run by PHP 7.1 and MariaDB (MySQL).</p>

    <p>This web server is run on a <a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/">Raspberry Pi 3</a> using <a href="https://httpd.apache.org/">Apache 2</a> as main process to handle user connections from users. I've also included Google Analytics to track users on this website.</p>

    <p>I had an old, now abandoned, web page in Swedish, visit it <a href="//wiktoreriksson.se/old_web/index.php">here.</a></p>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-gw-3+1f-3d+2z"
     data-ad-client="ca-pub-9278648729512096"
     data-ad-slot="5853340872">
</ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="dpart second">
    <h2>What I Do</h2>

    <p>I like to experiment with electronics. I have built an alarm clock with an Arduino!</p>

    <p>I usually have a coding project that I work on.</p>
</div>
<!-- Start of CuterCounter Code -->
<div class="dpart">
<a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hits.php?id=gvpaqfk&nd=7&style=26" style="border: 0" alt="hit counter"></a>
<!-- End of CuterCounter Code -->
<p>unique visitors have been on this site.</p>
</div>
</body>

</html>
