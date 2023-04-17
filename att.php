<?php 
 header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');

if(isset($_POST['idcarga'])){
        
    $dados=$con->prepare("SELECT valor FROM cadastrocarga WHERE  id='".$_POST['idcarga']."'");
    $dados->execute();                
    if($dados->rowCount()>=1)
    echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
   else
      echo 'fail...';   
         
} 


?>