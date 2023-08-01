<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Questão 3 - Q2</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Questão 3 - Q2</h1>

        <?php
            $ans1 = $_GET["ans1"];
        ?>

        <p>Q2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quibusdam recusandae quaerat blanditiis, sequi excepturi!</p>
        <ol type="A">
            <li><a href="q3b.php?ans1=<?php echo "$ans1"; ?>&ans2=A" class="correct">Lorem ipsum dolor, sit amet consectetur adipisicing.</a></li>
            <li><a href="q3b.php?ans1=<?php echo "$ans1"; ?>&ans2=B">Perspiciatis totam quisquam vitae eligendi, ipsa repellat?</a></li>
            <li><a href="q3b.php?ans1=<?php echo "$ans1"; ?>&ans2=C">Totam, nesciunt sequi reprehenderit sunt eligendi odit.</a></li>
            <li><a href="q3b.php?ans1=<?php echo "$ans1"; ?>&ans2=D">Quam accusamus laudantium similique veniam minus. Inventore.</a></li>
            <li><a href="q3b.php?ans1=<?php echo "$ans1"; ?>&ans2=E">Autem, neque illum. Nisi dicta non minus.</a></li>
        </ol>

        <p><a href="question3.php">Cancelar</a></p>
    </main>

    <footer>
        <p><a href="../index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>