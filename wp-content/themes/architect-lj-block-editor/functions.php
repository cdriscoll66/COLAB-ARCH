<?php

use App\Http\Lumberjack;

// Call vendor autoload from composer
require_once('vendor/autoload.php');

// Create the Application Container
$app = require_once('bootstrap/app.php');

// Bootstrap Lumberjack from the Container
$lumberjack = $app->make(Lumberjack::class);
$lumberjack->bootstrap();

// Import our routes file
require_once('routes.php');

// Set global params in the Timber context
add_filter('timber_context', [$lumberjack, 'addToContext']);

