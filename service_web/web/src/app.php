<?php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('demo-a', new Routing\Route('/demo-a'));
$routes->add('demo-b', new Routing\Route('/demo-b'));
$routes->add('save-a', new Routing\Route('/save-a'));
$routes->add('save-b', new Routing\Route('/save-b'));

return $routes;
