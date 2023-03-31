

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="styleIndex.css" rel="stylesheet">
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
            <button id="atualizar" onclick="atualizar()">Atualizar</button>
            <button id="novoCadastro" onclick="novoCadastro()">Cadastrar</button>
        </div>
      <div class="containertb">         
            <table id="tabela">                
                <thead id="title">
                    <td id="nome"> <strong>id</strong> </td>
                    <td id="id"><strong>Nome da Carga</strong></td>
                    <td id="valor"><strong>Valor (R$)</strong></td>
                    <td id="dia"><strong>Dia da entrega</strong></td>
                    <td id="obs"><strong>Observação</strong></td>
                    
                </thead>              
                <tbody id="tb">
                
                </tbody>
                           
            </table>
        </div>
    </main>
    <script src="jquery-3.6.4.min.js"></script>
  <script src="src.js"></script>
  <script src="igr.js"></script>
  
</body>
</html>
