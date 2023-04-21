
$(function(){

  var link1='https://a9d9-2804-1b2-1000-82f-a3f4-4496-c9e8-244f.ngrok-free.app'
  var ponto=''
 
  let username=$('#userNameLogin').val();

  $('#labeluser').html('@'+username);

    $.ajax({
        url:'/projeto/InserirTabela.php',
        method:'GET',
        dataType:'json'
       }).done(function(msg){  
       
        for(var i=0;i<msg.length;i++){  
          
          var name=msg[i].nome;
          let valor=msg[i].valor;
          var idtb=msg[i].id;
          let data=msg[i].dataCarga;
          let obs= msg[i].obs;
          let body=$('#tb');
          var dataFormatada = data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');

          var action='<button Name="editview" id='+idtb+' class="view'+idtb+'" ><i class="fa fa-plus"  style="font-size:18px;color:green"></i></button><button name="editDell" id='+idtb+' class="delete'+idtb+'"><i class="fa fa-trash" style="font-size:18px;color:red" aria-hidden="true"></i></button>';
          
          var str="<tr id='title'>"+
          '<td>'+action+'</td>'+
          "<td>" + idtb + "</td>" +
          "<td>" + name + "</td>" +
          "<td>"+'R$'+ + valor +',00'+ "</td>" +
          "<td>" + dataFormatada + "</td>" +
          "<td>" + obs + "</td>" +
          "</tr>";                            
          body.prepend(str);   
                      
          let btndell= $('.delete'+idtb+'');
          
          let btnview= $('.view'+idtb+'');

          btndell.click(function(){    
          let idbotao=btndell.attr("id");
             console.log(idbotao);
             $.ajax({
             url:'/projeto/deletecarga.php',
             method:'POST',
             data:{idcarga:idbotao},
             dataType:'json'
           }).done(function(msg){
               alert('deletado com sucesso...');                                    
                 window.location.href="/projeto/telainicial.php"
           }); 
         });  


         btnview.click(function(){    
           let idbotaoview=btnview.attr("id");
             console.log(idbotaoview);
             $.ajax({
             url:'/projeto/viewcarga.php',
             method:'POST',
             data:{idcarga:idbotaoview},
             dataType:'json'
           }).done(function(result){
            console.log(result);

            for(let i= 0;i<result.length;i++){
               let nomecarga=result[i].nome;
               let idcarga=result[i].id;
               let valorcarga=result[i].valor;
               let lucro=result[i].lucro;
               let obv=result[i].obs;
               let date=result[i].dataCarga;
               let valorg=result[i].gasolinavalor;
               let litro=result[i].gasolinalitros;
               let ajudante=result[i].despesasajudante
               let manut=result[i].despesamanutencao
               
               $('#titlename').html(nomecarga+' / '+idcarga);
               $('#datacarga').html('Data Entrega: '+date);
               $('#valorcarga').html('Valor da Carga: R$: '+valorcarga);
               $('#manut').html('Manutenção Veicular: R$'+manut);
               $('#ajudante').html('Gasto Ajudante: R$'+ajudante);
               $('#gasolvalor').html('Valor Combustivel: R$'+valorg);
               $('#gasollitro').html('Litros: '+litro+'L');
               $('#lucro').html('Lucro: R$'+lucro);
               $('#obv').html('Observaçaõ: '+obv);
            }

            $('#myModal').modal('show');
                                                                         
           });  
         });  
        }        
       }).fail(function(){
            alert('error,');
       });     
});


 





  function novoCadastro(){
    window.location.href="./cadastroTabela.php"
  }
   

  function pageatualizar(){

  window.location.href="./atualizar.html"
  }


 