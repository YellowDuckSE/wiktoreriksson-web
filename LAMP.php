<?php /** @noinspection ALL */
$conn = new mysqli("localhost","root","MYSQL_ROOT_PASSWD","webdb") or die("Failed to connect to MariaDB");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO CommentsLAMP (poster, text) VALUES (?, ?)");

if (isset($_POST["commentsubmit"])) {
    $stmt->bind_param("ss", $_POST["name"], $_POST["text"]);
    $stmt->execute();
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Wiktor Eriksson - LAMP</title>
    <meta name="description" content="Learn how to set up LAMP (Linux, Apache, MySQL, and PHP web server) on a Raspberry Pi!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138568396-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-138568396-1');
    </script>
    <style>
    </style>
</head>

<body>
<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script src="js/vendor/jquery-3.3.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<?php
$ts = $_COOKIE["ts"];
if (!isset($ts)) {
    echo "<script>document.location.reload(true);</script>";
}
if (strpos($ts,'-') === false) {
    $ts = "+".$ts;
}
if (strlen($ts) < 3) {
    $ts = substr($ts,0,1)."0".substr($ts,1);
}
if (strlen($ts) < 4) {
    $ts = $ts."00";
}
?>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- Add your site or application content here -->
<header>
    <h1>Wiktor Eriksson</h1>
    <h3>Install <abbr title="Linux, Apache, MySQL/MariaDB, PHP">LAMP</abbr> on a Raspberry Pi</h3>
</header>

<div class="dpart third">
    <p>Hello there! Do you wanna set up a web server like me, on a Raspberry Pi? If you want, here is how!</p>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-format="fluid"
         data-ad-layout-key="-gw-3+1f-3d+2z"
         data-ad-client="ca-pub-9278648729512096"
         data-ad-slot="5853340872">
    </ins>
    <div class="dpart first">
        <h2>1. Intro</h2>
        <table>
            <caption>You'll need this:</caption>
            <thead><tr><th>Item</th><th>Purpose</th><th>Image</th></tr></thead>
            <tr><td>Raspberry Pi</td><td>Serves as the server itself</td><td><img src="img/rpi.jpg" alt="Raspberry Pi 3 Picture"></td></tr>
            <tr><td>SD or microSD (depending on which Raspberry Pi you have)</td><td>The storage solution</td><td><img src="img/sd.jpg" alt=""></td></tr>
            <tr><td>Micro USB charger</td><td>Serves as the power source</td><td><img src="img/charger.jpg" alt="Basic Charger" style="height: 250px;width: 250px>"></td></tr>
            <tr><td>HDMI (or Composite if the Raspberry Pi supports it) cable + screen</td><td>Display video</td><td><img src="img/hdmiscreen.jpg" alt="Monitor"><img src="img/hdmi.jpg" alt="HDMI Cable"></td></tr>
            <tr><td>Network Cable</td><td>Networking. You can use the Wi-Fi of the Raspberry Pi 3 instead.</td><td><img src="img/ethernet.jpg" alt="Ethernet Cable"</td></tr>
            <tfoot><tr><td><b>Item</b></td><td><b>Purpose</b></td><td><b>Image</b></td></tr></tfoot>
        </table>
    </div>
    <div class="dpart second">
        <h2>2. Install NOOBS on SD</h2>
        <p><em>Maybe you already installed Raspbian. If so, skip to <a href="#part4">Part 4.</a></em></p>
        <p>Now it's time to set up your Raspberry Pi. <a href="//downloads.raspberrypi.org/NOOBS_latest">Click here to get the latest NOOBS.</a></p>
        <p>When you have downloaded NOOBS, I want you to download a program that can flash .zip to a disk. I'd recommend using <a href="//www.balena.io/etcher/">balenaEtcher</a> for this job.</p>
        <p>Start your .zip-flasher and select image. Now you want to insert your SD card, either by external or internal reader. Pick the new drive in the application. Press the flash button.</p>
        <p>When you´ve done that, insert the (micro)SD card in your Raspberry. Connect HDMI/Composite, network cable, and, at last, the charger.</p>
    </div>
    <div class="dpart first">
        <h2>3. Install "Raspbian"</h2>
        <p>A menu should show up. In the list, pick <b>Raspbian (recommended)</b> and follow instructions. I´ve been unable to test NOOBS, so my instructions can be a little bit unclear.</p>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-format="fluid"
             data-ad-layout-key="-gw-3+1f-3d+2z"
             data-ad-client="ca-pub-9278648729512096"
             data-ad-slot="5853340872">
        </ins>
        <p>When Raspbian boots, open Terminal and type:</p>
        <blockquote><code>sudo raspi-config</code></blockquote>
        <p>and press Enter. Select SSH and pick Enable/Yes. Exit from the menu.</p>
    </div>
    <div class="dpart second" id="part4">
        <h2>4. Install web server</h2>
        <p>In Terminal, type:</p><blockquote><code>sudo apt install apache2 mysql-server mysql-client php php-mysql libapache2-mod-php -y</code></blockquote>
        <p>This will install Apache Web Server 2, MariaDB/MySQL and PHP. Now type:</p>
        <blockquote><code>sudo /usr/bin/mysql_secure_installation</code></blockquote>
        <p>and follow the instructions. To finally enable the server, type:</p>
        <blockquote><code>sudo systemctl enable apache2.service<br>sudo systemctl enable mysql.service</code></blockquote>
        <p>You're done there! <code>/var/www/html/</code> is the root of your web server. Add your web pages there!</p>
    </div>
    <div class="dpart first">
        <h2>4. Port Forwarding</h2>
        <p>Follow <a href="//portforward.com/router.htm">this guide</a> to port forward. You will forward port <code>80</code>. Get your routers public IP address (for example mine is 78.108.50.45, DNS wiktoreriksson.se).</p>
        <p>Go to <code>http://YOUR_IP_ADDR/</code> in your browser. This will, hopefully, return your webpage! Now you can get a domain and register the IP to it!</p>
    </div>
    <p>Good luck with designing your webpage!</p>
</div>
<div class="comments-section second">
    <h2>Comments</h2>
    <form action="/LAMP.php" method="post" id="comment_form">
        <p>Leave a comment</p>
        <label for="name">Your name</label><input type="text" id="name" name="name" title="Name">
        <br><label for="text">Comment</label><textarea id="text" name="text" title="Text"></textarea>
        <input type="submit" name="commentsubmit" value="Submit comment">
    </form>
    <div class="comments-wrapper">
        <h4>Posted Comments</h4>
        <?php
        $sql = "SELECT * FROM CommentsLAMP";
        $result = $conn->query($sql);
        echo "<p class='comments_count'>".$result->num_rows." comments</p>";
        echo "<hr>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $date = new DateTime($row["time"].' +00');
                $date->setTimezone(new DateTimeZone($ts));
                echo "<div class=\"comment clearfix\">";
                echo "<div class=\"comment-details\">";
                echo "<span class=\"comment-name\">".$row["poster"]."</span>";
                echo "<span class=\"comment-date\">".$date->format('Y-m-d H:i:s e')."</span>";
                echo "<p>".$row["text"]."</p>";
                echo "</div></div>";
            }
        }
        ?>
    </div>
</div>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>

</html>
