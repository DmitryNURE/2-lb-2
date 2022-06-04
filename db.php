<?php
require_once __DIR__ ."/vendor/autoload.php";
$db1 = (new MongoDB\Client)->db->teams;
$db2 = (new MongoDB\Client)->db->games;
?>