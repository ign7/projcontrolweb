

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="header.css">
    <link  rel="stylesheet"  href="styleIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="data:,">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    
    <title>Document</title>
</head>
<body>
    <header class="cabecalho">        
        
        </div>       

        <nav class="menu">
            <ul>
                <li>
                    <a href="/projeto/telainicial.php">Inicio</a>
                </li>
                <li>
                    <a href="contatos">Contatos</a>
                </li>
                <li>
                    <a href="sobre">Sobre</a>
                </li>
            </ul>
        </nav>
    </div>
        <aside class="autentificacao">
            <a href="/projeto/index.html">login</a>
            <a id="labeluser"></a>
        </aside>
    </header>
    <main class="corpo">
        <div class="titulo">
            <h1>Controle de Entregas e Cargas</h1>
        </div>
        <div class="botoes">
            <button id="atualizar" onclick="pageatualizar()">Gastos</button>
            <button id="novoCadastro" onclick="novoCadastro()">Cadastrar</button>
        </div>
        
               
      <div class="containertb">         
            <table  class="table table-bordered">                
                <thead class="table-dark">
                    <td id="action"><strong></strong></td>
                    <td id="nome"> <strong>id</strong> </td>
                    <td id="id"><strong>Nome da Carga</strong></td>
                    <td id="valor"><strong>Valor (R$)</strong></td>
                    <td id="dia"><strong>Dia da entrega</strong></td>
                    <td id="obs"><strong>Observação</strong></td>                   
                </thead>              
                <tbody id="tb">
                
                </tbody>    
                
                
            </table>

            <div class="modal" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlename">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for=""><strong> Entrega:</strong></label>
                        <span id='datacarga'></span><br>
                        <label for=""><strong>Valor da Carga: </strong>R$</label>
                        <span id='valorcarga'></span><br>
                        <label for=""><strong>Manutenção Veicular: </strong>R$</label>
                        <span id='manut'></span>
                        <label for=""><strong>Gasto Ajudante: </strong>R$</label>
                        <span id='ajudante' ></span><br>
                        <label for=""><strong>Valor Combustivel: </strong>R$</label>
                        <span id='gasolvalor'></span>
                        <label for=""><strong>Litros:</strong></label>
                        <span id='gasollitro'></span><br>
                        <label for="preju" id='preju'></label>
                        <span id='lucro'></span><br>
                        <label for=""><strong>Observaçaõ:</strong></label>
                        <span id='obv'></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <script src="igr.js"></script>
    <script src="src.js"></script>       
</body>
</html>
