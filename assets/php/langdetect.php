<?php  // List of available localised versions as 'lang code' =--> 'url' map
header('Access-Control-Allow-Origin: http://localhost:9000');
 

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
 
// Set default language if a '$lang' version of site is not available


echo $lang."bada";
 
?>