<?php

function app_autoloader($class){
  require 'controllers/' . $class . '.php';
}

spl_autoload_register('app_autoloader');

 ?>
