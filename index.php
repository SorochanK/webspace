<?php

include "php/ini.php";

try {
    $dbh = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASS);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$sth = $dbh->prepare("SELECT  * FROM ip_addr WHERE ip_addr='" . $_SERVER['REMOTE_ADDR'] . "'");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);

if ($result) $From = new DateTime($result['enter_time'] . ' +2 days');
else {
    $From = new DateTime(' +2 days');

    $dbh->query("INSERT INTO `ip_addr`(`ip_addr`, `enter_time`)
 VALUES ('" . $_SERVER['REMOTE_ADDR'] . "',CURRENT_TIMESTAMP ())");
}

$Now = new DateTime();


/*if ($FromTimer >= $Now) {
    $showTimer = true;
    $diff = $FromTimer->diff($Now);

    $timer_day = '0' . $diff->d;
    $timer_hours = (int)$diff->h < 10 ? '0' . $diff->h : $diff->h;
    $timer_minutes = (int)$diff->i < 10 ? '0' . $diff->i : $diff->i;
    $timer_seconds = (int)$diff->s < 10 ? '0' . $diff->s : $diff->s;

}*/


include "template.php";








