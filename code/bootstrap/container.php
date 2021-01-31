<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use function DI\factory;

/**
 * $containerBuilder->addDefinitions('bootstrap/container.php');
 * 上記のコンテナビルダで定義されたインジェクションの定義一覧
 */

return [
    'SampleService' => factory(function (ContainerInterface $c) {
        return new App\Service\SampleB();
    }),
    'IndexController' => factory(function (ContainerInterface $c) {
        return new App\Controller\IndexController($c->get('SampleService'));
    }),
];
