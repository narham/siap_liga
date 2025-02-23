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
// Routes users dalam admin
$routes->get('/admin/users', 'Admin\Users::index');
$routes->get('/admin/users/add', 'Admin\Users::add');
$routes->get('/admin/users/edit', 'Admin\Users::edit');
$routes->get('/admin/users/hapus', 'Admin\Users::hapus');
$routes->get('/admin/users/simpan', 'Admin\Users::simpan');
$routes->get('/admin/users/update', 'Admin\Users::update');

// Klub Routes
$routes->get('/klub/dashboard', 'Klub\KlubController::index');

// Pemain