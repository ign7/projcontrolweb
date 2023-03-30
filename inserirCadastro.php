<?php 
include("conexao.php");
header('Content-Type: application/json');
  

    $user=$_POST['usuario'] ;  
    $name=$_POST['nome'];   
    $senha=$_POST['senha'];  
    $email=$_POST['email'];

   
    if(isset($user))
    {
        $query= $con->prepare("INSERT INTO cadastroLogin(usuario,senha,email,nome)  VALUES (:user,:pass,:e,:n)");
        $query->bindValue(':user',$user,PDO::PARAM_STR);
        $query->bindValue(':pass',$senha,PDO::PARAM_STR);
        $query->bindValue(':e',$email,PDO::PARAM_STR);
        $query->bindValue(':n',$name,PDO::PARAM_STR);
        $query->execute();

    if($query->rowCount()>=1){
        echo json_encode("save sucess");
    }else{
       echo json_encode("se der ruim cai aqui");
    }
    }


    //$querySQL="SELECT  usuario,senha FROM cadastroLogin"
   

?>