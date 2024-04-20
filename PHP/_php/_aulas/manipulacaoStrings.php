<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 

    /*
        $nome = 'Abner';

        //Desse modo a variavel não é lida
        echo 'Minha comida favorita é o $nome<br>';

        echo "Minha comida favorita é o $nome";

        $snome = 'Mamadinha';

        echo "<br>$nome Ricardo $snome ";

        $array = array();
    */


    
    // QUESTÃO 1: 
    // for
    $numeros = [7,1,20,4,33];

    function verificarMaiorFor($numeros){
        $maior = $numeros[0];

        for ($i = 0; $i < 5; $i++) { 
            if ($numeros[$i] > $maior) {
                $maior = $numeros[$i];
            }
        }

        return $maior;
    }

    $maior = verificarMaiorFor($numeros);
    
    echo "O maior número é: " . $maior;
    echo "<br><br>";

    // foreach
    $numeros1 = [12,8,378,1,55];

    function verificarMaiorForeach($numeros){
        $maior = $numeros[0];

        foreach ($numeros as $numero) {
            if ($numero > $maior) {
                $maior = $numero;
            }
        }

        return $maior;
    }

    $maior1 = verificarMaiorForeach($numeros1);

    echo "O maior número é: " . $maior1;
    echo "<br><br>";


    // QUESTÃO 2: 
    $carros = [
        ["Mustang", "Ford", "Vermelho", 2022],
        ["Argo", "Fiat", "Branco", 2023],
        ["Onix", "GM", "Prata", 2024],
        ["Corolla", "Toyota", "Preto", 2020],
        ["Versa", "Nissan", "Cinza", 2018],
        ["HB20", "Hyundai", "Marrom", 2023],
        ["Prius", "Toyota", "Prata", 2024],
        ["Endeavor", "Mitsubishi", "Azul", 2019],
        ["Lamborghini Revuelto", "Lamborghini", "Amarelo", 2024],
        ["Impreza", "Subaru", "Azul", 2019]
    ];
    
    
    echo "CARROS REGISTRADOS:<br>";
    foreach ($carros as $carro) {
        echo implode(", ", $carro) . "<br>";
    }
    
    echo "<br><br>";

    echo "\nCARROS FABRICADOS ANTES DE 2023:<br>";
    foreach ($carros as $carro) {
        if ($carro[3] < 2023) {
            echo implode(", ", $carro) . "<br>";
        }
    }
    
    echo "<br><br>";


    // QUESTÃO 3: 
    $texto = "&u gosto d& estudar a linguag&m PHP &m finais de semana";

    $corrigido = str_replace(["&u", "&m", "d&"], ["eu", "de", "de"], $texto);

    echo $corrigido;

    echo "<br><br>";


    // QUESTÃO 4
    $string = "ARARA";
    $sem_repeticao = "";

    foreach (str_split($string) as $char) {
        if (strpos($sem_repeticao, $char) === false) {
            $sem_repeticao .= $char;
        }
    }

    echo "String original: " . $string . "<br>";
    echo "String sem caracteres repetidos: " . $sem_repeticao . "<br>";

    ?>
</body>
</html>