<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Questão 4</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Questão 4</h1>

        <form method="post">
            <fieldset>
                <legend>Parâmetros</legend>

                <label for="init">Aporte inicial:</label>
                <input type="number" name="init" id="init" min="1" max="999999" step="any" value="500">
                <label for="init">[até R$999.999,99]</label>
                <br>

                <label for="time">Período:</label>
                <input type="number" name="time" id="time" min="1" max="480" step="1" value="12">
                <label for="time">[1 a 480]</label>
                <br>

                <label for="ret">Rendimento mensal (%):</label>
                <input type="number" name="ret" id="ret" max="20" step="0.01" value="0.68">
                <label for="ret">[até 20%]</label>
                <br>

                <label for="mont">Aporte mensal:</label>
                <input type="number" name="mont" id="mont" min="1" max="999999" step="any" value="350">
                <label for="mont">[até R$999.999,99]</label>
                <br>

                <button type="submit">Processar</button>
            </fieldset>
        </form>
    </main>

    <footer>
        <p><a href="../index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>