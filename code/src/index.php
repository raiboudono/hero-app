<?php

declare(strict_types=1);

use App\Controller\IndexController;


require  __DIR__ . "/../bootstrap/bootstrap.php";

try {
    $driver_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $dbh = new PDO($_ENV['DSN'], $_ENV['USERNAME'], $_ENV['PASSWORD'], $driver_options);
    $sql = "select * from test_tbl";
    $stmt = $dbh->query($sql);
    $row = $stmt->fetchAll();
    // print_r($row);
} catch (PDOException $e) {
    exit($e->getMessage());
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Document</title>
</head>

<body>
    hello
    <script type="module" src="./asset/js/index.js"></script>
</body>

</html>