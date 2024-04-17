<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');

$routes->get('register','Home::register');
$routes->post('register', 'Home::register');
$routes->post('lostpassword', 'Home::lostpassword');
$routes->post('otpvalidate', 'Home::otpvalidate');
$routes->post('newpassword', 'Home::newpassword');

$routes->get('logout','Home::logout');

$routes->get('admin_dashboard','Home::admin_dashboard');

$routes->get('tax','Home::tax');
$routes->post('tax','Home::tax');
$routes->get('edit_tax/(:any)','Home::tax/$1');
$routes->post('edit_tax/(:any)','Home::tax/$1');

$routes->get('vendor_type','Home::vendor_type');
$routes->post('vendor_type','Home::vendor_type');
$routes->get('edit_vendor_type/(:any)','Home::vendor_type/$1');
$routes->post('edit_vendor_type/(:any)','Home::vendor_type/$1');

$routes->get('delete/(:any)/(:any)','Home::delete/$1');
// $routes->post('delete','Home::delete');
$routes->get('add_menu','Home::add_menu');
$routes->post('add_menu','Home::add_menu');
$routes->get('add_menu/(:any)','Home::add_menu/$1');
$routes->post('add_menu/(:any)','Home::add_menu/$1');


$routes->get('ground','Home::Ground');
$routes->post('ground', 'AcademyController::addAcademy');

$routes->get('add_booking','Home::Booking');

