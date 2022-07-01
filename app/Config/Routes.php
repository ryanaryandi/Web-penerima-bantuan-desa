<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/admin', 'Pages::beranda');

$routes->get('/datapenduduk', 'Penduduk::datapenduduk');

$routes->get('/penduduk/print', 'Penduduk::print');

$routes->get('/penduduk/detailprint/(:num)', 'Penduduk::detailprint/$1');

$routes->get('/penerimabantuan', 'Penerimabantuan::penerimabantuan');

$routes->get('/tempatdata', 'Tempatdata::tempatdata');

$routes->get('/penduduk/edit/(:segment)', 'Penduduk::edit/$1');

$routes->get('/penduduk/create', 'Penduduk::create');

$routes->delete('/penduduk/(:num)', 'Penduduk::delete/$1');

$routes->get('/penduduk/detail/(:any)', 'Penduduk::detail/$1');

$routes->get('/penduduk/(:any)', 'Penduduk::detail/$1');

$routes->get('/pengumuman', 'Pengumuman::pengumuman');

$routes->get('/pengumumanwarga', 'Pengumuman::pengumumanwarga');


$routes->get('/', 'PagesUser::berandaUser');
$routes->get('/cekpenerima', 'Cekpenerima::cekpenerima');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
