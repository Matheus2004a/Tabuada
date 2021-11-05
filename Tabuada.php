<?php
    

    $numEscolhido = $_POST["numEsc"];
    
    if(empty($_POST["numEsc"])){
        $_SESSION['number-empty'] = "Entre com algum número. ";
    }
    else{
        for($contador = 1; $contador <= 10; $contador++){
            $_SESSION['number-calc'] = "$numEscolhido x $contador = ".($numEscolhido * $contador);
            $_SESSION['hr'] = "<hr>";
        }
    }
?>