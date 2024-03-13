<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Verificar Positivo, Negativo ou Neutro</title>
</head>
<body>
    <h1>Verificar se um número é positivo, negativo ou neutro (zero)</h1>
    <!-- Criar um código para verificar se o número é positivo, negativo ou neutro (zero). -->
    
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num > 0) {
            echo "O número informado é POSITIVO.";
        } elseif ($num < 0) {
            echo "O número informado é NEGATIVO.";
        } else {
            echo "O número informado é NEUTRO (zero).";
        }
    }
    ?>
      
    <form method="get" action="">
        <input name="num" type="number">
        <button type="submit">Enter</button>
    </form>
</body>
</html>