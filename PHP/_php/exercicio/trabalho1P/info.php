<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>Informações do Retângulo</h1>
        <main>
            <?php 
                
                if (isset($_POST['enviar'])) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $assunto = $_POST['assunto'];
                    $valorcusto = $_POST['valorcusto'];
                    $valorvenda = $_POST['valorvenda'];
                    $conteudo = $_POST['conteudo'];

                    if (empty($nome) || empty($email) || empty($assunto) || empty($valorcusto) || empty($valorvenda) || empty($conteudo)) 
                    {
                        echo "<p style='color:red;'>ERRO! Necessário preencher todos os campos</p>";    
                    }

                    if ($valorvenda < $valorcusto) {
                        echo "O valor de venda tem que ser maior do que o de custo";
                    }

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "<p style='color:red'>ERRO! E-mail informado não é válido.</p>";
                    }

                    if (($valorvenda > $valorcusto) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "<p style'color:green'>Dados enviados com sucesso!";
                    }
                }
            ?>
        </main>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </header>
</body>
</html>