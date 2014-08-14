<?php
require_once("autoload.php");

$ioc = new Ioc();
$ioc->set('example', function() {
    return new Example();
});
$ioc->set('share', function() {
    return new Share();
});
$ioc->get('example')->print_version();
$ioc->get('share')->print_version();
