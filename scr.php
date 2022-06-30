<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo3.css"/>
    <meta charset="UTF-8"/>
    <title>QUADRO NEGRO - MATHEUS</title>
    
</head>
<body>
<div>
    <form method = "POST" action="_modelophp.php">
    <?php
    $ano = $_GET['Numeros'];
    $idade = date('Y') - $ano ; 
    echo "Nasceu no ano de $ano e hoje tem $idade anos <br/> ";
    if ($idade >= 16){
        if($idade >= 16 && $idade <= 18 OR $idade >= 65 ){
            echo "Por esse motivo você pode Votar mas não é obrigatório";
        }
        elseif($idade >= 18 && $idade <= 66){
            echo "Por esse motivo seu voto é obrigatório";
        }
        } 
    else
        echo"não pode votar";
    
    ?>
    
    <br/>
    <br/>

    <br/>
    <br/>
    <fieldset><legend>Deseja votar agora?</legend>
    <a href = "index.php">Voltar</a>
    <input type="submit" value= "Votar"/>
       
</form>

</div>
</body>
</html>
 