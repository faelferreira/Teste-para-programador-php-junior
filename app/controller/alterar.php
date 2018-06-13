<?php
include_once "../model/conexao/dao.php";

$nome =isset($_POST['nome'])? $_POST['nome']: "error";
$data = isset($_POST['data'])? $_POST['data']: "error";
$rua = isset($_POST['rua'])?$_POST['rua']: "error";
$numero = isset($_POST['numero'])?$_POST['numero']: "error";
$bairro = isset($_POST['bairro'])?$_POST['bairro']: 'error';
$cep = isset($_POST['cep'])?$_POST['cep']:"error";
$cidade = isset($_POST['cidade'])?$_POST['cidade']: 'error';

$conn = new Dao();

$query = "update pessoas set nome = '".$nome."',dataNasc=".$data.",rua='".$rua."',numero = ".$numero.",bairro='".$bairro."',cidade='".$cidade."',cep=".$cep." where nome ='".$nome."'";


$con=$conn->conexao();

$update = mysqli_query($con,$query);

$conn->desconectar($con);
		if(!$update){
			echo "<center><h1>Erro ao alterar!<br><h1><a href='../view/altera.php'>voltar</a></h1><center>";
		}else{
			 echo "<center><h1>Alterado com sucesso!<br><h1><a href='../view/altera.php'>voltar</a></h1><center>";
			

		}
