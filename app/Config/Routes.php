<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('detailProduct/(:any)', 'Product::detailProduct/$1');

// Register
$routes->get('register', 'Auth::register');
$routes->post('register/process', 'Auth::registerProcess');

// Login
$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::loginProcess');

// Logout
$routes->get('logout', 'Auth::logout');

// Dashboard User
$routes->get('dashboard/usr', 'Dashboard_C::DashboardUser');

// Keranjang Belanja
$routes->get('cart', 'Shoppingcart::viewCart');
$routes->post('cart/add', 'ShoppingCart::addToCart');
$routes->post('cart/delete(:any)', 'ShoppingCart::deleteCart/$1');


// Dashboard Admin
$routes->get('dashboard/adm', 'Dashboard_C::DashboardAdmin');

// Users
$routes->get('user', 'User::index');
$routes->get('user/update/(:any)', 'User::editUser/$1');
$routes->post('user/update/save', 'User::saveUpdate');
$routes->get('user/refresh/(:any)', 'User::refreshUser/$1');
$routes->post('user/delete(:any)', 'User::deleteUser/$1');

// Product
$routes->get('product', 'Product::index');
$routes->post('product/create', 'Product::createProduct');
$routes->get('product/update(:any)', 'Product::detailProduct/$1');
$routes->post('product/update/save', 'Product::saveUpdateProduct');
$routes->get('product/refresh(:any)', 'Product::refreshProduct/$1');
$routes->post('product/delete(:any)', 'Product::deleteProduct/$1');
