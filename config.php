<?php

$THEME->name = 'flexpage';
$THEME->parents = array('standard', 'base');  // @todo Remove standard?
$THEME->enable_dock = false;
$THEME->sheets = array(
    'flexpage',
);
$THEME->layouts = array(
    'format_flexpage' => array(
        'file' => 'flexpage.php',
        'regions' => array('side-top', 'side-pre', 'main', 'side-post'),
        'defaultregion' => 'main',
        'options' => array('langmenu'=>true),
    ),
);