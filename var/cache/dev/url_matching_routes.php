<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_app_index', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/author' => [[['_route' => 'author_index', '_controller' => 'App\\Controller\\AuthorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/author/new' => [[['_route' => 'author_new', '_controller' => 'App\\Controller\\AuthorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/admin/post/newPost' => [[['_route' => 'app_post_newpost', '_controller' => 'App\\Controller\\PostController::newPost'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|uthor/([^/]++)(?'
                        .'|(*:64)'
                        .'|/edit(*:76)'
                        .'|(*:83)'
                    .')'
                    .'|dmin/post/(?'
                        .'|editPost/([^/]++)(*:121)'
                        .'|deletePost/([^/]++)(*:148)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:182)'
                        .'|/edit(*:195)'
                        .'|(*:203)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:230)'
                        .'|/edit(*:243)'
                        .'|(*:251)'
                    .')'
                .')'
                .'|/post/showPost/([^/]++)(*:284)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'author_show', '_controller' => 'App\\Controller\\AuthorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'author_edit', '_controller' => 'App\\Controller\\AuthorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'author_delete', '_controller' => 'App\\Controller\\AuthorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_post_editpost', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], null, null, false, true, null]],
        148 => [[['_route' => 'app_post_deletepost', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        195 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        203 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        230 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        284 => [
            [['_route' => 'app_post_showPost', '_controller' => 'App\\Controller\\PostController::showPost'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
