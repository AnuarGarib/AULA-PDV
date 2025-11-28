<?php 

require_once '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable('../');
$dotenv->load();
require_once '../src/routes/urls.php';

use App\core\Router;

Router::dispatch();