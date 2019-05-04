<?php
$entityBody = file_get_contents('php://input');
$json_a = json_decode($entityBody, true);
if (isset($json_a["hook"])) {
    exec("cd /var/www/html;sudo git pull");
}