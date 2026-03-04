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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

   <form method="post">
    <input type="text" name="nome" placeholder="Seu nome" required>
    <input type="number" name="idade" placeholder="Sua idade" required>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $dias = $idade * 365;

    echo "<p>$nome, você já viveu aproximadamente <strong>$dias dias</strong>.</p>";
}
?>
     
    </main>
</body>


</html>