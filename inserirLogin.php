<?php 
include("conexao.php");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 
    
    if(isset($_POST['user'])){

        $dados=$sqlquery=$con->query("SELECT * FROM cadastroLogin WHERE usuario='".$_POST['user']."' AND senha='".$_POST['senha']."' ");
                    
     if($dados->rowCount()>=1)
        echo 1;
    else
       echo 0;   
    }       
?>