<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Article;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', function () {
    return redirect()->to('/');
});

$routes->group('article', function ($routes) {
    $routes->get('/', [Article::class, 'index']);
    $routes->get('detail/(:num)', [Article::class, 'detail/$1']);
    $routes->get('detail/(:segment)', [Article::class, 'detailBySlug/$1'], ['as' => 'articleDetail']);
    $routes->get('create', [Article::class, 'create']);
    $routes->post('create', [Article::class, 'store']);
    $routes->get('edit/(:num)', [Article::class, 'edit/$1']);
    $routes->put('update', [Article::class, 'update']);
    $routes->delete('delete/(:num)', [Article::class, 'delete/$1']);
});
