<?php

declare(strict_types=1);


require __DIR__ . "/../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../../");
$dotenv->load();

// DI
$containerBuilder = new DI\ContainerBuilder();
$containerBuilder->addDefinitions('bootstrap/container.php');
$container = $containerBuilder->build();
