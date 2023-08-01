<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Questão 3 - Q3</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Questão 3 - Q3</h1>

        <?php
            $ans1 = $_GET["ans1"];
            $ans2 = $_GET["ans2"];
        ?>

        <p>Q3. Curabitur eget est ut orci eleifend fermentum et sit amet felis. Nulla libero eros, tincidunt id volutpat nec, vestibulum eu felis. Donec quis rhoncus libero.</p>
        <ol type="A">
            <li><a href="q3c.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=A">Praesent hendrerit tellus in quam auctor, at sollicitudin lacus condimentum.</a></li>
            <li><a href="q3c.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=B">Perspiciatis totam quisquam vitae eligendi, ipsa repellat?</a></li>
            <li><a href="q3c.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=C">Nunc molestie felis libero, sagittis posuere velit iaculis sit amet.</a></li>
            <li><a href="q3c.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=D" class="correct">Quam accusamus laudantium similique veniam minus. Inventore.</a></li>
            <li><a href="q3c.php?ans1=<?php echo "$ans1"; ?>&ans2=<?php echo "$ans2"; ?>&ans3=E">Nulla porta purus vel tincidunt luctus.</a></li>
        </ol>

        <p><a href="question3.php">Cancelar</a></p>
    </main>

    <footer>
        <p><a href="../index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>