<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Article;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/article', [Article::class, 'index']);
$routes->get('/article/detail/(:num)', [Article::class, 'detail/$1']);
$routes->get('/article/detail/(:segment)', [Article::class, 'detailBySlug/$1']);
$routes->get('/article/create', [Article::class, 'create']);
$routes->post('/article/create', [Article::class, 'store']);
$routes->get('/article/edit/(:num)', [Article::class, 'edit/$1']);
$routes->put('/article/update', [Article::class, 'update']);
$routes->delete('/article/delete/(:num)', [Article::class, 'delete/$1']);
