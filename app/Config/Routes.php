<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/articles', 'Articles::index');
$routes->get('/articles/create', 'Articles::create');
$routes->post('/articles/store', 'Articles::store');
$routes->get('/articles/show/(:num)', 'Articles::show/$1');
