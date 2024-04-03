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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/account/address' => [[['_route' => 'app_address_index', '_controller' => 'App\\Controller\\AddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/account/address/new' => [[['_route' => 'app_address_new', '_controller' => 'App\\Controller\\AddressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/address' => [[['_route' => 'app_post_address', '_controller' => 'App\\Controller\\Api\\ApiAddressController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/order' => [[['_route' => 'app_api_api_order', '_controller' => 'App\\Controller\\Api\\ApiOrderController::update'], null, ['POST' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/stripe/payment/success' => [[['_route' => 'app_stripe_payment_success', '_controller' => 'App\\Controller\\CheckoutController::paymentSuccess'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\HomeController::errorPage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ccount/address/([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                        .'|(*:221)'
                    .')'
                    .'|pi/(?'
                        .'|address/([^/]++)(?'
                            .'|(*:255)'
                        .')'
                        .'|stripe/payment\\-intent/([^/]++)(*:295)'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(?:/([^/]++))?(*:340)'
                    .'|remove/([^/]++)(?:/([^/]++))?(*:377)'
                .')'
                .'|/p(?'
                    .'|roduct/([^/]++)(*:406)'
                    .'|age/([^/]++)(*:426)'
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
        200 => [[['_route' => 'app_address_show', '_controller' => 'App\\Controller\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_address_edit', '_controller' => 'App\\Controller\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'app_address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        255 => [
            [['_route' => 'app_api_put_address', '_controller' => 'App\\Controller\\Api\\ApiAddressController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_delete_address', '_controller' => 'App\\Controller\\Api\\ApiAddressController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        295 => [[['_route' => 'app_stripe_payment-intent', '_controller' => 'App\\Controller\\Api\\ApiStripeController::index'], ['orderId'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_add_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::addToCart'], ['productId', 'count'], null, null, false, true, null]],
        377 => [[['_route' => 'app_remove_to_cart', 'count' => 1, '_controller' => 'App\\Controller\\CartController::removeToCart'], ['productId', 'count'], null, null, false, true, null]],
        406 => [[['_route' => 'app_product_by_slug', '_controller' => 'App\\Controller\\HomeController::showProduct'], ['slug'], null, null, false, true, null]],
        426 => [
            [['_route' => 'app_page', '_controller' => 'App\\Controller\\PageController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
