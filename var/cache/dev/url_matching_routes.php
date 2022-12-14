<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'moodle', '_controller' => 'App\\Controller\\MoodleController::index'], null, null, null, false, false, null]],
        '/createCours' => [[['_route' => 'createCours', '_controller' => 'App\\Controller\\MoodleController::createCours'], null, null, null, false, false, null]],
        '/mesCours' => [[['_route' => 'Cours', '_controller' => 'App\\Controller\\MoodleController::mesCours'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::logIn'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logOut'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SecurityController::signUp'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/cours/([^/]++)/(?'
                    .'|createExo(*:197)'
                    .'|mesExos(*:212)'
                    .'|([^/]++)/(?'
                        .'|exercice(*:240)'
                        .'|modifyExo(*:257)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'createExo', '_controller' => 'App\\Controller\\MoodleController::createExo'], ['id'], null, null, false, false, null]],
        212 => [[['_route' => 'Exos', '_controller' => 'App\\Controller\\MoodleController::mesExos'], ['id'], null, null, false, false, null]],
        240 => [[['_route' => 'Exercice', '_controller' => 'App\\Controller\\MoodleController::exercice'], ['idCours', 'idExercice'], null, null, false, false, null]],
        257 => [
            [['_route' => 'modifyExo', '_controller' => 'App\\Controller\\MoodleController::modifyExo'], ['idCours', 'idExercice'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
