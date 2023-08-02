<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Questão 1</title>
</head>

<body>
    <header>
        <h2>DevWeb2023</h2>
    </header>

    <main>
        <h1>Questão 1</h1>

        <form method="post">
            <fieldset>
                <legend>Critérios para geração</legend>

                <label for="quantidade">Quantidade de elementos</label>
                <label for="quantidade_2">(1 a 15)</label>
                <input type="number" name="quantidade" id="quantidade" min="1" max="15" value="<?php echo isset($_POST['quantidade']) ? $_POST['quantidade'] : 1; ?>" required>
                <br>
                <input type="radio" name="elemento" id="elemento_text" value="text" <?php echo (isset($_POST['elemento']) && $_POST['elemento'] === 'text') ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label for="elemento_text">Texto</label>
                <br>
                <input type="radio" name="elemento" id="elemento_password" value="password" <?php echo (isset($_POST['elemento']) && $_POST['elemento'] === 'password') ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label for="elemento_password">Senha</label>
                <br>
                <input type="radio" name="elemento" id="elemento_button" value="button" <?php echo (isset($_POST['elemento']) && $_POST['elemento'] === 'button') ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label for="elemento_button">Botão</label>
                <br>
                <input type="radio" name="elemento" id="elemento_radio" value="radio" <?php echo (isset($_POST['elemento']) && $_POST['elemento'] === 'radio') ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label for="elemento_radio">Rádio</label>
                <br>
                <input type="radio" name="elemento" id="elemento_checkbox" value="checkbox" <?php echo (isset($_POST['elemento']) && $_POST['elemento'] === 'checkbox') ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label for="elemento_checkbox">Caixa de Seleção</label>
                <br>
                <input type="radio" name="elemento" id="elemento_range" value="range" <?php echo (isset($_POST['elemento']) && $_POST['elemento'] === 'range') ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label for="elemento_range">Faixa</label>

            </fieldset>
        </form>

        <hr>

        <?php
        if (isset($_POST['quantidade']) && isset($_POST['elemento'])) {
            $quantidade = intval($_POST['quantidade']);
            $elemento = $_POST['elemento'];

            function gerar_elementos_HTML($quantidade, $elemento)
            {
                for ($i = 1; $i <= $quantidade; $i++) {
                    echo "<p><strong>Exemplo $i:</strong><br>";
                    switch ($elemento) {
                        case 'text':
                            $codigo_php = htmlentities("<?php echo \"<input type='text' name='exemplo_texto_$i' placeholder='Exemplo de Caixa de Texto'>\"; ?>");
                            $codigo_html = "<input type='text' name='exemplo_texto_$i' placeholder='Digite seu texto aqui'>";
                            break;
                        case 'password':
                            $codigo_php = htmlentities("<?php echo \"<input type='password' name='exemplo_senha_$i' placeholder='Exemplo de Senha'>\"; ?>");
                            $codigo_html = "<input type='password' name='exemplo_senha_$i' placeholder='Digite sua senha aqui'>";
                            break;
                        case 'button':
                            $codigo_php = htmlentities("<?php echo \"<button type='button'>Exemplo de Botão</button>\"; ?>");
                            $codigo_html = "<button type='button'>Clique-me</button>";
                            break;
                        case 'radio':
                            $codigo_php = htmlentities("<?php echo \"<input type='radio' name='exemplo_radio' value='opcao_$i'> Opção $i\"; ?>");
                            $codigo_html = "<input type='radio' name='exemplo_radio' value='opcao_$i'> Opção $i";
                            break;
                        case 'checkbox':
                            $codigo_php = htmlentities("<?php echo \"<input type='checkbox' name='exemplo_checkbox_$i' value='opcao_$i'> Opção $i\"; ?>");
                            $codigo_html = "<input type='checkbox' name='exemplo_checkbox_$i' value='opcao_$i'> Opção $i";
                            break;
                        case 'range':
                            $codigo_php = htmlentities("<?php echo \"<input type='range' name='exemplo_faixa_$i' min='0' max='100'> Faixa $i\"; ?>");
                            $codigo_html = "<input type='range' name='exemplo_faixa_$i' min='0' max='100'> Faixa $i";
                            break;
                        default:
                            $codigo_php = htmlentities("<p>Selecione um elemento para que os exemplos possam ser gerados.</p>");
                            $codigo_html = "<p>Selecione um elemento para que os exemplos possam ser gerados.</p>";
                    }
                    echo "<pre>$codigo_php</pre>";
                    echo $codigo_html . "<br>";
                    echo "<hr></p>";
                }
            }

            gerar_elementos_HTML($quantidade, $elemento);
        }
        ?>

    </main>

    <footer>
        <p><a href="index.php">Página Inicial</a></p>
        <p>&copy;2023 - Matheus Vieira e Cézar Passos</p>
    </footer>
</body>

</html>
