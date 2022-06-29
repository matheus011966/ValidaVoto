<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo3.css"/>
    <meta charset="UTF-8"/>
    <title>QUADRO NEGRO - MATHEUS</title>
    
</head>
<body>
<div>
    <form method = "POST" action="scr.php">
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
    <input type="radio" name="voto" id="sim" value="sim" checked/>
    <label for="sim"> SIM </label><br/>
    <input type="radio" name="voto" id="nao" value="nao"/>
    <label for="nao"> Não </label><br/>
    </fieldset>
    <input type="submit" value= "Enviar"/>
       
</form>

</div>
</body>
</html>
 