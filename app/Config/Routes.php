<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//home
$routes->get('/', 'Home::index');

//anggota
$routes->get('/anggota', 'Anggota::index');
