<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMA COM PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Verificando se os valores estão definidos antes de acessá-los
        $valor1 = isset($_GET['v1']) ? $_GET['v1'] : '';
        $valor2 = isset($_GET['v2']) ? $_GET['v2'] : '';
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="iv1" required value="<?=$valor1?>">
            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="iv2" required value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="res">
        <h2>Resultado da Soma:</h2>
        <?php 
        // Verificando se os valores estão definidos antes de calcular a soma
        if ($valor1 !== '' && $valor2 !== '') {
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong></p>";
        } 
        else {
            echo "<p>Por favor, preencha ambos os valores para realizar a soma.</p>";
        }
        ?>
    </section>
</body>
</html>
