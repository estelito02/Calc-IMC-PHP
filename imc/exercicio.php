<?php


echo "<h3> ola ".$_POST['nome'];

echo ", ";

echo "seja bem vindo: </h3>";

echo "<br>";



echo "o seu peso e ".$_POST['peso'];

echo "<br>";


$p = $_POST['peso'];
$a = $_POST ['altura'];
$imc= $p/($a**2);
echo "imc".number_format($imc, 2,',',' ');



/*
Classificação

IMC	            Classificação
       < 16	    Magreza grave
16 a   < 17 	Magreza moderada
17 a   < 18,5	Magreza leve
18,5 a < 25	    Saudável
25 a   < 30	    Sobrepeso
30 a   < 35	    Obesidade Grau I
35 a   < 40	    Obesidade Grau II (severa)
       > 40	    Obesidade Grau III (mórbida)
*/


echo "</br>";


switch( $imc ){

    case $imc < 16:
        echo "<h2>Magreza grave</h2>";
        break;

    case $imc < 17:
        echo "<h2> Magreza moderada </h2>";
        break;

    case $imc < 18.5 :
        echo "<h2> Magreza leve </h2>";
        break;

    case $imc < 25 :
        echo "<h2> Saudavel </h2>";
        break;

    case $imc < 30 :
        echo "<h2>Sobrepeso</h2>";
        break;

    case $imc < 35 :
        echo "<h2>Obesidade Grau I</h2>";
        break;

    case $imc <= 40 :
        echo "<h2> Obesidade Grau II (Severa)</h2>";
        break;

    case $imc > 40 :
        echo "<h2>  Obesidade Grau III (mórbida </h2>";
        break;


    default :
        echo "<h2>Dados Invalidos</h2>";
}


?>
