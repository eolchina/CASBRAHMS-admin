<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    
    $router->resources([


    	'taxonomyterms' => TaxonomytermController::class,

    	'users' => UserController::class,

    	'china/province'        => China\ProvinceController::class,
        'china/city'            => China\CityController::class,
        'china/district'        => China\DistrictController::class,


    ]);

        $router->get('china/cascading-select', 'China\ChinaController@cascading');
        $router->get('api/china/city', 'China\ChinaController@city');
        $router->get('api/china/district', 'China\ChinaController@district');

});
