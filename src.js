

$(function(){
    $.ajax({
        url:'http://localhost/projeto/InserirTabela.php',
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
      
          
          var str="<tr id='title'>"+
          "<td>" + id + "</td>" +
          "<td>" + name + "</td>" +
          "<td>" + valor + "</td>" +
          "<td>" + data + "</td>" +
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
    window.location.href="/projeto/cadastroTabela.php"
  }
   

  function atualizar(){
  window.location.href="/projeto/atualizar.html"
  }