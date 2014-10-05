<?php
$server = 'localhost';
$user = 'serg';
$password = 'fenixe86';

$link = mysql_connect($server, $user, $password)
or die ("Не удалось подключиться к базе данных");

mysql_select_db('contact_report') or die ("Не удалось подключиться к базе данных");

$q = "SELECT * FROM custom_reviews";

$res = mysql_query($q) or die ("Запрос не выполнен");


while($row = mysql_fetch_array($res))
{
    $id = $row['id'];
    $msg = $row['custsubject'];

    echo '<p>'. $id .' '. $msg .'</p>';

}

mysql_free_result($res);

mysql_close($link);

//header("Location: ../guest_book.php");
//exit;