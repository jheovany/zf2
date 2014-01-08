<?php

$controllers = [
	'Makers' => 
		'HardwareStore\Controller\MakersController',
];

$routes = [
    'hardware_store' => [
        'type' => 'segment',
        'options' => [
            'route' => '/hardware-store[/][:action][/:id]',
            'constraints' => [
	            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
	            'id' => '[0-9]+',
	        ],    
        	'defaults' => [
	    	    'controller' => 'Makers',
	            'action' => 'dataTable',
        	],
        ],
    ],    
];

return array(

	/* Definición de los "Controladores" */
    'controllers' => array(
        'invokables' => $controllers,
    ),

    /* Defición de las "Rutas" hacia los "Controladores" */
    'router' => array(
        'routes' => $routes,
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'Application' => __DIR__ . '/../view',
        ),
    ),
);