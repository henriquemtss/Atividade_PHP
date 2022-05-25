<?php 
$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];

echo"<h3>Recuperando Dados - Cadastro</h3>";

 	if(($nome == "etecia") && ($senha == "etecia238")){
	echo "Autenticação  realizada  com  sucesso";
	}else
	{
	echo "Você não tem permissão para vizualizar essa pagina";
	}
	//Henrique Gomes e Caio Di Pietro
?>
  
