<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index', ['filter' => 'auth']);



$routes->get('/login', 'Auth::login');
$routes->post('/loginProcess', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');



/*
$route['default_controller'] = 'login';

$route['new_request'] = 'dashboard/new_request/';
$route['all_request'] = 'dashboard/all_request/';
$route['print'] = 'dashboard/print/';
$route['pdf'] = 'dashboard/pdf/';

$route['users'] = 'Users/home/';
$route['userprofile'] = 'UserProfile/home/';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
*/