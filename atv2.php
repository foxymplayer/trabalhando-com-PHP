<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Par, Ímpar ou Redondo</title>
</head>
<body>
    <h1>Código para verificação - Par, Ímpar ou Redondo</h1>
    <!-- Criar um código para verificar se o número é par, ímpar ou redondo. -->
    
    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num % 2 == 0) {
            echo "O número informado é PAR.";
        } elseif ($num % 2 == 1) {
            echo "O número informado é ÍMPAR.";
        }

        if ($num % 10 == 0) {
            echo " O número informado é REDONDO.";
        }
    }
    ?>
      
    <form method="get" action="">
        <input name="num" type="number">
        <button type="submit">Enter</button>
    </form>
</body>
</html>