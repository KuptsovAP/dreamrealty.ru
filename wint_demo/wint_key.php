<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$connection = new mysqli($DBHost,$DBLogin,$DBPassword,$DBName);
$query = "select * from b_option where `NAME`='admin_passwordh' ";
$result = $connection->query($query);
$row = mysqli_fetch_array($result);

print "<span>Лицензионный ключ:</span> ".$LICENSE_KEY
    . "<br />"
    . "<span>Константа лицензии:</span> ".TEMPORARY_CACHE
    . "<br />"
    . "<span>Ключ БД:</span> ".$row["VALUE"];