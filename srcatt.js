
    $('#nomeatt').blur(function(){
   let nome=$('#nomeatt').val();
   $.ajax({
     url:'/projeto/gastos.php?opcao=blur',
     method:'POST',
     data:{idcarga:nome},
     dataType:'json'
   }).done(function(msg){
         if(msg==0){
alert('ID carga invalida ');
         }
         
   })
});    
 
  


  $("#selectatt").on("click",function() {

  $.ajax({
    url:'/projeto/gastos.php?opcao=selectname',
    method:'GET',
    dataType:'json'
  }).done(function(msg){
       let select=$('#selectatt')
        for(var i=0;i<msg.length;i++){
              
          var option='<option value="" id="cargas">'+msg[i].nome+'</option>';
          select.prepend(option);     
          
        }   
            
  })
} 
);  


  $("#selectatt").change(function(){
  var selectedValue = $("#selectatt option:selected").text();
 
  $.ajax({
    url:'/projeto/gastos.php?opcao=getidbyname',
    method:'POST',
    data:{namecarga:selectedValue},
    dataType:'json'
  }).done(function(msg){
    console.log(msg);
    for(let i=0;i<msg.length;i++){
      let idselect= msg[i].id;

      $('#btnsalvaratt').click(function(){

  

        var id=idselect;
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
                          alert('Sucesso...');   
                          window.location.href="/projeto/telainicial.php"                  
                    });        
                  });    
                        
          }).fail(function(msg){
            alert('Carga ja possui dados');
           });
    
    });
    }
  });

});


 $("#selectatt").blur(function(){
  $("#selectatt").text(" ");
}); 
     



