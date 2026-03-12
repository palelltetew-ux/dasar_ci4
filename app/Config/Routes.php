<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/tambah', 'Barang::tambah');
$routes->post('/barang/add', 'Barang::add');

$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/update', 'Barang::update');

$routes->get('/barang/hapus/(:num)', 'Barang::hapus/$1');