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
    'readme' => '',
    'key' => 'AlertasEntryPoint',
    'author' => '',
    'description' => 'Test AlertasEntryPoint',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Alertas Entry Point',
    'published_date' => '2012-10-05 00:22:07',
    'type' => 'module',
    'version' => '20121005',
    'remove_tables' => false,
    );

$installdefs = array (
    'id' => 'AlertasEntryPoint',
    'copy' => array (
            array (
                'from' => '<basepath>/alertas_profesores.php',
                'to' => 'alertas_profesores.php',
            ),
            array (
                'from' => '<basepath>/alertas_programas.php',
                'to' => 'alertas_programas.php',
            ),
            array (
                'from' => '<basepath>/alertas_cobranzas.php',
                'to' => 'alertas_cobranzas.php',
            ),
            array (
                'from' => '<basepath>/alertas_participantes.php',
                'to' => 'alertas_participantes.php',
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
