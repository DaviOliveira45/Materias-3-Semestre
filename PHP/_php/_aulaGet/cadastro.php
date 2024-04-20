<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Usuário cadastrado</h1>
        <main>
            <?php 
                $nome = $_GET['nome'];
                $sobrenome = $_GET['sobrenome'];

                if (!empty($_GET['nome']) and !empty($_GET['sobrenome'])) {
                    echo "<p>Bem vindo ao site das mamadinhas $nome $sobrenome </p>";
                }else if(!empty($_GET['nome'])){
                    echo "Informe o nome, sua anta aquática";
                }else{
                    echo "Informe o sobrenome, sua anta aquática";
                }
            ?>
        </main>

        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </header>
</body>
</html>