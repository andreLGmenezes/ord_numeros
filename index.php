<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenando numeros</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Vamos ordenar seus numeros!</h1>
        <p>Digite uma lista de números separados por vírgula para processá-los.</p>
        
        <form method="POST">
            <label for="numeros">Números (separados por vírgula):</label>
            <input type="text" id="numeros" name="numeros" required>
            <button type="submit">Enviar</button>
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (!empty($_POST['numeros'])) {
                
                $input = $_POST['numeros'];

                $numeros = array_map('intval', explode(',', $input));

                $numeros = array_unique($numeros);
                rsort($numeros);

                echo "<h2>Resultado:</h2>";
                echo "<p>Números ordenados (sem duplicados): " . implode(', ', $numeros) . "</p>";
            } else {
                echo "<p>Por favor, insira uma lista de números.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
