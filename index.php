<?php
require_once ("vendor/autoload.php");
$weather =new weather();
$weatherguzzle=new weatherguzzle();
if(isset($_POST["submit"])){
    
    $data=$weatherguzzle->get_weather_guzzle($_POST["city_name"]);
   
    
    $weather->get_time();
    $weather->displayinfo($data);
   
}


?>