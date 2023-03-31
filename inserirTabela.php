
<?php 
include("conexao.php");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 

       
         $sql=$con->prepare("SELECT * FROM cadastrocarga");
         $sql->execute();
         
         if($sql->rowCount()>=1){
            echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
         }else
         echo " Fail ....";

?>












