<?php 

  /*
    Plugin Name: Wordpress OpenStreetMap
    Description: Dilate OpenStreetMap
    Author: William Donayre Jr - Dilate Digital LLC. <william@dilate.com.au>
    Text Domain: wp-openstreetmap
    Version: 0.0.2
  */

    require 'wp-openstreetmap.php';
    use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://github.com/wdonayre/wp-openstreetmap/',
        __FILE__,
        'wp-openstreetmap'
    );

    //Set the branch that contains the stable release.
    $myUpdateChecker->setBranch('main');

    //Optional: If you're using a private repository, specify the access token like this:
    // $myUpdateChecker->setAuthentication('your-token-here');


  // If this file is called directly, abort.
  if (!defined('WPINC')) {
    die;
  }