<?php
    $manifest = array (
    'acceptable_sugar_versions' => array (
        'regex_matches' => array(
            '6\.[456789]\.\d\w*'
            ),
        ),
    'acceptable_sugar_flavors' => array(
        'PRO',
        'CORP',
        'ENT',
        'ULT',
        ),
    'readme' => 'Greenfieldcrm',
    'key' => 'Banner',
    'author' => ' Jose Sambrano ',
    'description' => 'Lectura del Web service de Banner',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Servicio Web',
    'published_date' => '2013-01-01 00:22:07',
    'type' => 'module',
    'version' => '1',
    'remove_tables' => false,
    );

$installdefs = array (
    'id' => 'Banner',
    'copy' => array (
            array (
                'from' => '<basepath>/requestxml.php',
                'to' => 'requestxml.php',
            ),
            
        ),
    'entrypoints' => array (
        array (
            'from' => '<basepath>/myentrypoint_registry.php',
            'to_module' => 'application',
            ),
        ),
    );
?>
