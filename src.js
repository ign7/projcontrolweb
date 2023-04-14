
$(function(){

 
  let username=$('#userNameLogin').val();

  $('#labeluser').html('@'+username);

    $.ajax({
        url:'http://localhost/projeto/InserirTabela.php',
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

          var action='<button ><i class="fa fa-plus" style="font-size:18px;color:green"></i></button><button name="editDell" id='+idtb+' class="delete'+idtb+'"><i class="fa fa-trash" style="font-size:18px;color:red" aria-hidden="true"></i></button>';
          
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

          btndell.click(function(){    
          let idbotao=btndell.attr("id");
             console.log(idbotao);
             $.ajax({
             url:'http://localhost/projeto/deletecarga.php',
             method:'POST',
             data:{idcarga:idbotao},
             dataType:'json'
           }).done(function(msg){
               alert('deletado com sucesso...');                                    
                 window.location.href="http://localhost/projeto/telainicial.php"
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
   

  function atualizar(){
  window.location.href="./atualizar.html"
  }


  let id=document.getElementById('id');


  let ids=$('#id').val();