<?php

$container = require __DIR__ . '/../app/bootstrap.php';

\Tracy\Debugger::enable();

$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
    ->addDirectory(__DIR__)
    ->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
//$configurator->addConfig(__DIR__ . '/config/config.local.neon');
$configurator->setDebugMode(TRUE);

$container->getByType(Nette\Application\Application::class)
    ->run();
