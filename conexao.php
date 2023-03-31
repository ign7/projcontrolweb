<?php 
header('Access-Control-Allow-Origin: *'); 
    $con = new PDO('mysql:host=localhost;dbname=test','root','');
    if(!$con)
        echo "erro";
?>