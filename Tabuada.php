<?php
    session_start();
    $numEsc = $_POST['numEsc'];
    $numMaxEsc = $_POST['numMax'];
    
    if(empty($_POST["numEsc"])){
        $_SESSION['msg-erro'] = "<font color='red' align='center'>Entre com algum número.</font>";
    }
    else{
        for($contador = 0; $contador <= $numMaxEsc; $contador++){
            echo "$numEsc x $contador = ".($numEsc * $contador);
            echo "<hr>";
        }
    }
?>