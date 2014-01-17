<?php

// This is the main Web application configuration. Any writable
// application properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'API doc',

    // autoloading model and component classes
    'import'=>array(
        'application.helpers.*',
        'application.extensions.httpclient.ExtHttpClient'
    ),
    // application components
    'components' => array(
        'httpclient' => array(
            'class' => 'ExtHttpClient'
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '' => 'site/index',
                '<uri:.+>'=>'site/doc',
                'doc' => 'site/doc'
            ),
        ),
    ),
    // application params
    'params' => array(
        'docDir' => 'http://maps.api.2gis.ru/2.0/doc',
        'menu' => 'http://maps.api.2gis.ru/2.0/doc/menu.json'
    )
);