<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Controle - Parte 1</title>
</head>
<body>
    <?php 
        
        /*
        $var1 = 12;
        $var2 = "12";

        if ($var1 == $var2) {
            echo "As variáveis tem valores iguais!!";
        }else{
            echo "As variáveis tem valores diferentes!!";
        }
        */

        /*
        $idd = 19;
        $peso = 60.8;

        if ($idd < 18 and $peso < 50) {
            echo "Risco médio!";
        }
        if ($idd < 18 and ($peso >= 60 and $peso <= 90)) {
            echo "Risco normal!";
        }
        if ($idd < 18 and ($peso > 90 and $peso <= 120)) {
            echo "Risco alto!";
        }
        if ($idd < 18 and $peso > 120) {
            echo "Risco extremamente alto!";
        }
        if (($idd >= 18 and $idd <= 50) and $peso < 60) {
            echo "Risco médio!";
        }
        if (($idd >= 18 and $idd <= 50) and ($peso >= 60 and $peso <= 100)) {
            echo "Risco normal!";
        }
        if (($idd >= 18 and $idd <= 50) and ($peso >100 and $peso <= 140)) {
            echo "Risco alto!";
        }
        if (($idd >= 18 and $idd <= 50) and $peso > 140) {
            echo "Risco extremamente alto!";
        }
        */


        /*
        $nota = -2;
        echo match(true){
            
            ($nota < 4.0 and $nota >= 0) => "Reprovado",
            ($nota >= 4 and $nota < 6) => "Raspando pra baixo",
            ($nota >= 6 and $nota < 9) => "Aprovado",
            ($nota >= 9 and $nota <= 10) => "Nerdola",
            default => "Nota invalida!",
        }
        */

        /*
        $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $soma = 0;

        foreach($numeros as $num){
            $soma += $num;
        }

        echo "Soma: $soma";

        $numMedia = array(1,2,3,4,5,6,7,8,9,10);
        $media = 0;

        foreach($numMedia as $num){
            $media += $num;
        }

        echo "<br><br>";
        $media /= sizeof($numMedia);

        echo "Media: $media ". "<br>Tipo da variável media: " .gettype($media);
        */

        /*
        $cidades = array("SP" => "São Paulo", "RJ" => "Rio de Janeiro", "PE" => "Recife", "AM" => "Manaus", "GO" => "Goiânia", "SC" => "Florianópolis");

        foreach($cidades as $estado => $cidade){
            echo "A capital de $estado é $cidade<br>";
        }
        */
      
        /*
        $registros = [
            ["nomePessoa" => "João", "idade" => "41", "peso" => "78", "altura" => "1.77"],
            ["nomePessoa" => "André", "idade" => "29", "peso" => "65", "altura" => "1.85"],
            ["nomePessoa" => "Larissa", "idade" => "32", "peso" => "52", "altura" => "1.52"],
            ["nomePessoa" => "Cinthia", "idade" => "18", "peso" => "62", "altura" => "1.68"]
        ];

        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Idade</th><th>Peso</th><th>Altura</th></tr>";

        foreach ($registros as $registro) {
            echo "<tr>";
            echo "<td>" . $registro['nomePessoa'] . "</td>";
            echo "<td>" . $registro['idade'] . "</td>";
            echo "<td>" . $registro['peso'] . "</td>";
            echo "<td>" . $registro['altura'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        */

        

    ?>
</body>
</html>