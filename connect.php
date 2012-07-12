<?php

$host = "localhost:3306";
$user = "mhealth";
$password = "mhealth2012";
$database = "mhealth";

$link = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db($database,$link) or die(mysql_error());
?>