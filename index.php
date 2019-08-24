<?php
require './config.php';
spl_autoload_register(function($class) {
    if (strpos($class, 'Controller') > - 1) {
        if (file_exists('controllers/' . $class . '.php')) {
            require 'controllers/' . $class . '.php';
        }
    } else if (file_exists('models/' . $class . '.php')) {
        require 'models/' . $class . '.php';
    } else {
        require 'cores/' . $class . '.php';
    }
});
$core = new Core();
$core->run();
?>
  