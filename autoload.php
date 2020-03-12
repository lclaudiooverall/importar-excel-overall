<?php 

include'config.php';

spl_autoload_register(function ($clase){

 $ruta  =  'clases/'.$clase.'.php';
 include($ruta);

});




 ?>