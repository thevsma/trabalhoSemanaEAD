<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Questão 3 - Q4</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Questão 3 - Q4</h1>

        <?php
            $ans1 = $_GET["ans1"];
            $ans2 = $_GET["ans2"];
            $ans3 = $_GET["ans3"];
        ?>

        <p>Q4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates numquam labore hic accusantium cumque minus! At asperiores rem ipsum soluta.</p>
        <ol type="A">
            <li><a href="q3d.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=<?php echo "$ans3"; ?>&ans4=A">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
            <li><a href="q3d.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=<?php echo "$ans3"; ?>&ans4=B">Molestiae soluta molestias incidunt eaque ex! Cupiditate!</a></li>
            <li><a href="q3d.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=<?php echo "$ans3"; ?>&ans4=C">Illum laboriosam veniam dolores nemo ad! Magnam?</a></li>
            <li><a href="q3d.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=<?php echo "$ans3"; ?>&ans4=D">Alias magni accusamus maiores nobis sapiente non?</a></li>
            <li><a href="q3d.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=<?php echo "$ans3"; ?>&ans4=E" class="correct">Aliquid saepe nesciunt alias ipsa est placeat.</a></li>
        </ol>

        <p><a href="question3.php">Cancelar</a></p>
    </main>

    <footer>
        <p><a href="../index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>