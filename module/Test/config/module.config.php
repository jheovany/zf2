<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Test\Controller\Auth' => 'Test\Controller\AuthController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'test' => array(
                'type'    => 'literal',
                'options' => array(
                    'route'    => '/show',
                    'defaults' => array(
                        'controller' => 'Test\Controller\Auth',
                        'action'     => 'show',
                    ),
                ),
            ),
            'index' => array(
                'type'    => 'literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Test\Controller\Auth',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'Application' => __DIR__ . '/../view',
        ),
    ),
);