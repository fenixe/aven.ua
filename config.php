<?php
$mysql_hostname = "localhost";
$mysql_user = "serg";
$mysql_password = "fenixe86";
$mysql_database = "contact_report";
$per_page = 4;

$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
