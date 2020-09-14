<?php

include ("../View/index.php");

$expressao = $_POST['expressao'];



$expressao = preg_replace('/\s+/', '', $expressao);

$validaNumeros = '(?:\d+(?:[,.]\d+)?)'; 
$validaOperadores = '[+\/*\^%-]'; 
$expressaoRegular = '/^(('.$validaNumeros.'|'.'\s*\((?1)+\)|\((?1)+\))(?:'.$validaOperadores.'(?2))?)+$/'; 

if (preg_match($expressaoRegular, $expressao))
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