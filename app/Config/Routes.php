<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//main
$routes->get('/jukir','Jukir::index');
$routes->get('/dishub_anggota','dishub_anggota::index');
$routes->resource('transaksi');

//data
$routes->post('/jukir/data','Jukir::data');
$routes->post('/dishub_anggota/data','dishub_anggota::data');
$routes->post('/transaksi/data','transaksi::data');