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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

    <form method="post">
    <input type="number" name="segundos" placeholder="Digite o tempo em segundos" required>
    <button type="submit">Converter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $totalSegundos = $_POST["segundos"];

    $horas = floor($totalSegundos / 3600);
    $resto = $totalSegundos % 3600;

    $minutos = floor($resto / 60);
    $segundos = $resto % 60;

    echo "<h3>Tempo convertido:</h3>";
    echo "$horas hora(s), $minutos minuto(s) e $segundos segundo(s)";
}
?>
     
    </main>
</body>


</html>