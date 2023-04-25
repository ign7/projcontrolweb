<?php 
 header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');

if(isset($_POST['idcarga'])){
   $sql=$con->prepare("DELETE FROM `cadastrocarga`  WHERE `cadastrocarga`.`id` = '".$_POST['idcarga']."' ");
   $sql->execute();
   
   if($sql->rowCount()>=1){
      echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
   }else
   echo " Fail ....";

} 

?>
        
        