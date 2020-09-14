<?php

include ("../View/index.php");

$expressao = $_POST['expressao'];






if (eval('$expressaoConvertida = '.$expressao.';'))
{
    eval('$expressaoConvertida = '.$expressao.';'); 
$resultado = $expressaoConvertida;

}
else
{
    
    $resultado = "Calculo inválido";
}

$_SESSION['resultado'] = $resultado;
header("Refresh: 0; url=../View/index.php");

?>