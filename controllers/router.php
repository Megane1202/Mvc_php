<?php
try
{
 if(isset($_GET['action']))
 {
    if(file_exists('controllers/controller'.ucfirst($_GET['action']).'.php'))
    {
        require_once('controllers/controller'.ucfirst($_GET['action']).'.php');
    }
    else
    {
        throw new Exception("error dev");
    }
    
 }else{
    require_once('controllers/controllerCommencer.php');
  
 }
}
catch(Exception $e)
{
    require_once('views/viewError.php');
}

?>