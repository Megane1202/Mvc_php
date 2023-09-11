<?php
require_once('connect.php');

define('ROOT', dirname(__FILE__));
define('URL',"http://localhost/mvc/");


spl_autoload_register(function($class){
    require('./models/'.$class.'.php');

});

require_once('controllers/router.php');

?>