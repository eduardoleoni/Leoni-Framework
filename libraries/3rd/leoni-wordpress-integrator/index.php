<?php
define('LWI', THIRDPARTY . 'leoni-wordpress-integrator' . DS);

include_once(LWI . 'config' . DS . 'main.php');

if (!empty($wordpressConfig["folder"]))
    include_once(ROOT . $wordpressConfig["folder"] . "/wp-blog-header.php");