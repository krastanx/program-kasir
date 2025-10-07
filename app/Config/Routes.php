<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
// Rute untuk halaman register
$routes->get('register', 'Home::register');
