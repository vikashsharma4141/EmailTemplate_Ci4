<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Mailer::index');
$routes->get('/welcome_email', 'Mailer::welcome_email');
$routes->get('/send-email', 'Mailer::sendEmail');
$routes->get('/', 'Mailer::index'); 
$routes->post('/mailer/sendOtp', 'Mailer::sendOtp');

$routes->get('otp_verify', 'Mailer::verifyOtp');  
$routes->match(['get', 'post'], 'otp_verify', 'Mailer::verifyOtp');


$routes->get('dashboard', 'Mailer::dashboard');
$routes->post('logout', 'Mailer::logout');




