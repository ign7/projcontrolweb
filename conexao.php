<?php 
    $con = new PDO('mysql:host=localhost;dbname=test','root','');
    if(!$con)
        echo "erro";
?>