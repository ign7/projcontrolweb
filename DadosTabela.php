<?php 
include("conexao.php");
header('Content-Type: application/json');

    
     
    if(isset($_POST['carga']))
    {
        $query= $con->prepare("INSERT INTO cadastrocarga (nome,valor,dataCarga,obs)  VALUES (:carga,:valor,:dataC,:obs)");
        $query->bindValue(':carga',$_POST['carga'],PDO::PARAM_STR);
        $query->bindValue(':valor',$_POST['valor'],PDO::PARAM_STR);
        $query->bindValue(':dataC',$_POST['data'],PDO::PARAM_STR);
        $query->bindValue(':obs',$_POST['obs'],PDO::PARAM_STR);
        $query->execute();

    if($query->rowCount()>=1){
        echo 1;
    }else
       echo 0;  

}
   

?>