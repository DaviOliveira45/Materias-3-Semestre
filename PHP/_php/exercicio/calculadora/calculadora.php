<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <header>
    <h1>Calculadora</h1>
        <main>
            <?php 

                if (isset($_POST['enviar'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $raiz = $_POST['raiz'];



                    

                    function apxIguais($num1, $num2, $tolerancia = 2) {
                        return abs($num1 - $num2) < $tolerancia;
                    }
                
                    function raizQuadrada($num1, $num2){
                        $numRaiz = $num1 + $num2;
                        $raizEncontrada = false;
                        $raiz = 1;
                        $diferenca = 0;
                
                        for ($i=0; $i < $numRaiz; $i++) 
                        {
                            if ($raizEncontrada == false) 
                            {                                
                                $raiz = $i * $i; 
                                if (apxIguais($raiz, $numRaiz)) 
                                {
                                    $raiz = $i;
                                    $raizEncontrada = true;
                                } 
                                elseif ($raiz > $numRaiz) 
                                {
                                    $raiz = (($i - 1) * ($i - 1));
                                    $diferenca = $numRaiz - $raiz;
                                    $raiz = $i - 1;
                                    break;
                                }
                            }
                        }
                
                        if ($diferenca == 0) {
                            return $raiz;
                        }else{
                            return $raiz. " √" .$diferenca;
                        }
                        
                    }
                
                    if (isset($raiz)) {
                        echo "A raiz dos números é: " . raizQuadrada($num1, $num2);
                    }
                }

            ?>
        </main>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </header>
</body>
</html>