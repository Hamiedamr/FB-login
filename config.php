<?php
session_start();
    require_once 'Facebook/autoload.php';
    $Fb = new \Facebook\Facebook([
        'app_id' => '463621544371631',
        'app_secret' => 'cca2ba8dc895ee71fe57d64d4efe7e1a',
        'default_graph_version'  =>'v3.2'
    ]);
    $helper = $Fb->getRedirectLoginHelper();
    ?>
