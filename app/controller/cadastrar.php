<?php

include_once "../model/conexao/dao.php";


$nome =isset($_POST["nome"])?$_POST["nome"]: "erro";
$data =isset($_POST["data"])?$_POST["data"]:"erro";
$rua =isset($_POST["rua"])?$_POST["rua"]:"erro";
$numero =isset($_POST["numero"])?$_POST["numero"]:"erro";
$bairro =isset($_POST["bairro"])?$_POST["bairro"]:"erro";
$cep =isset($_POST["cep"])?$_POST["cep"]:"erro";
$cidade =isset($_POST["cidade"])?$_POST["cidade"]:"erro";

$con = new Dao();
$conn = $con->conexao();

$query = "insert into pessoas (nome,dataNasc,rua,numero,bairro,cep,cidade) values ('".$nome."','".$data."','".$rua."',".$numero.",'".$bairro."',".$cep.",'".$cidade."')";

$grava = mysqli_query($conn,$query);
		
			if(!$grava){
				echo "<h1>Não foi possivel gravar!</h1><br><a href='../view/index.php'><h1>voltar</h1></a>";
			}else{

		echo "<h1>Gravado com sucesso!<center></h1><br><a href='../view/index.php'><h1>voltar</h1></a></center>";
		}


$con->desconectar($conn);




