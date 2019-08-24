<?php
require './environment.php';

$config  = array();
global $config;

if(DESENVOLVIDOR == "desenvolvidor"){
    
    $config['dbname'] = "galeria";
    $config['host']   = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
}else{
    
    $config['dbname'] = "sitePublicidade";
    $config['host']   = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
}

