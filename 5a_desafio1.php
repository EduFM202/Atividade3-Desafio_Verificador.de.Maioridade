<?php

echo "<form method='post' action=''>
        <label for='nome'>Nome:</label>
        <input type='text' name='nome' required><br>

        <label for='ano_nascimento'>Ano de Nascimento:</label>
        <input type='number' name='ano_nascimento' required><br>

        <button type='submit'>Enviar</button>
    </form>";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $ano_nascimento = $_POST['ano_nascimento'];

        // Calcula a idade do usuário
        $idade = date('Y') - $ano_nascimento;

        if ($idade >= 18) {
            echo "<p>Acesso permitido, $nome!</p>";
            // Salva o nome e a idade em log_acessos.txt
            $arquivo = fopen('log_acessos.txt', 'a');
            fwrite($arquivo, "$nome; $idade\n");
            fclose($arquivo);
        } else {
            echo "<p>Acesso negado, $nome!</p>";
        }
    }

    echo "idade calculada: $idade";
