<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//main
$routes->get('/jukir','Jukir::index');

//data
$routes->get('/jukir/data','Jukir::data');
