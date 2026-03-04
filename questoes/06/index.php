<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

    <?php
    $numeros = [15, 8, 27];

    rsort($numeros); // ordena do maior para o menor

    echo "Ordem decrescente:<br>";

    foreach ($numeros as $num) {
        echo $num . "<br>";
    }
?>
     
    </main>
</body>


</html>