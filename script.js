

  



  $('#btnSalvar').click(function(e){
        
    let nomeCarga=$('#nome').val();
    let valorCarga=$('#valor').val();
    let dataCarga=$('#dia').val();
   let obsCarga=$('#obs').val();

   let usuario=$('#usario').val();
    
   var dataFormatada = dataCarga.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
   
   if(nomeCarga && valorCarga && dataCarga && obsCarga){

    $.ajax({
      url:'./DadosTabela.php',
      method:'POST',
      data:{carga:nomeCarga,valor:valorCarga,data:dataFormatada,obs:obsCarga},
      dataType:'json'
    }).done(function(data){
        if(data==1){
          alert('cadastro de cargas realizado com sucesso....');
          $(location).attr('href','./telainicial.php');
        }else{
          alert('error....');
        }
    }).fail(function(){
        alert('erro no ajax ....');
    });
   }
     
  

   });

   
   

 
  

  