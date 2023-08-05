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
                <label>Aporte inicial (R$):</label>
                <input type="number" step="0.01" name="aporte_inicial" value="<?php echo isset($_POST['aporte_inicial']) ? $_POST['aporte_inicial'] : ''; ?>" required>
                <label> [até 999.999,99]</label>
                <br>

                <label>Período (meses): </label>
                <input type="number" name="periodo" min="1" max="480" value="<?php echo isset($_POST['periodo']) ? $_POST['periodo'] : ''; ?>" required>
                <label> [1 a 480]</label>
                <br>

                <label>Rendimento mensal (%): </label>
                <input type="number" step="0.01" name="rendimento_mensal" value="<?php echo isset($_POST['rendimento_mensal']) ? $_POST['rendimento_mensal'] : ''; ?>" required>
                <label> [até 20%]</label>
                <br>

                <label>Aporte mensal:</label>
                <input type="number" step="0.01" name="aporte_mensal" value="<?php echo isset($_POST['aporte_mensal']) ? $_POST['aporte_mensal'] : ''; ?>" required>
                <label> [até 999.999,99]</label>
                <br>

                <input type="submit" name="submit" value="Processar">
            </fieldset>
        </form>

        <?php
            function calcularRendimento($valor_inicial, $aporte_mensal, $taxa_rendimento){
                $rendimento = ($valor_inicial + $aporte_mensal) * ($taxa_rendimento / 100);
                $total = $valor_inicial + $aporte_mensal + $rendimento;
                return array($rendimento, $total);
            }




            if (isset($_POST['submit'])) {
                $aporte_inicial = floatval($_POST['aporte_inicial']);
                $periodo = intval($_POST['periodo']);
                $rendimento_mensal = floatval($_POST['rendimento_mensal']);
                $aporte_mensal = floatval($_POST['aporte_mensal']);

                $valor_inicial = $aporte_inicial;




                echo '<h2>Resultados:</h2>';
                echo '<table border="1">';
                echo '<tr><th>Mês</th><th>Valor Inicial (R$)</th><th>Aporte (R$)</th><th>Rendimento (R$)</th><th>Total (R$)</th></tr>';

                for ($mes = 1; $mes <= $periodo; $mes++) {
                    if ($mes == 1) {
                        list($rendimento, $total) = calcularRendimento($valor_inicial, 0, $rendimento_mensal);
                        echo '<tr>';
                        echo '<td>' . $mes . '</td>';
                        echo '<td>' . number_format($valor_inicial, 2, ',', '.') . '</td>';
                        echo '<td>' . number_format(0, 2, ',', '.') . '</td>';
                        echo '<td>' . number_format($rendimento, 2, ',', '.') . '</td>';
                        echo '<td>' . number_format($total, 2, ',', '.') . '</td>';
                        echo '</tr>';
                        $valor_inicial = $total;
                    }else {
                        list($rendimento, $total) = calcularRendimento($valor_inicial, $aporte_mensal, $rendimento_mensal);
                        echo '<tr>';
                        echo '<td>' . $mes . '</td>';
                        echo '<td>' . number_format($valor_inicial, 2, ',', '.') . '</td>';
                        echo '<td>' . number_format($aporte_mensal, 2, ',', '.') . '</td>';
                        echo '<td>' . number_format($rendimento, 2, ',', '.') . '</td>';
                        echo '<td>' . number_format($total, 2, ',', '.') . '</td>';
                        echo '</tr>';
                        $valor_inicial = $total;
                    }
                }
            echo '</table>';
        }
        ?>
    </main>

    <footer>
        <p><a href="../index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>