<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/56796cbec0.js" crossorigin="anonymous"></script>
    <title>Questão 3 - Resultado Final</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Questão 3 - Resultado Final</h1>

        <?php
            $ans1 = $_GET["ans1"];
            $ans2 = $_GET["ans2"];
            $ans3 = $_GET["ans3"];
            $ans4 = $_GET["ans4"];
        ?>

        <ol>
            <li><?php echo "$ans1"; if($ans1 == "C"){echo "<i class=\"fa-solid fa-check\"></i>";}else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?></li>
            <li><?php echo "$ans2"; if($ans2 == "A"){echo "<i class=\"fa-solid fa-check\"></i>";}else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?></li>
            <li><?php echo "$ans3"; if($ans3 == "D"){echo "<i class=\"fa-solid fa-check\"></i>";}else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?></li>
            <li><?php echo "$ans4"; if($ans4 == "E"){echo "<i class=\"fa-solid fa-check\"></i>";}else{echo "<i class=\"fa-solid fa-xmark\"></i>";} ?></li>
        </ol>
    </main>

    <footer>
        <p><a href="../index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>