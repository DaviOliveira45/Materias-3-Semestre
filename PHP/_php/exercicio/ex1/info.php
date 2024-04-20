<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Retângulo</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informações do Retângulo</h1>
        <main>
            <?php 
                $lado1 = $_GET['lado1'];
                $lado2 = $_GET['lado2'];


                if (isset($_GET['lado1']) <= 0) {
                    echo "O valor inserido no lado 1 é inválido";
                }
                if (isset($_GET['lado2']) <= 0) {
                    echo "O valor inserido no lado 2 é inválido";
                }
                

                function calcularAreaRet($num1, $num2){
                    $area = $num1 * $num2;
                    return $area;
                }

                //echo "<br><br>";

                echo "<p>A area do retangulo é: " . calcularAreaRet($lado1, $lado2). "</p>";

                //echo "<br><br>";
                
                function calcularPerimetroRet($num1, $num2){
                    $perimetro = (2 *$num1) + (2 * $num2);
                    return $perimetro;
                }

                echo "O perimetro do retangulo é: " . calcularPerimetroRet($lado1, $lado2) . "</p>";
            ?>
        </main>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </header>
</body>
</html>