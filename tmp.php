<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect('localhost:3306','root','root');
$res = mysqli_select_db($db, 'foo');
var_dump($res);

try {
    $dsn = "mysql:host=localhost;port=3306;;";
    $user = "root";
    $password = "root";
    $db = new PDO($dsn, $user, $password);
    echo "fine 1\n";
} catch (Throwable $ex) {
    var_dump($ex->getMessage());
}

try {
    $dsn = "mysql:host=localhost;port=3306;foo;";
    $user = "root";
    $password = "root";
    $db = new PDO($dsn, $user, $password);
    echo "fine 2\n";
} catch (Throwable $ex) {
    var_dump($ex->getMessage());
}

try {

    $dsn = "mysql:host=localhost;port=3306;foo;";
    $user = "root";
    $password = "root";
    $db = new PDO($dsn, $user, $password);
    echo "fine 3\n";
} catch (Throwable $ex) {
    var_dump($ex->getMessage());
}
