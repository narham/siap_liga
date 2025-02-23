<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// Auth Routes
$routes->get('/', 'Auth\AuthController::index');
$routes->get('/login', 'Auth\AuthController::login');
$routes->get('/reset', 'Auth\AuthController::reset');

// admin routes
$routes->get('/admin/dashboard', 'Admin\AdminController::index');

$routes->get('/admin/users', 'Admin\Users::index');

// Klub Routes
$routes->get('/klub/dashboard', 'Klub\KlubController::index');

// Pemain