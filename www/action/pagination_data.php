<?php

include_once('../../config.php');



if ($_GET) {
    $page = $_GET['page'];
}
//get table contents
$start = ($page - 1) * $per_page;
$sql = "select * from custom_reviews order by id limit $start,$per_page";
$rsd = mysql_query($sql);
?>

<?php
//Print the contents

while ($row = mysql_fetch_array($rsd)) {

    $id = $row['id'];
    $msg = $row['custsubject'];
    $name = $row['custname'];
    $company = $row['custcompany'];

    ?>

    <div style="width : 600px">

        <ul>
            <li style="border-top: 2px #00B050 solid; margin-bottom: -2px; padding: 5px">
                <div style="float: left">
                    <p style="font-style: italic; font-size: 16px"> <?php echo $msg; ?> </p>

                    <p style="color: #AAAAAA; font-size: 14px; font-style: italic">Имя : <?php echo $name; ?></p>

                    <p style="color: #AAAAAA; font-size: 14px; font-style: italic">Компания : <?php echo $company; ?></p>
                </div>
                <div style="clear: both;"></div>
            </li>
        </ul>
    </div>
<?php
} //while
?>


