<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_forecast_index' => [[], ['_controller' => 'App\\Controller\\ForecastController::index'], [], [['text', '/forecast']], [], [], []],
    'app_forecast_new' => [[], ['_controller' => 'App\\Controller\\ForecastController::new'], [], [['text', '/forecast/new']], [], [], []],
    'app_forecast_show' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'app_forecast_edit' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'app_forecast_delete' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'app_location_index' => [[], ['_controller' => 'App\\Controller\\LocationController::index'], [], [['text', '/location']], [], [], []],
    'app_location_new' => [[], ['_controller' => 'App\\Controller\\LocationController::new'], [], [['text', '/location/new']], [], [], []],
    'app_location_show' => [['id'], ['_controller' => 'App\\Controller\\LocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'app_location_edit' => [['id'], ['_controller' => 'App\\Controller\\LocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'app_location_delete' => [['id'], ['_controller' => 'App\\Controller\\LocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_weather_api' => [[], ['_controller' => 'App\\Controller\\WeatherApiController::index'], [], [['text', '/api/v1/weather/']], [], [], []],
    'app_weather' => [['city'], ['_controller' => 'App\\Controller\\WeatherController::city'], ['city' => '[a-zA-Z\\-\\s]+'], [['variable', '/', '[a-zA-Z\\-\\s]+', 'city', true], ['text', '/weather']], [], [], []],
    'app_weather_city_country' => [['city', 'country'], ['_controller' => 'App\\Controller\\WeatherController::cityCountry'], ['city' => '[a-zA-Z\\-\\s]+', 'country' => '[A-Z]{2}'], [['variable', '/', '[A-Z]{2}', 'country', true], ['variable', '/', '[a-zA-Z\\-\\s]+', 'city', true], ['text', '/weather']], [], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], [], []],
    'App\Controller\ForecastController::index' => [[], ['_controller' => 'App\\Controller\\ForecastController::index'], [], [['text', '/forecast']], [], [], []],
    'App\Controller\ForecastController::new' => [[], ['_controller' => 'App\\Controller\\ForecastController::new'], [], [['text', '/forecast/new']], [], [], []],
    'App\Controller\ForecastController::show' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'App\Controller\ForecastController::edit' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'App\Controller\ForecastController::delete' => [['id'], ['_controller' => 'App\\Controller\\ForecastController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/forecast']], [], [], []],
    'App\Controller\LocationController::index' => [[], ['_controller' => 'App\\Controller\\LocationController::index'], [], [['text', '/location']], [], [], []],
    'App\Controller\LocationController::new' => [[], ['_controller' => 'App\\Controller\\LocationController::new'], [], [['text', '/location/new']], [], [], []],
    'App\Controller\LocationController::show' => [['id'], ['_controller' => 'App\\Controller\\LocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'App\Controller\LocationController::edit' => [['id'], ['_controller' => 'App\\Controller\\LocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'App\Controller\LocationController::delete' => [['id'], ['_controller' => 'App\\Controller\\LocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'App\Controller\LoginController::index' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'App\Controller\WeatherApiController::index' => [[], ['_controller' => 'App\\Controller\\WeatherApiController::index'], [], [['text', '/api/v1/weather/']], [], [], []],
    'App\Controller\WeatherController::city' => [['city'], ['_controller' => 'App\\Controller\\WeatherController::city'], ['city' => '[a-zA-Z\\-\\s]+'], [['variable', '/', '[a-zA-Z\\-\\s]+', 'city', true], ['text', '/weather']], [], [], []],
    'App\Controller\WeatherController::cityCountry' => [['city', 'country'], ['_controller' => 'App\\Controller\\WeatherController::cityCountry'], ['city' => '[a-zA-Z\\-\\s]+', 'country' => '[A-Z]{2}'], [['variable', '/', '[A-Z]{2}', 'country', true], ['variable', '/', '[a-zA-Z\\-\\s]+', 'city', true], ['text', '/weather']], [], [], []],
];
