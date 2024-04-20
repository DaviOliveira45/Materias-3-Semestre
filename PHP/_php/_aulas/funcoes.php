<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Funções </title>
</head>
<body>
    <?php 

        /*
        function soAsDivindades(){
            return "Exemplo!";
        }

        // Ao utilizar return com string, tem que usar o echo na chamada da function 
        echo soAsDivindades();

        function soma($a, $b){
            $soma = $a + $b;
            return $soma;
        }


        echo "<br>";
        echo "Soma dos algoritimos: " .soma(6, 9);
        */

        /*
        function stringToFloat($text){
            if (is_string($text)){
                $float = (float)$text;
                return $float;
            }else{
                return $text;
            }
        }

        echo gettype(stringToFloat("19"));
        */

        /*
        function calculoSalario($salario){
            if($salario <= 2000) {
                $salario -= ($salario * 0.125);
                return $salario;           
            }
            if($salario > 2000 && $salario <= 3500){
                $salario -= ($salario * 0.225) + 50.0;
                return $salario; 
            }
            if($salario > 3500){
                $salario -= ($salario * 0.275) + 75.0;
                return $salario;
            }
        }

        echo "Marcos: ". number_format(calculoSalario(2567),2,",",".");
        echo "<br>";
        echo "Mamatsu no Seu Pai: ".  number_format(calculoSalario(3244),2,",",".");
        echo "<br>";
        echo "Davi: ".  number_format(calculoSalario(12978),2,",",".");
        */

        
    ?>
</body>
</html>