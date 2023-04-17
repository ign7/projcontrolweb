<?php 
 header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');




  function insertgasto(){
    include("conexao.php");
    if(isset($_POST['idcargagasto'])){
  
        $query= $con->prepare("INSERT INTO cargagasto (idgasto,gasolinavalor,gasolinalitros,despesasajudante,despesamanutencao,lucro,prejuizo) 
         VALUES (:idgasto,:gasolinavalor,:gasolinalitros,:despesasajudante,:despesamanutencao,:lucro,:prejuizo)");
            $query->bindValue(':idgasto',$_POST['idcargagasto'],PDO::PARAM_STR);
            $query->bindValue(':gasolinavalor',$_POST['gasolvalor'],PDO::PARAM_STR);
            $query->bindValue(':gasolinalitros',$_POST['litro'],PDO::PARAM_STR);
            $query->bindValue(':despesasajudante',$_POST['ajudante'],PDO::PARAM_STR);
            $query->bindValue(':despesamanutencao',$_POST['manut'],PDO::PARAM_STR);
            $query->bindValue(':lucro',$_POST['lucro'],PDO::PARAM_STR);
            $query->bindValue(':prejuizo',$_POST['preju'],PDO::PARAM_STR);
            $query->execute();
    
        if($query->rowCount()>=1){
            echo 1;
        }else
           echo 0;  
             
    } 
}


 function pegarvalor(){
    include("conexao.php"); 
    if(isset($_POST['idcarga'])){
        
        $dados=$con->prepare("SELECT valor FROM cadastrocarga WHERE  id='".$_POST['idcarga']."'");
        $dados->execute();                
        if($dados->rowCount()>=1)
        echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
       else
          echo 'fail...';   
             
    } 
} 
 



 $flag=isset($_POST['idcargagasto']);

switch($flag){
    case "ajax":
        switch($_POST["case"]){
            case 1:
                insertgasto();
               
                break;
        
                case 2:
                    pegarvalor();
                break;
        }
    
}

?>