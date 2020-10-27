<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
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
$routes->get('/', 'Pages::index');
$routes->post('/postregister', 'Pages::postregister');
$routes->post('/postlogin', 'Pages::postlogin');
$routes->get('/register', 'Pages::register');
$routes->get('/login', 'Pages::login');
$routes->get('/note', 'Pages::note');
$routes->get('/cat', 'Pages::cat');
$routes->get('/printlist', 'Pages::printlist');
// $routes->get('/printcat', 'Pages::printcat');
$routes->get('/catlist', 'Pages::catlist');
$routes->get('/catprint', 'Pages::catprint');
$routes->get('/generatecombo', 'Pages::generatecombo');
$routes->get('/print', 'Pages::print');
$routes->get('/updatenote', 'Pages::updatenote');
$routes->get('/updatecat', 'Pages::updatecat');
$routes->post('/postnote', 'Pages::postnote');
$routes->post('/cat', 'Pages::postcat');
$routes->post('/postnoteupdate', 'Pages::postnoteupdate');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
