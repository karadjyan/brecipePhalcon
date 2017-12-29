<?php

/**
 * Services are globally registered in this file
 */

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Mvc\Router\Group as RouterGroup;
use Phalcon\Security;
use Phalcon\Session\Factory;

/**
 * The FactoryDefault Dependency Injector automatically registers the right
 * services to provide a full stack framework.
 */
$di = new FactoryDefault();

/**
 * Registering a router
 */
$di["router"] = function () {
    $router = new Router();

    $router->add(
        '/',
        [
            'namespace'  => 'Multiple\Frontend\Controllers',
            'module'     => 'frontend',
            'controller' => 'index',
            'action'     => 'index',
        ]
    );


    $admin = new RouterGroup();
    $admin->setPaths(
        [
            'namespace'  => 'Multiple\Backend\Controllers',
            'module'     => 'backend',
            'controller' => 'admin',
        ]
    ); //                                   set namespace, module, controller
    $admin->setPrefix("/admin");
    $admin->add(
        '/',
        [
            'action'     => 'showlogin',
        ]
    ); //                                        show login form
    $admin->add(
        '/login',
        [
            'action'     => 'login',
        ]
    ); //                                        login admin
    $admin->add(
        '/logout',
        [
            'action'     => 'logout',
        ]
    ); //                                        logout admin
    $admin->add(
        '/signup',
        [
            'action'     => 'showregister',
        ]
    ); //                                        show register form
    $admin->add(
        '/register',
        [
            'action'     => 'registeradmin',
        ]
    ); //                                        register admin
    $admin->add(
        '/panel',
        [
            'action'     => 'panel',
        ]
    ); //                                        show admin panel
    $admin->add(
        '/panel/users',
        [
            'action'     => 'users',
        ]
    ); //                                        show panel users
    $admin->add(
        '/user/delete',
        [
            'action' => 'deleteuser',
        ]
    );//                                         delete user

    $ingredient = new RouterGroup();
    $ingredient->setPaths(
        [
            'namespace'  => 'Multiple\Backend\Controllers',
            'module'     => 'backend',
            'controller' => 'ingredient',
        ]
    ); //                              set namespace, module, controller
    $ingredient->setPrefix("/admin");
    $ingredient->add(
        '/panel/ingredients',
        [
            'action' => 'index',
        ]
    );//                                    show all ingredients
    $ingredient->add(
        '/panel/ingredients/add',
        [
            'action' => 'create',
        ]
    );//                                    show form create ingredient
    $ingredient->add(
        '/ingredient/add',
        [
            'action' => 'create',
        ]
    );//                                    save ingredient
    $ingredient->add(
        '/panel/ingredients/edit/{id:[0-9]+}',
        [
            'action' => 'edit',
        ]
    )->setName('edit-ingredient');//        show form edit ingredient
    $ingredient->add(
        '/ingredient/edit/{id:[0-9]+}',
        [
            'action' => 'edit',
        ]
    );//                                    update ingredient
    $ingredient->add(
        '/ingredient/delete/{id:[0-9]+}',
        [
            'action' => 'destroy',
        ]
    );//                                    delete ingredient

    $recipe = new RouterGroup();
    $recipe->setPaths(
        [
            'namespace'  => 'Multiple\Backend\Controllers',
            'module'     => 'backend',
            'controller' => 'recipe',
        ]
    ); //                                  set namespace, module, controller
    $recipe->setPrefix("/admin");
    $recipe->add(
        '/panel/recipes',
        [
            'action' => 'index',
        ]
    );//                                        show all recipes
    $recipe->add(
        '/panel/recipes/add',
        [
            'action' => 'create',
        ]
    );//                                        show form create recipe
    $recipe->add(
        '/recipe/add',
        [
            'action' => 'create',
        ]
    );//                                        save recipe
    $recipe->add(
        '/panel/recipes/edit/{id:[0-9]+}',
        [
            'action' => 'edit',
        ]
    )->setName('edit-recipe');//                show form edit recipe
    $recipe->add(
        '/recipe/edit/{id:[0-9]+}',
        [
            'action' => 'edit',
        ]
    );//                                        update recipe
    $recipe->add(
        '/recipe/delete/{id:[0-9]+}',
        [
            'action' => 'destroy',
        ]
    );//                                        delete recipe

    $menu = new RouterGroup();
    $menu->setPaths(
        [
            'namespace'  => 'Multiple\Backend\Controllers',
            'module'     => 'backend',
            'controller' => 'menu',
        ]
    ); //                                    set namespace, module, controller
    $menu->setPrefix("/admin");
    $menu->add(
        '/panel/menus',
        [
            'action' => 'index',
        ]
    );//                                          show all menus
    $menu->add(
        '/menu/add',
        [
            'action' => 'create',
        ]
    );//                                          save menu
    $menu->add(
        '/menu/delete/{id:[0-9]+}',
        [
            'action' => 'destroy',
        ]
    );//                                          delete menu

    $FrontRecipe = new RouterGroup();
    $FrontRecipe->setPaths(
        [
            'namespace'  => 'Multiple\Frontend\Controllers',
            'module'     => 'frontend',
            'controller' => 'recipe',
        ]
    ); //                             set namespace, module, controller
    $FrontRecipe->setPrefix("/recipe");
    $FrontRecipe->add(
        '/',
        [
            'action' => 'index',
        ]
    );//                                   show all front recipes
    $FrontRecipe->add(
        '/{id:[0-9]+}',
        [
            'action' => 'show',
        ]
    )->setName('show-recipe');//                                   show front recipe

    $FrontIngredient = new RouterGroup();
    $FrontIngredient->setPaths(
        [
            'namespace'  => 'Multiple\Frontend\Controllers',
            'module'     => 'frontend',
            'controller' => 'ingredient',
        ]
    ); //                         set namespace, module, controller
    $FrontIngredient->setPrefix("/ingredient");
    $FrontIngredient->add(
        '/',
        [
            'action' => 'index',
        ]
    );//                               show all front ingredients
    $FrontIngredient->add(
        '/{id:[0-9]+}',
        [
            'action' => 'show',
        ]
    )->setName('show-ingredient');//   show front ingredient

    $FrontMenu = new RouterGroup();
    $FrontMenu->setPaths(
        [
            'namespace'  => 'Multiple\Frontend\Controllers',
            'module'     => 'frontend',
            'controller' => 'ingredient',
        ]
    ); //                         set namespace, module, controller
    $FrontMenu->setPrefix("/ingredient");
    $FrontMenu->add(
        '/',
        [
            'action' => 'index',
        ]
    );//                               show all front ingredients
    $FrontIngredient->add(
        '/{id:[0-9]+}',
        [
            'action' => 'show',
        ]
    )->setName('show-ingredient');//   show front ingredient

    $router->mount($FrontIngredient);
    $router->mount($FrontRecipe);
    $router->mount($recipe);
    $router->mount($menu);
    $router->mount($ingredient);
    $router->mount($admin);

    return $router;
};

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di["url"] = function () {
    $url = new UrlResolver();

    $url->setBaseUri("/brecipes/");

    return $url;
};

$di->set(
    'security',
    function () {
        $security = new Security();

        // Set the password hashing factor to 12 rounds
        $security->setWorkFactor(12);

        return $security;
    },
    true
);

$di->setShared(
    'session',
    function () {
        $session = new \Phalcon\Session\Adapter\Files();

        $session->start();

        return $session;
    }
);

/**
 * Start the session the first time some component request the session service
 */
$di["session"] = function () {
    $session = new SessionAdapter();

    $session->start();

    return $session;
};
