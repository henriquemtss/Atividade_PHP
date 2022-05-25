<?php 	 
$altura = $_REQUEST['altura'];
$base = $_REQUEST['base'];

	$area = $altura*$base;

	$perimetro = ($altura*2) + ($base*2); 

echo "<h2>Calculando Área e Perímetro de um Retângulo - Recupendo Dados </h2>";

echo "A área do retangulo é de: ".$area;

echo "<br><br> O perímetro do retangulo é de: ".$perimetro;

//Henrique Gomes e Caio Di Pietro
?>