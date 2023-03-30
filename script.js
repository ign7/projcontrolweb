

  



  $('#btnSalvar').click(function(e){
        
    let nomeCarga=$('#nome').val();
    let valorCarga=$('#valor').val();
    let dataCarga=$('#dia').val();
   let obsCarga=$('#obs').val();
   
   
   if(nomeCarga && valorCarga && dataCarga && obsCarga){

    $.ajax({
      url:'http://localhost/projeto/DadosTabela.php',
      method:'POST',
      data:{carga:nomeCarga,valor:valorCarga,data:dataCarga,obs:obsCarga},
      dataType:'json'
    }).done(function(data){
        if(data==1){
          alert('cadastro de cargas realizado com sucesso....');
          $(location).attr('href','/projeto/index.html');
        }else{
          alert('error....');
        }
    }).fail(function(){
        alert('erro no ajax ....');
    });
   }
     
  

   });

   
   

 
  

  