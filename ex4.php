<?php 
echo"<h3>Recuperando Dados </h3>";

//Recuperando dados - O que você achou do site? 

if (isset($_REQUEST['avaliacao'])){

	echo "<b>O que você achou do site?</b> <br><br>";
	echo "Avalição: ".$_REQUEST['avaliacao'];
}

//Recuperando dados - Qual seção você mais gostou?

echo"<br><br> <b>Qual seção você mais gostou?</b> <br><br>";
if ($_REQUEST['secao']) {

	echo "Selecionado: ".$_REQUEST['secao'] ;
}else{

	echo $_REQUEST['outra'];
}

//Recuperando Dados - Comentários
echo "<br><br> <b>Digite seu comentários no campo abaixo:</b> <br><br>";

if ($_REQUEST['comentario']) {
	echo"Comentários: ";
	echo $_REQUEST['comentario'];
}else{

	echo"Não ouve comentários.";
}

//Recuperando Dados - Cadastro 

echo"<br><br> <b>Informações para contato:</b> <br><br>";

echo "Nome:".$_REQUEST['nome']."<br><br>";
echo "E-mail: ".$_REQUEST['email']."<br><br>";
echo "Fone: " .$_REQUEST['fone']."<br><br>";

//Recuperando Dados - Checkbox

if (isset($_REQUEST['msg'])) {
echo $_REQUEST['msg'];
}else{}

//Henrique Gomes e Caio Di Pietro

 ?>