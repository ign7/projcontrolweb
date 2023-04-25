<?php 
 header('Access-Control-Allow-Origin: *'); 
include("conexao.php");
header('Content-Type: application/json');




  function insertgasto(){
    include("conexao.php");
    if(isset($_POST['idcargagasto'])){
  
        $query= $con->prepare("INSERT INTO cargagasto (idgasto,gasolinavalor,gasolinalitros,despesasajudante,despesamanutencao) 
         VALUES (:idgasto,:gasolinavalor,:gasolinalitros,:despesasajudante,:despesamanutencao)");
            $query->bindValue(':idgasto',$_POST['idcargagasto'],PDO::PARAM_STR);
            $query->bindValue(':gasolinavalor',$_POST['gasolvalor'],PDO::PARAM_STR);
            $query->bindValue(':gasolinalitros',$_POST['litro'],PDO::PARAM_STR);
            $query->bindValue(':despesasajudante',$_POST['ajudante'],PDO::PARAM_STR);
            $query->bindValue(':despesamanutencao',$_POST['manut'],PDO::PARAM_STR);
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



function blurid(){
    include("conexao.php");
    if(isset($_POST['idcarga'])){  
        $dados=$con->query("SELECT * FROM cadastrocarga WHERE  id='".$_POST['idcarga']."'");
                        
        if($dados->rowCount()>=1)
        echo 1;
       else
       echo 0;
             
    } 
}


function getbyname(){
    include("conexao.php");
    if(isset($_POST['namecarga'])){  
        $dados=$con->query("SELECT id FROM cadastrocarga WHERE  nome='".$_POST['namecarga']."'");
                        
        if($dados->rowCount()>=1)
        echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
       else
       echo 0;
             
    } 
}



function slucro(){
    include("conexao.php");
    if(isset($_POST['id'])){
        
        $query= $con->prepare("UPDATE cargagasto SET lucro='".$_POST['resultlucro']."'  WHERE  idgasto='".$_POST['id']."'" );
            $query->execute();
    
        if($query->rowCount()>=1){
            echo 1;
        }else
           echo 0;  
             
    } 
}

function selectname(){
    include("conexao.php");
      
        $dados=$con->query("SELECT nome FROM cadastrocarga");
         $dados->execute();

        if($dados->rowCount()>=1)
        echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
       else
       echo 0;
             
     
}
 


 $flag=($_GET['opcao']);

switch($flag){
   
            case "inserir":
                insertgasto();
               
                break;
        
                case "pegavalor":
                    pegarvalor();
                break;

                case "lucro":
                    slucro();
                break;

                case "blur":
                    blurid();
                break;

                case "getidbyname":
                    getbyname();
                break;
                case "selectname":
                    selectname();
                break;
      
    
}

?>