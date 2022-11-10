<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>inverso</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="TDATA">Clique para inverter o link: rb.arblu.www</h1>
    </div>
<form  method="POST">
        <button class="res" name="acao">Mostrar</button> <br>
        
        <?php
      if(isset($_POST['acao'])){
      $link = "rb.arblu.www";
      $inverso =  strrev($link);
      
        echo "<a style='margin-top: 30px; font-size: 35px; color: black;' href='https://www.ulbra.br/'>
         $inverso
     </a>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>