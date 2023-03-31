
$(function(){
    $.ajax({
        url:'./InserirTabela.php',
        method:'GET',
        dataType:'json'
       }).done(function(msg){  
        console.log(msg);  
      
        for(var i=0;i<msg.length;i++){
          
         
          let name=msg[i].nome;
          let valor=msg[i].valor;
          let id=msg[i].id;
          let data=msg[i].dataCarga;
          let obs= msg[i].obs;
           
          var dataFormatada = data.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
          
          var str="<tr id='title'>"+
          "<td>" + id + "</td>" +
          "<td>" + name + "</td>" +
          "<td>"+'R$'+ + valor +',00'+ "</td>" +
          "<td>" + dataFormatada + "</td>" +
          "<td>" + obs + "</td>" +
          "</tr>";
      
          
          let body=$('#tb');
           body.prepend(str);
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