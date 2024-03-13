<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Par ou Impar</title>
</head>
<body>
    <h1>Codigo para verificação - PAR ou Impar</h1>
    <!-- Codigo PHP -->

    
    <?php
      

      if ((isset($_GET['num']))) {
       $num = $_GET['num'];
      }
     if($num % 2 == 0){
        echo "O numero informado é PAR";
      }else{
        echo "O numero informado é Impar";
      }
     
     ?>
      
   

</body>
<form method="" action="">
        <input name="num" type="number">
        <button type="submit"> Enter </button>
    </form>
</html>