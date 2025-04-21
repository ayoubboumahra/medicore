<?php

session_start();

require "../vendor/autoload.php";

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;


$collector = new RouteCollector();

// Define routes
require "../routes/web.php";

// Dispatch route
$dispatcher = new Dispatcher($collector->getData());

// Remove query string (e.g. for ?foo=bar)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

try {
    echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $uri);
} catch (Exception $e) {
    $_SESSION["error"] = "The page is not found.";
    header("Location: /");
}
