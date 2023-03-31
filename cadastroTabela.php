<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>cadastro</title>
</head>
<body>
    <header class="cabecalho">        
        
          
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
        <a href="#registrar" class="botaodestaque">registrar</a>
    </aside>
</header>

  <div id="containerDiv">

        <div id="titulodiv">
            <h1>Cadastro de cargas</h1>
        </div>

    <div id="Nome">
            <label id="labelNome"  class="geral">Nome da carga: </label>
            <input type="text" id="nome" class="form-control" placeholder="Nome" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div id="valor-dia">     
        <div id="Valor">
            <label id="labelvalor" class="geral" >valor: </label>
            <input type="number" id="valor" class="form-control" placeholder="valor" aria-label="Username"
            aria-describedby="basic-addon1">
        </div>

    <div id="Dia">
            <label id="labeldia"  class="geral">data de solicitaçao: </label>
            <input type="date" id="dia" class="form-control" placeholder="dia" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>

    </div>
    <div id="Obs">
            <label id="labelobs" class="geral">Observação: </label>
            <textarea name="obs" id="obs" cols="30" rows="10"></textarea>
    </div>

   <div id="botao">
    <button id="btnSalvar">Salvar</button>
   </div>
  </div>
  <script src="jquery-3.6.4.min.js"></script>
 <script src="script.js"></script> 
</body>
</html>