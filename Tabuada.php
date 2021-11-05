<?php
    $numEscolhido = $_POST["numEsc"];
    
    if(empty($_POST["numEsc"])){
        echo "Entre com algum número. ";
    }
    else{
        for($contador = 1; $contador <= 10; $contador++){
            echo "$numEscolhido x $contador = ".($numEscolhido * $contador);
            echo "<hr>";
        }
    }
?>