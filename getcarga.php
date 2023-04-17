<?php 
 header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');

if(isset($_POST['idcarga'])){
   
    $dados=$sqlquery=$con->query("SELECT valor FROM cadastrocarga WHERE  id='".$_POST['idcarga']."'");
                    
    if($dados->rowCount()>=1)
    echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
   else
      echo 0;   
         
} 

?>