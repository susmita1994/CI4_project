<?php

$routes->group('mypanel', ['namespace' => '\Modules\Mypanel\Controllers'], function ($routes) {
    $routes->get('/', 'MypanelController::index');
    $routes->get('test', 'MypanelController::test');

});

?>