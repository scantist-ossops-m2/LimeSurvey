<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect('localhost:3306','root','root');
$res = mysqli_select_db($db, 'foo');
var_dump($res);
