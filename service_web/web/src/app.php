<?php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('demo', new Routing\Route('/demo'));
$routes->add('save', new Routing\Route('/save'));

return $routes;
