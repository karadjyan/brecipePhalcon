<?php

use Multiple\Frontend\Module as FrontendModule;
use Multiple\Backend\Module as BackendModule;

/**
 * Register application modules
 */
$application->registerModules(
    [
        "frontend" => [
            "className" => FrontendModule::class,
            "path"      => __DIR__ . "/../apps/frontend/Module.php",
        ],
        "backend" => [
            "className" => BackendModule::class,
            "path"      => __DIR__ . "/../apps/backend/Module.php",
        ],

    ]
);
