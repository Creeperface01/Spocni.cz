<?php

$container = require __DIR__ . '/../app/bootstrap.php';

$configurator->setDebugMode(true);
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');

$container->getByType(Nette\Application\Application::class)
    ->run();
