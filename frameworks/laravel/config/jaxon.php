<?php

return array(
    'app' => array(
        'request' => array(
            // 'route' => 'jaxon',
        ),
        'classes' => array(
            array(
                'directory' => app_path('Jaxon/Classes'),
                'namespace' => '\\Jaxon\\App',
                // 'separator' => '', // '.' or '_'
                // 'protected' => array(),
            ),
        ),
    ),
    'lib' => array(
        'core' => array(
            'language' => 'en',
            'encoding' => 'UTF-8',
            'request' => array(
                'uri' => 'jaxon',
            ),
            'prefix' => array(
                'class' => '',
            ),
            'debug' => array(
                'on' => false,
                'verbose' => false,
            ),
            'error' => array(
                'handle' => false,
            ),
        ),
        'js' => array(
            'lib' => array(
                // 'uri' => '/jaxon/lib',
            ),
            'app' => array(
                // 'uri' => '',
                // 'dir' => '',
                'extern' => false,
                'minify' => false,
            ),
        ),
        'dialogs' => array(
            'libraries' => array('pgwjs'),
            'default' => array(
                'modal' => 'bootstrap',
                'alert' => 'toastr',
            ),
            'toastr' => array(
                'options' => array(
                    'closeButton' => true,
                    'positionClass' => 'toast-top-center'
                ),
            ),
            'assets' => array(
                'include' => array(
                    'all' => true,
                ),
            ),
        ),
    ),
);
