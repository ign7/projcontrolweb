
 $('#btnCadastro').click(function(){
 
  let user=$('#usuario').val();
  let name = $('#nome').val();
  let pass = $('#senha').val();
  let Email = $('#email').val();

  if(user && name && pass && Email){  

    $.ajax({
      url:'https://5cc0-2804-1b2-1000-82f-a3f4-4496-c9e8-244f.ngrok-free.app/projeto/inserirCadastro.php',
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
     $(location).attr('href','/projeto/index.html');
  }).fail(function(result){
    console.log('falha ao AJAX');
  });
  }else{
    alert('Preencha todos os campos para continuar');
  }

});    

function time(){
  $(location).attr('href','https://5cc0-2804-1b2-1000-82f-a3f4-4496-c9e8-244f.ngrok-free.app/projeto/telainicial.php');
}

$("#btnLogin").click(function(){

  let usuarioLogin = $('#userNameLogin').val();
  let senhaLogin = $('#senhaLogin').val();

 if(usuarioLogin!='' || senhaLogin!=null){
  $.ajax({
    url:'https://5cc0-2804-1b2-1000-82f-a3f4-4496-c9e8-244f.ngrok-free.app/projeto/inserirLogin.php',
    method:'POST',
    data:{user:usuarioLogin,senha:senhaLogin},
    dataType:'json'
  }).done(function(data){
      console.log('Login realizado com sucesso...');
      if(data==1){
        alert('Login realizado com sucesso...');
        setTimeout(time,1000); 
      }
     
      else{
        alert('login ou senha invalidos....');
      }   
  }); 
 }

});


/* function novoUsuario(){
  window.location.href = "/projeto/cadastro.php"
}  */





