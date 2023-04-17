
$('#nomeatt').blur(function(){
   let nome=$('#nomeatt').val();
   $.ajax({
     url:'/projeto/att.php',
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
        url:'/projeto/gastos.php',
        method:'POST',
        data:{"status": "ajax" , "case":1,idcargagasto:id,preju:preju,lucro:lucro,ajudante:ajudante,manut:manut,litro:litro,gasolvalor:gasolvalor},
        dataType:'json'
      }).done(function(msg){
            if(msg==1)            
              console.log('Sucess...'); 
              
              $.ajax({
                url:'/projeto/att.php',
                method:'POST',
                data:{idcarga:id},
                dataType:'json'
              }).done(function(result){
                  for(var i=0;i<result.length;i++){
                    var lucrex=result[i].valor;           
                   var resp=lucrex-ajudante-manut-gasolvalor;
                    console.log(resp);
                }  
                console.log(result);  
                alert('Sucess...');         
              });    
                    
      }).fail(function(msg){
        alert('Carga ja possui dados');
       });

});