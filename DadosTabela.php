<?php 
include("conexao.php");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 

    
     
    if(isset($_POST['carga']))
    {
        $query= $con->prepare("INSERT INTO cadastrocarga (nome,valor,dataCarga,obs,distancia,localizacao)  VALUES (:carga,:valor,:dataC,:obs,:dist,:locs)");
        $query->bindValue(':carga',$_POST['carga'],PDO::PARAM_STR);
        $query->bindValue(':valor',$_POST['valor'],PDO::PARAM_STR);
        $query->bindValue(':dataC',$_POST['data'],PDO::PARAM_STR);
        $query->bindValue(':obs',$_POST['obs'],PDO::PARAM_STR);
        $query->bindValue(':dist',$_POST['distancia'],PDO::PARAM_STR);
        $query->bindValue(':locs',$_POST['local'],PDO::PARAM_STR);
        $query->execute();

    if($query->rowCount()>=1){
        echo 1;
    }else
       echo 0;  

}
   

?>