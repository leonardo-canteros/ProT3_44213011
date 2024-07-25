<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

// Rutas para UsuarioController
$routes->get('usuarios', 'UsuarioController::index');
$routes->get('usuarios/view/(:num)', 'UsuarioController::view/$1');
$routes->get('usuarios/create', 'UsuarioController::create');
$routes->post('usuarios/create', 'UsuarioController::create');
$routes->get('usuarios/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('usuarios/edit/(:num)', 'UsuarioController::edit/$1');
$routes->get('usuarios/delete/(:num)', 'UsuarioController::delete/$1');







