
$('#nomeatt').blur(function(){
   let nome=$('#nomeatt').val();
   $.ajax({
     url:'/projeto/gastos.php?opcao=blur',
     method:'POST',
     data:{idcarga:nome},
     dataType:'json'
   }).done(function(msg){
         if(msg==0)
         alert('carga invalida digite o nome correto');
   })
});




$('#btnsalvaratt').click(function(){

    var id=$('#nomeatt').val();
    var preju=$('#prejuizoatt').val();
    var lucro=$('#lucroatt').val();
    var ajudante=$('#despesaajudanteatt').val();
    var manut=$('#despesamanutatt').val();
    var litro=$('#gasolinalitroatt').val();
    var gasolvalor=$('#gasolinaatt').val();
    
    

    $.ajax({
        url:'/projeto/gastos.php?opcao=inserir',
        method:'POST',
        data:{idcargagasto:id,ajudante:ajudante,manut:manut,litro:litro,gasolvalor:gasolvalor},
        dataType:'json'
      }).done(function(msg){
            if(msg==1)            
              console.log('Sucesso no progresso...'); 
              
              $.ajax({
                url:'/projeto/gastos.php?opcao=pegavalor',
                method:'POST',
                data:{idcarga:id},
                dataType:'json'
              }).done(function(result){
                  for(var i=0;i<result.length;i++){
                    var lucrex=result[i].valor;           
                   var resp=lucrex-ajudante-manut-gasolvalor;
                } 
                console.log(resp); 
                $.ajax({
                   url:'/projeto/gastos.php?opcao=lucro',
                   method:'POST',
                   data:{id:id,resultlucro:resp},
                   dataType:'json'
                }).done(function(r){
                  if(r==1)
                      alert('Sucess...');                     
                });        
              });    
                    
      }).fail(function(msg){
        alert('Carga ja possui dados');
       });

});