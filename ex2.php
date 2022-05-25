<?php 

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];

	$imc = $peso / ($altura*$altura);
echo"<h3>Calculo de IMC - Índice de massa corporal</h3>";
	
	if ($imc > 25) {
		printf("<br> Seu IMC é de: %.2f <br> Você está acima do peso!",$imc);
		echo"<br><img src=img/acimap.png width=15% >";
	}else{
		printf("<br> Seu IMC é de: %.2f <br> Você está saudavel!",$imc);
		echo"<br><img src=img/saudavel.png width=% >";
	}
//Henrique Gomes e Caio Di Pietro
?>



	