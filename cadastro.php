
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="containerPrincipal">
    <form id="form1">
        <h1>Cadastro do Usuário</h1>
        <div>
            <label id="labelNome" >Nome: </label>
            <input type="text" id="nome" class="form-control" placeholder="Nome" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div>
            <label id="labelUsuario" >Usuário: </label>
            <input type="text" id="usuario" class="form-control" placeholder="Usuário" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div>
            <label id="labelEmail" >E-mail: </label>
            <input type="text" id="email" class="form-control" placeholder="Email" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div>
            <label id="labelSenha" >Senha:</label>
            <input type="password" id="senha" class="form-control" placeholder="Senha" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="boxButton">
            <button type="button" id="btnCadastro" class="btn btn-secondary" >Cadastrar</button>
        </div>

    </form id="form1">
    <script src="jquery-3.6.4.min.js"></script>
    <script src="igr.js"></script>
</body>




</html>