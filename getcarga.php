<?php 
 header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');

if(isset($_POST['idcarga'])){
   
    $dados=$con->query("SELECT * FROM cadastrocarga WHERE  id='".$_POST['idcarga']."'");
                    
    if($dados->rowCount()>=1)
    echo 1;
   else
   echo 0;
         
} 

?>