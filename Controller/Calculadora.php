<?php

include ("../View/index.php");

$expressao = $_POST['expressao'];


    try 
    {
        
        eval('$expressaoConvertida = '.$expressao.';'); 
            $resultado = $expressaoConvertida;

    } catch (\Throwable $th) {
        
        $resultado = "Calculo inválido";
    }



$_SESSION['resultado'] = $resultado;
header("Refresh: 0; url=../View/index.php");

?>