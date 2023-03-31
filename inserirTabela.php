
<?php 
header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');


       
         $sql=$con->prepare("SELECT * FROM cadastrocarga");
         $sql->execute();
         
         if($sql->rowCount()>=1){
            echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
         }else
         echo " Fail ....";

?>












