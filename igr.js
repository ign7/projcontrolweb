
 $('#btnCadastro').click(function(){
 
  let user=$('#usuario').val();
  let name = $('#nome').val();
  let pass = $('#senha').val();
  let Email = $('#email').val();

  if(user && name && pass && Email){  

    $.ajax({
      url:'http://localhost/projeto/inserirCadastro.php',
      method:'POST',
      data:{usuario:user,
            nome:name,
            senha:pass,
            email:Email},
      dataType:'json'
  
  }).done(function(result){      
     alert("deu bom");
    $('#usuario').val('');
    $('#senha').val(' ');
    $('#email').val(' ');
     $(location).attr('href','/projeto/login.php');
  }).fail(function(result){
    console.log('falha ao AJAX');
  });
  }else{
    alert('Preencha todos os campos para continuar');
  }

});    


$("#btnLogin").click(function(){

  let usuarioLogin = $('#userNameLogin').val();
  let senhaLogin = $('#senhaLogin').val();

 if(usuarioLogin!='' || senhaLogin!=null){
  $.ajax({
    url:'http://localhost/projeto/inserirLogin.php',
    method:'POST',
    data:{user:usuarioLogin,senha:senhaLogin},
    dataType:'json'
  }).done(function(data){
      console.log('Login realizado com sucesso...');
      if(data==1)
      $(location).attr('href','/projeto/index.html');
      else{
        alert('login ou senha invalidos....');
      }   
  }); 
 }

});


function novoUsuario(){
  window.location.href = "/projeto/cadastro.php"
} 





